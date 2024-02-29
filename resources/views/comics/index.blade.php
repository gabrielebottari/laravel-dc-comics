@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')

    <div class="bg-container">
        <div class="container main-container">
            <h1>Current Series</h1>
            <div class="row gy-3">
                @foreach(config('comics') as $comic)
                <div class="col-2">
                    <div class="card">
                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                            <img src="{{$comic['thumb']}}" class="card-img-top rounded-0" alt="comics">
                            <div class="card-body mb-3">
                                <h5 class="text-white">{{$comic['title']}}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="button-container pt-3">
                <button>Load More</button>
            </div>
        </div>
    </div>

@endsection
