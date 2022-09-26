@extends('layouts.mainLayout')

@section('main-content')
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>
        {{ $error }}
    </li>
    @endforeach
</ul>

@endif
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
    <input type="number" name="year" value="{{ old('year', $car->year)}}" id="year">

    <label for="km">Km</label>
    <input type="number" name="km" value="{{ old('km', $car->km)}}" id="km">

    @foreach ($optionals as $optional)
    <div class="form-check form-switch">
        @if ($errors->any())
        <label for="optional">{{ $optional->name }}</label>
        <input type="checkbox" name="optionals[]" value="{{ $optional->id }}" id="optional" class="form-check-input" 
        {{ in_array($optional->id, old('optionals', [])) ? 'checked' : '' }}>
        @else
        <label for="optional">{{ $optional->name }}</label>
        <input type="checkbox" name="optionals[]" value="{{ $optional->id }}" id="optional" class="form-check-input" 
        {{ $car->optionals->contains($optional->id) ? 'checked' : '' }}>
        @endif
    </div>

    @endforeach


    <button type="submit">Create</button>


</form>

@endsection