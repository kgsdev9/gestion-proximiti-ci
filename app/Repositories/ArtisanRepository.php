<?php


namespace App\Repositories;

use App\Models\Media;
use App\Models\Artisan;
use App\Http\Requests\ArtisanRequest;
use Illuminate\Support\Facades\File;

class ArtisanRepository {

    protected $artisan ;

    public function __construct(Artisan $artisan)
    {
        $this->artisan = $artisan;
    }

    public function all() {
        return $this->artisan->all();
    }


    public function collectionFilters() {
        return $this->artisan
                    ->orderByDesc('created_at')
                    ->get();
    }


    public function single($id) {
        return $this->artisan->find($id);
    }

    public function save(ArtisanRequest $data) {

        if(!empty($data)) {

        if($data->hasfile('photo')) {
            $filetwo = $data->file('photo');
            $filenametwo  = $data->file('photo')->getClientOriginalName() ;
            $filetwo->move(public_path('artisans/photo'), $filenametwo);

            }

          $ressourceStore =   $this->artisan->create([
                'name' => $data['name'],
                'slug' => \Str::slug($data['name']),
                'prenom' =>  $data['prenom'],
                'telephone' => $data['telephone'],
                'status' => $data['status'],
                'num_whattsapp' => $data['num_whattsapp'],
                'adresse' => $data['adresse'],
                'speciality_id' => $data['speciality_id'],
                'photo'=>$filenametwo,
                'email' => $data['email'],
                'description' => $data['description'],
                'commune' =>  $data['commune'],
                'date_adhesion' => $data['date_adhesion'],
                'zone_intervention' =>$data['zone_intervention'],
            ]);

            if( $data->hasfile('file')) {
                $file = $data->file('file');
                foreach($file as $informations) {
                    $filename = time().'_'.$informations->getClientOriginalName();
                    $informations->move(\public_path("programme"), $filename);
                    Media::create([
                    'artisan_id' => $ressourceStore->id,
                    'image' => $filename
                     ]);
                }
            }

        }
            return $ressourceStore;

    }

    public function getPathPhoto(string $ressource) {
        if($ressource) {
            $path = 'artisans/photo/'.$ressource;
        }
        return $path;
    }


    public function update(ArtisanRequest $data, int $id)
    {
        $ressource  = Artisan::find($id);
        $ressource->name = $data['name'];
        $ressource->slug = \Str::slug($data['name']);
        $ressource->telephone =  $data['telephone'];
        $ressource->num_whattsapp =  $data['num_whattsap'];
        $ressource->adresse =  $data['adresse'];
        $ressource->email =  $data['email'];
        $ressource->status = $data['statut'];
        $ressource->commune = $data['commune'];
        $ressource->date_adhesion = $data['date_adhesion'];
        $ressource->zone_intervention = $data['zone_intervention'];
        $ressource->speciality_id = $data['speciality_id'];
        $ressource->description = $data['description'];

        if($data->hasFile('photo')) {
            $chemin = 'artisans/photo/'.$ressource->cover_image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $data->file('photo');
            $name = $data->file('photo')->getClientOriginalName();
            $file->move(public_path('artisans/photo/'),$name);
            $ressource->photo = $name;
         }

        $ressource->update();

        if($data->hasFile('file')) {
            $files = $data->file('file');
            foreach ($files as $file) {
            $image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("programme"), $image);
            Media::create([
                'artisan_id' => $ressource->id,
                'image' => $image
                 ]);
            }
        }
        return $ressource ;
    }



    public function destroy($id)
    {
       $ressource =  $this->single($id);

        if(File::exists("artisans/photo/".$ressource->photo)) {
            File::delete("artisans/photo/".$ressource->photo);
            }

         $ressourceFileArtisan =Media::where('artisan_id', $ressource->id)->get();
        foreach($ressourceFileArtisan as $value){
            File::exists("programme/". $value->image);
            File::delete("programme/". $value->image);
        }
        return $ressource ;

    }

    public function display(string $photo, Object $files) {
        $collectionRessource = [];
        if($photo) {
            $pathPhoto = "artisans/photo/".$photo;

        }

        if($files) {
            $value = 0;
            foreach($files as $file) {
                $pathfile = "programme/".$file->image;
                 $value+=1 ;
            }
        }
          $collectionRessource = [$pathPhoto,  $pathfile ?? '[]'];
          return $collectionRessource;
    }


}
