@extends('layouts.master')
@section('title', 'Home')
@section('content')


<div class="container">

    <div class=".col-md-">

        <h1>Genres</h1>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Genre Id</th>
                <th scope="col">Genre naam</th>
                </tr>
            </thead>
            <tbody>
            @foreach($genres as $genre)
                <tr>
                <th scope="row">{{ $genre->id }}</th>
                <td><a href="genre/{{ $genre->id }}">{{ $genre->genre_name }}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection