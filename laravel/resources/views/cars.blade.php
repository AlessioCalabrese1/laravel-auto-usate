@extends('layouts/mainLayout');

@section('title', "Cars")

@section('main-content')
    
    @forelse ($collection as $item)
        
        <div class="card">
            <h3>Car brand: {{ $item->brand }}</h3>
            <h3>Car model: {{ $item->model }}</h3>
            <h4>Year: {{ $item->year }}</h4>
            <h4>Kms: {{ $item->km }}</h4>
        </div>

    @empty
        <h2>There are no cars</h2>
    @endforelse

@endsection