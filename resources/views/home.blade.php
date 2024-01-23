@extends('layouts.app')
@vite('resources/css/app.css')

@section('content')
<h1>Elenco dei Film</h1>

@foreach($movies as $movie)
<div>
    <h2>{{ $movie->title }}</h2>
    <p>Titolo Originale: {{ $movie->original_title }}</p>
    <p>Nazionalità: {{ $movie->nationality }}</p>
    <p>Data: {{ $movie->date }}</p>
    <p>Voto: {{ $movie->vote }}</p>
</div>
<hr>
@endforeach

@endsection