@extends("layouts.app")

@section("title")
    Comics | {{ $comic["series"] }}
@endsection

@section("main-content")
    <div class="comic-details">

        <div class="blue-bar"></div>

            <div class="top">
                <div class="info-box container">

                <div class="comic-img">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </div>

                <div class="row">

                    <div class="col-8">
                        <h2>{{ $comic["title"] }}</h2>

                        <div class="price-bar d-flex">
                            <div class="col-8 left d-flex justify-content-between">
                                <p class="mb-0">U.S Price: <span class="price text-white">{{ $comic["price"] }}</span></p>
                                <span>AVAILABLE</span>
                            </div>
                            <div class="col-4 right text-white">
                                <p class="text-center mb-0">Check Availability &#9660;</p>
                            </div>
                        </div>

                        <p class="description">{{ $comic["description"] }}</p>
                    </div>

                    <div class="col-4 px-4">
                        <h6 class="text-end">ADVERTISEMENT</h6>
                        <a href="#">
                            <img class="w-100" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Advertisement">
                        </a>
                    </div>

                </div>

            </div>
        </div>

        <div class="info-box container">
            <div class="row">
                <div class="col-8">
                    <div class="container py-5 m-auto d-flex justify-content-between">
                        <button class="btn btn-primary rounded-0">
                            <a href="{{ route('comics.edit', $comic->id) }}" class="text-white text-decoration-none fw-semibold">Edit <i class="fa-solid fa-pen"></i></a>
                        </button>
            
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger rounded-0 fw-semibold">Delete Comic <i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="details-bottom bg-light">
            <div class="info-box container">
                <div class="row">

                    <div class="col">
                    <h4>Talent</h4>

                    <table class="table">
                        <tbody>
                            <tr class="table-light">
                                <td class="w-25">Art by:</td>
                                <td class="names">{{ is_array($comic["artists"]) ? implode(", ", $comic["artists"]) : $comic["artists"] }}</td>
                            </tr>
                            <tr class="table-light">
                                <td>Written by:</td>
                                <td class="names">{{ is_array($comic["writers"]) ? implode(", ", $comic["writers"]) : $comic["writers"] }}</td>
                            </tr>
                        </tbody>
                    </table>

                    </div>

                    <div class="col">
                    <h4>Specs</h4>

                    <table class="table">
                        <tbody>
                        <tr class="table-light">
                            <td class="w-25">Series:</td>
                            <td class="series">{{ $comic["series"] }}</td>
                        </tr>
                        <tr class="table-light">
                            <td>U.S. Price:</td>
                            <td>{{ $comic["price"] }}</td>
                        </tr>
                        <tr class="table-light">
                            <td>On Sale Date</td>
                            <td>{{ $comic["sale_date"] }}</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection