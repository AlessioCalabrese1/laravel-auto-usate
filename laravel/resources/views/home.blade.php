@extends("layouts/mainLayout")

@section('title', "Homepage")

@section('main-content')
    <a class="homeBtn" href="{{ route("cars.index") }}">BROWSE!</a>
@endsection