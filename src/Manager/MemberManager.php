<?php

namespace App\Manager;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class MemeberManager
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