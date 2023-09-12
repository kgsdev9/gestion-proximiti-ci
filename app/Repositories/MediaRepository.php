<?php

namespace App\Repositories;

use App\Models\Media;


class MediaRepository {

    protected $media ;

    public function __construct(Media $media)
    {
        $this->media = $media;
    }

    public function all() {
        return $this->media->all();
    }

    public function getMediaArtisan($id) {
        return   $this->media->where('artisan_id', $id)
                             ->first();
    }


    public function collectionFilters() {
        return $this->media
                    ->orderByDesc('created_at')
                    ->get();
    }


    public function single($id) {
        return $this->media->find($id);
    }


}
