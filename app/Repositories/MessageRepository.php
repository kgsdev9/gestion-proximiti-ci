<?php

namespace App\Repositories;

use App\Models\Message;

class MessageRepository {

    protected $message ;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }


    public function all() {
        return $this->message->all();
    }

    public function single($id) {
        return $this->message->find($id);
    }

}
