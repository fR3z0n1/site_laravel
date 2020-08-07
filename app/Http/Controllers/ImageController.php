<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{

    // public function 

    public function getAllPathImages(Image $image) {
        
        $images = $image->all();
        return view('gallery', ['images' => $images]);
    }
}
