@extends('layouts/mainLayout');

@section('title', "Cars")

@section('main-content')
    @if (session('deleted'))
        <div>
            {{ session('deleted') }}
        </div>
    @endif
    <div class="cards-container">
        @forelse ($cars as $car)
            <div class="card">
                <img src="https://www.fepecar.it/wp-content/themes/motors/assets/images/plchldr350.png" alt="placeholder image">
                <h3>Car Brand: {{ $car->brand }}</h3>
                <h3>Car Model: {{ $car->model }}</h3>
                <h4>Year: {{ $car->year }}</h4>
                <h4>Kms: {{ $car->km }}</h4>
                <a href="{{ route('cars.show', $car->id) }}">View</a>
                <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Cancel</button>
                </form>
            </div>
            
        @empty
            <h2>There are no cars</h2>
        @endforelse
    </div>

    {{ $cars->links() }}
            
@endsection