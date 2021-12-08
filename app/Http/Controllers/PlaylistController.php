<?php

namespace App\Http\Controllers;
use App\Models\SessionPlaylist;

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
        echo '<pre>';
        var_dump($sp);
        echo '</pre>';
    }
}
