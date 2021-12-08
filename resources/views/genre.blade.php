@extends('layouts.master')
@section('title', 'Home')
@section('content')


<div class="container">

    <div class=".col-md-">

        <h1>Nummers</h1>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Song Id</th>
                <th scope="col">Song naam</th>
                <th scope="col">Genre naam</th>
                <th scope="col">Genre id</th>
                <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach($songs as $song)
                    <tr>
                    <th scope="row">{{ $song->id }}</th>
                    <td>{{ $song->song_name }}</td>
                    <td>{{ $song->genre_name }}</td>
                    <td>{{ $song->genre_id }}</td>
                    <td><a href="/song/{{ $song->id }}">Bekijk detailpagina</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/index">Terug naar vorige pagina</a>

    </div>
</div>

@endsection