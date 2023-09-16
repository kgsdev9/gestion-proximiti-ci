<?php

namespace App\Services;

use App\Repositories\UserRepository;

 class  UserService
{

    protected $UserRepository ;

     public function __construct(UserRepository $UserRepository)
     {
        $this->UserRepository = $UserRepository;
     }

     public function all() {
        return $this->UserRepository->all();
     }

     public function createNewUser(Object $data) {
        return $this->UserRepository->createNewUser($data);
     }

     public function single($id) {
        return $this->UserRepository->single($id);
     }

     public function update(Object $data, $id) {
        return $this->UserRepository->update($data, $id);
     }

}
