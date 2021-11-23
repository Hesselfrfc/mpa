@extends('layouts.master')
@section('title', 'Home')
@section('content')

<h1>Nummers</h1>

@foreach($songs as $song)
<ul>
    <li>{{$songs['genreName']}}</li>
    <li>{{$songs['genreId']}}</li>
    <li>{{$songs['songName']}}</li>
</ul>
@endforeach


@endsection