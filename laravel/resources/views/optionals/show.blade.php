

@extends("layouts/mainLayout")

@section('main-content')
    <h1>
        {{ $optional->name }}
    </h1>
    <p>
        {{ $optional->description }}
    </p>
@endsection