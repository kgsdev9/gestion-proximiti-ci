<?php

namespace App\Services;

use App\Repositories\MessageRepository;

class MessageService {

    protected $messageRepository ;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }


    public function all() {
        return $this->messageRepository->all();
    }

    public function single(string $id) {
        return $this->messageRepository->single($id);
    }

}
