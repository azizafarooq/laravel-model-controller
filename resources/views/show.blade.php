@extends('layouts.app')

@section('title', 'Film ' . $movie->title)

@section('main-content')
    <div class="container">
        <ul>
            <li> <strong>ID: </strong>{{ $movie->id }}</li>
            <li> <strong>Titolo: </strong>{{ $movie->title }}</li>
            <li> <strong>Titolo Originale: </strong>{{ $movie->original_title }}</li>
            <li> <strong>Lingua: </strong>{{ $movie->nationality }}</li>
            <li> <strong>Data: </strong>{{ $movie->date }}</li>
            <li> <strong>Voto: </strong>{{ $movie->vote }}</li>
        </ul>
    </div>

@endsection
