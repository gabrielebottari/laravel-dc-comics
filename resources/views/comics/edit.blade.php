@extends('layouts.app')

@section('title')
  Update Comic
@endsection

@section('main-content')
  <div class="home bg-dark">
    <div class="container py-5">

      <h1 class="text-white mb-3">Update Comic</h1>


      <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="text-white fw-semibold">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input id="title" class="form-control" name="title" placeholder="Title" type="text" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series <span class="text-danger">*</span></label>
                <input id="series" class="form-control" name="series" placeholder="Series" type="text" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                <input id="type" class="form-control" name="type" placeholder="Type" type="text" value="{{ $comic->type }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date <span class="text-danger">*</span></label>
                <input type="date" id="sale_date" class="form-control" name="sale_date" placeholder="Sale Date" type="text" value="{{ $comic->sale_date }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                <input id="price" class="form-control" name="price" placeholder="Price" type="text" value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input id="thumb" class="form-control" name="thumb" placeholder="Thumb" type="text" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Description" value="{{ $comic->description }}"></textarea>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input id="artists" class="form-control" name="artists" placeholder="Artists" type="text" value="{{ $comic->artists }}">
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input id="writers" class="form-control" name="writers" placeholder="Writers" type="text" value="{{ $comic->writers }}">
            </div>

            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ route('comics.index')}}" title="Go back" class="btn btn-primary text-white"><i class="fa-solid fa-left-long"></i></a>
                </div>

                <button type="submit" class="btn btn-success mt-2">Update Comic</button>
            </div>

        </form>

    </div>
  </div>
@endsection