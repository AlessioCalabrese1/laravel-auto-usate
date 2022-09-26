@extends('layouts/mainLayout');

@section('title', "Cars")

@section('main-content')
    @if (session('created'))
        <div>
            {{ session('created') }}
        </div>
    @elseif(session('updated'))
        <div>
            {{ session('updated') }}
        </div>
    @endif
    <div class="cards-container">
            <div>
                <img src="https://www.fepecar.it/wp-content/themes/motors/assets/images/plchldr350.png" alt="placeholder image">
                <h3>Car Brand: {{ $car->brand }}</h3>
                <h3>Car Model: {{ $car->model }}</h3>
                <h4>Year: {{ $car->year }}</h4>
                <h4>Kms: {{ $car->km }}</h4>
                <ul>
                    @forelse ($car->optionals as $optional)
                        <li>
                            {{ $optional->name }}
                        </li>
                    @empty
                        La macchina non ha nessun optional!
                    @endforelse
                </ul>
            </div>
    </div>
            
@endsection