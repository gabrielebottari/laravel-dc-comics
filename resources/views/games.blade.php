@extends("layouts.app")

@section("title")
    Games
@endsection

@section("main-content")
<div class="bg-warning-subtle">
    <div class="container text-center p-5">
        <h1 class="fw-bold fs-1 pb-3">Games</h1>
        <p class="text-danger fs-1 fw-bold border border-danger border-5 rounded-5 text-uppercase">This page is under construction, please be patient <i class="fa-solid fa-hand"></i></p>
        <img src="{{ Vite::asset('resources/img/wip.webp') }}" alt="wip" class="w-50">
    </div>
</div>
@endsection