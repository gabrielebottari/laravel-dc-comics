{{-- resources/views/comics/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Elenco Fumetti</h1>
    <div class="row">
        @foreach(config('comics') as $comic)
        <div>
            <h2>{{ $comic['title'] }}</h2>
            <p>{{ $comic['description'] }}</p>
            <p>{{ $comic['thumb'] }}</p>
            <p>{{ $comic['price'] }}</p>
            <p>{{ $comic['series'] }}</p>
        </div>
    @endforeach
    </div>
</div>
@endsection
