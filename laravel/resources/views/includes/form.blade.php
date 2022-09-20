@extends('layouts.mainLayout')

@section('main-content')
    
    <form action="{{ route($route) }}" method="POST">
        @csrf
        @method($method)

        <label for="plate">Plate</label>
        <input type="text" name="plate" id="plate">

        
        <label for="brand">Brand</label>
        <input type="text" name="brand" id="brand">

        
        <label for="model">Model</label>
        <input type="text" name="model" id="model">

        
        <label for="year">Year</label>
        <input type="number" name="year" id="year">

        <label for="km">Km</label>
        <input type="number" name="km" id="km">

        <button type="submit">Create</button>

    </form>

@endsection