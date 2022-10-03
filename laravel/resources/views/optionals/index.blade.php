@extends('layouts/mainLayout');

@section("main-content")

    <ul>
        @foreach ($optionals as $optional)
            <li>
                <a href="{{ route("optionals.show", $optional->id) }}">{{ $optional->name }} </a>
                <a href="{{ route("optionals.edit", $optional->id) }}"> Edit</a>
                <form action="{{ route("optionals.destroy", $optional->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit"> Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route("optionals.create") }}">Add</a>

@endsection