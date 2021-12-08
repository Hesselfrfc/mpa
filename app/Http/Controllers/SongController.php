<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    function showSong($song_id)
    {
        $data  = Song::find($song_id);
        //dd($data);
        return view('song' , $data);
    }
}
