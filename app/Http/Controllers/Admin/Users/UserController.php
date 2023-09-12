<?php

namespace App\Http\Controllers\Admin\Users;

use MercurySeries\Flashy\Flashy;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    protected $userService ;
    protected $roleService ;

    public function __construct(UserService $userService, RoleService $roleService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
        $this->roleService = $roleService;
    }

    public function index()
    {
        return view('admin.users.liste', [
            'allUsers' => $this->userService->all()
        ]);
    }

    public function create() {


        return view('admin.users.create', [
            'allRoles'=> $this->roleService->all()
        ]);
    }

    public function store(UserRequest  $request)
         {
        $this->userService->createNewUser($request);
        return redirect()->route('users.index', ['success' => true]);
        }

        public function edit($id) {
            return view('admin.users.edit', [
                'singleUser'=> $this->userService->single($id),
                'allRoles'=> $this->roleService->all()
            ]);
        }

        public function destroy($id) {
            $ressource  = $this->userService->single($id) ;
            if($ressource->id  == Auth::user()->id) {
                Flashy::message('Vous n\'avez pas le droit de le faire !');
                return redirect()->back();
            } else {
                $ressource->delete();
             return  redirect()->back();
            }

        }

        public function update(UserRequest $request , $id) {
             $this->userService->update($request, $id);
            Flashy::message('Utilisateur modifié avec succes');
            return redirect()->route('users.index');

        }
}
