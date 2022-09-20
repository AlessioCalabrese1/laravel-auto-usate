@extends('layouts.mainLayout')

@section('main-content')
    
    <form action="{{ route($route, $car->id)  }}" method="POST">
        @csrf
        @method($method)

        <label for="plate">Plate</label>
        <input type="text" name="plate" value="{{ old('plate', $car->plate)}}" id="plate">

        
        <label for="brand">Brand</label>
        <input type="text" name="brand" value="{{ old('brand', $car->brand)}}" id="brand">

        
        <label for="model">Model</label>
        <input type="text" name="model" value="{{ old('model', $car->model)}}" id="model">

        
        <label for="year">Year</label>
        <input type="number" name="year"value="{{ old('year', $car->year)}}" id="year">

        <label for="km">Km</label>
        <input type="number" name="km" value="{{ old('km', $car->km)}}" id="km">

        <button type="submit">Create</button>

    </form>

@endsection