<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    //
    function show()
    {
        $data = Song::join('genres', 'genres.id', '=', 'songs.genreId')
        ->where('songs.genreId', '=', 1)
        ->get(['genres.*', 'songs.*']);
        return view('test' , ['songs'=>$data]);
    }
}
