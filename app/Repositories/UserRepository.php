<?php

namespace App\Repositories;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;


class UserRepository {

    protected $User ;

    public function __construct(User $User)
    {
        $this->User = $User;
    }

    public function all() {
        return $this->User->all();
    }


    public function single($id) {
        return $this->User->find($id);
    }

    public function createNewUser(UserRequest $request) {
        $data = $request->input();
        $singleStore =  User::create([
           'name' => $data['name'],
           'email' => $data['email'],
            'role_id' =>$data['role_id'],
           'password' => Hash::make($data['password']),
       ]);
       return $singleStore;
    }



    public function update(UserRequest $request , $id) {
        $ressource  = $this->single($id);
        $ressource->name =  $request->input('name');
        $ressource->email  = $request->input('email');
        $ressource->role_id = $request->input('role_id');
        $ressource->password = Hash::make($request->input('password'));
        $ressource->update();
        return $ressource;
    }

}
