<?php

namespace App\Http\Controllers;
use App\Models\SessionPlaylist;
use App\Models\Song;
use App\Models\Genre;


use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    //
    public function index() {
        $sp = new SessionPlaylist();
        //dd($sp);
        echo '<pre>';
        var_dump($sp);
        echo '</pre>';
    }

    public function add($song_id) {
        $sp = new SessionPlaylist();
        $sp->addSongToPlaylist($song_id);
        //dd($sp);
        //echo '<pre>';
        //var_dump($sp);
        //echo '</pre>';
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Song succesfully added to playlist")';  
        echo '</script>';
        $songIds = $sp->showSongsInPlaylist();
        $songs = Song::find($songIds);
        return view('session' , ['songs'=>$songs]);
    }

    public function showSession() {
        $sp = new SessionPlaylist();
        $songIds = $sp->showSongsInPlaylist();
        $songs = Song::find($songIds);
        return view('session' , ['songs'=>$songs]);
    }
}
