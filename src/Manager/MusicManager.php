<?php

namespace App\Manager;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class MusicManager
{
public function uploadImage(UploadedFile $file,)
{
    $newFilename = uniqid().'.'.$file->guessExtension();

    $file->move(
        $newFilename
    );
return '/images'.$newFilename;
}
}