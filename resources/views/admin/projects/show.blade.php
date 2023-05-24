@extends('layouts.app')


@section('content')

    <div class="container py-5">
        <h2>Titolo: {{$project->title}}</h2>
        <h2>Titolo 2: {{$project->slug}}</h2>
        <p>Descrizione: {{$project->content}}</p>
    </div>
@endsection