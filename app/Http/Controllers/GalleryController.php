<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class GalleryController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view('gallery.index', compact('photos'));
    }

    public function create() {
        return view('gallery.create');
    }

}
