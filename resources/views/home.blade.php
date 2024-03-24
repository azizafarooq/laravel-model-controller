@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Lista Film</h1>
            @forelse ($movies as $movie)
                <ul>
                    <li> <strong>ID: </strong>{{ $movie['id'] }}</li>
                    <li> <strong>Titolo: </strong>{{ $movie['title'] }}</li>
                    <li> <strong>Titolo Originale: </strong>{{ $movie['original_title'] }}</li>
                    <li> <strong>Lingua: </strong>{{ $movie['nationality'] }}</li>
                    <li> <strong>Data: </strong>{{ $movie['date'] }}</li>
                    <li> <strong>Voto: </strong>{{ $movie['vote'] }}</li>
                    <li><a href="{{ route('movie.show', $movie) }}">See more</a></li>
                </ul>
                @unless ($loop->last)
                    <hr>
                @endunless
            @empty
                <div class="alert alert-warning">Nessun film trovato</div>
            @endforelse

        </div>
    </section>
@endsection
