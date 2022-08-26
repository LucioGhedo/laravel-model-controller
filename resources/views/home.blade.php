@extends('layouts.app')

@section('main')
    <div class="card">
        @foreach ($movies as $movie)
            <h2>Titolo: {{$movie->title}}</h2>
            <h4>Titolo in originale: {{$movie->original_title}}</h4>
            <p>Nazionalità: {{$movie->nationality}}</p>
            <p>Voto: {{$movie->vote}}</p>
            <h6>{{$movie->date}}</h6>
        @endforeach
    </div>
@endsection