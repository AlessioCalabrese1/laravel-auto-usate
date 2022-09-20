@extends('layouts.mainLayout')

@section('main-content')
    @include('includes.form', ["route" => "cars.update", "method" => "PUT"])
@endsection