<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\Models\Genre;

class SessionPlaylist //extends Model
{
    use HasFactory;

    private $items = Array();

    function __construct()
    {
        if (! Session::exists('playlist')) {
            Session::put('playlist', $this->items);
        } else {
            $this->items = Session::get('playlist');
        }
    }

    function addSongToPlaylist($song_id) {
        //$this->items[] = $song_id;
        array_push($this->items , $song_id);
        $this->saveToSession();
    }

    function showSongsInPlaylist() {
        return $this->items;
    }

    function saveToSession() {
        Session::put('playlist', $this->items);
        Session::save();
    }
}
