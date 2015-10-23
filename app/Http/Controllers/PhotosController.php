<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Flyer;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddPhotoRequest;

class PhotosController extends Controller
{
    /**
     * Apply a photo to the referenced flyer
     * @param $zip
     * @param $street
     * @param AddPhotoRequest $request
     */
    public function store($zip, $street, AddPhotoRequest $request)
    {

        $photo = Photo::fromFile($request->file('file'));

        //$photo = $this->makePhoto($request->file('file'));
        Flyer::locatedAt($zip, $street)->addPhotos($photo);

    }
}
