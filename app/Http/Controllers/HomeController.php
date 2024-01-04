<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\Album;

class HomeController extends Controller
{
    //
    public function index()
    {
        $al_photo = Album::orderby('id', 'desc')->get();

        return view(
            'index',
            compact(
                'al_photo',
            )
        );
    }

    public function home($id)
    {
        $al_photo = Album::where(['id' => $id])->first(); 
        $photos = Photo::where(['album_id' => $id])->get(); 

        return view('photo', compact('al_photo', 'photos'));
    }
}
