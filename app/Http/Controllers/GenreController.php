<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // Show all genres
    function show()
    {
        $data  = Genre::all();
        return view('index' , ['genres'=>$data]);
    }


    // Show details of song which are related to the right genre
    function showSongsForGenre($genre_id)
    {
        $data = Genre::find($genre_id);
        //dd($data);
        return view('genre' , ['songs'=>$data->songs]);
    }
}
