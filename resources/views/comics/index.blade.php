@extends('layouts.app')

@section('main-content')
<div class="container">
    <h1>Elenco Fumetti</h1>
    <div class="row">
        @foreach(config('comics') as $comic)
        <div>
            <h2 class="text-warning">{{ $comic['title'] }}</h2>
            <p>{{ $comic['description'] }}</p>
            <p>{{ $comic['thumb'] }}</p>
            <p>{{ $comic['price'] }}</p>
            <p>{{ $comic['series'] }}</p>
        </div>
    @endforeach
    </div>
</div>
@endsection
