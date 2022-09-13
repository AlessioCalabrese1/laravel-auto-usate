@extends("layouts/mainLayout")

@section('title', "Homepage")

@section('main-content')
    <a href="{{ route("cars") }}">BROWSE!</a>
@endsection