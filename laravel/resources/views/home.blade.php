@extends("layouts/mainLayout")

@section('title', "Homepage")

@section('main-content')
    <a class="homeBtn" href="{{ route("cars.index") }}">BROWSE!</a>
    <a class="homeBtn" href="{{ route("cars.create") }}">Crea</a>
    <a class="homeBtn" href="{{ route("optionals.index") }}">Optionals</a>
@endsection