<?php

namespace App\Services;

use App\Repositories\MediaRepository;

class MediaService
{
    protected $mediaRepository ;



     public function __construct(MediaRepository $mediaRepository)
     {
        $this->mediaRepository = $mediaRepository;

        
     }

     public function  getMediaArtisan($id) {
        return $this->mediaRepository->getMediaArtisan($id);

     }


}
