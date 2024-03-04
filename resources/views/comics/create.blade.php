@extends('layouts.app')

@section('title')
  Add new Comic
@endsection

@section('main-content')
    <div class="home bg-dark">
        <div class="container py-5">

            <h1 class="text-white mb-3">Add new Comic</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


        <form action="{{ route('comics.store') }}" method="POST" class="text-white fw-semibold rounded-0">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label @error('title') is-invalid @enderror">Title <span class="text-danger">*</span></label>
                    <input id="title" class="form-control" name="title" placeholder="Title" type="text" value="{{ old('title') }}">
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label @error('series') is-invalid @enderror">Series <span class="text-danger">*</span></label>
                    <input id="series" class="form-control" name="series" placeholder="Series" type="text" value="{{ old('series') }}">
                    @error('series')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label @error('type') is-invalid @enderror">Type <span class="text-danger">*</span></label>
                    <input id="type" class="form-control" name="type" placeholder="Type" type="text" value="{{ old('type') }}">
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label @error('sale_date') is-invalid @enderror">Sale Date <span class="text-danger">*</span></label>
                    <input type="date" id="sale_date" class="form-control" name="sale_date" placeholder="yyyy/mm/dd" type="text" value="{{ old('sale_date') }}">
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label @error('price') is-invalid @enderror">Price <span class="text-danger">*</span></label>
                    <input id="price" class="form-control" name="price" placeholder="Price" type="text" value="{{ old('price') }}">
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label @error('thumb') is-invalid @enderror">Thumb</label>
                    <input id="thumb" class="form-control" name="thumb" placeholder="Thumb" type="text" value="{{ old('thumb') }}">
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
                    <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Description">{{ old('description') }}</textarea>
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label @error('artists') is-invalid @enderror">Artists</label>
                    <input id="artists" class="form-control" name="artists" placeholder="Artists" type="text" value="{{ old('artists') }}">
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label @error('writers') is-invalid @enderror">Writers</label>
                    <input id="writers" class="form-control" name="writers" placeholder="Writers" type="text" value="{{ old('writers') }}">
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ route('comics.index')}}" title="Go back" class="btn btn-primary text-white rounded-0"><i class="fa-solid fa-left-long"></i></a>
                </div>

                <button type="submit" class="btn btn-success mt-2 rounded-0">Add <i class="fa-solid fa-plus"></i></button>
                </div>

            </form>

        </div>
    </div>
@endsection