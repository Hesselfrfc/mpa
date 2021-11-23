<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    //

    function show()
    {
        $data  = Genre::all();
        return view('index' , ['genres'=>$data]);
    }

    function showSongs($id)
    {    
        //$test = Genre::find($id);
        //$data = Genre::join('songs', 'genres.id', '=', 'songs.genre_id')
        //->where('songs.genre_id', '=', $test->id)
        //->get(['genres.*', 'songs.*']);
        //return view('test' , ['songs'=>$data]);

        $data = Genre::find($id);
        return view('test' , ['songs'=>$data->songs]);
    }
}
