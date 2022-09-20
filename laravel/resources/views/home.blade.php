@extends("layouts/mainLayout")

@section('title', "Homepage")

@section('main-content')
    <a href="{{ route("cars.index") }}">BROWSE!</a>
@endsection