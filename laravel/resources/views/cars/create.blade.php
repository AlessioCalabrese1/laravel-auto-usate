@extends('layouts.mainLayout')

@section('main-content')
    @include('includes.form', ["route" => "cars.store", "method" => "POST"])
@endsection