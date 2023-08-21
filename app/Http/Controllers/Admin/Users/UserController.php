<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.liste', compact('users'));
    }

    public function create() {

        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    public function store(UserRequest  $request) {
        {

            $data = $request->input();
             User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                 'role_id' =>$data['role_id'],
                'password' => Hash::make($data['password']),
            ]);
            Flashy::message('Utilisateur crée avec succes');
            return redirect()->route('users.index');
    }

}

        public function edit($id) {
            $ressource  = User::find($id);
            $roles = Role::all();
            return view('admin.users.edit', compact('ressource', 'roles'));
        }

        public function destroy($id) {
            $ressource  = User::find($id);
            $ressource->delete();
             return  redirect()->back();
        }

        public function update(UserRequest $request , $id) {
            $ressource  = User::find($id);
            $ressource->name =  $request->input('name');
            $ressource->email  = $request->input('email');
            $ressource->role_id = $request->input('role_id');
            $ressource->password = Hash::make($request->input('password'));
            $ressource->update();
            Flashy::message('Utilisateur modifié avec succes');
            return redirect()->route('users.index');

        }


}
