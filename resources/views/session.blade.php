@extends('layouts.master')
@section('title', 'Home')
@section('content')


<div class="container">

    <div class=".col-md-">

        <h1>Nummers in session</h1>

<ul>
@foreach($songs as $song)

<li>Id van song: {{ $song->id }}, Naam van song: {{ $song->song_name }}</li>

@endforeach
</ul>

        <a href="/index">Terug naar homepagina</a>

    </div>
</div>

@endsection