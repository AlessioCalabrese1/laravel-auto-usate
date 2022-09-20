@extends('layouts/mainLayout');

@section('title', "Cars")

@section('main-content')

    <div class="cards-container">
        @forelse ($cars as $car)
            <div class="card">
                <img src="https://www.fepecar.it/wp-content/themes/motors/assets/images/plchldr350.png" alt="placeholder image">
                <h3>Car Brand: {{ $car->brand }}</h3>
                <h3>Car Model: {{ $car->model }}</h3>
                <h4>Year: {{ $car->year }}</h4>
                <h4>Kms: {{ $car->km }}</h4>
            </div>
            
        @empty
            <h2>There are no cars</h2>
        @endforelse
    </div>
            
@endsection