@extends('layouts.master')
@section('title', 'Home')
@section('content')


<div class="container">

    <div class=".col-md-">

        <h1>Nummer detailpagina</h1>

        <ul>
        <li>{{ $id }}</li>
        <li>{{ $song_name }}</li>
        <li>{{ $genre_name }}</li>
        <li>{{ $genre_id }}</li>
        <li><a href="/playlist/add/{{ $id }}">Voeg toe aan playlist</a></li>
        </ul>
        
        <a href="/genre/{{ $genre_id }}">Terug naar vorige pagina</a>
 
    </div>
</div>

@endsection