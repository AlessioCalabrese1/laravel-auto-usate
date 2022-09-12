@extends('layouts/mainLayout');

@section('title', "Cars")

@section('main-content')
    
    @forelse ($cars as $car)
        
        <div class="card">
            <h3>Car brand: {{ $car->brand }}</h3>
            <h3>Car model: {{ $car->model }}</h3>
            <h4>Year: {{ $car->year }}</h4>
            <h4>Kms: {{ $car->km }}</h4>
        </div>

    @empty
        <h2>There are no cars</h2>
    @endforelse

@endsection