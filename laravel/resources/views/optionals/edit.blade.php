@extends("layouts/mainLayout")

@section('main-content')
    <form action="{{ route("optionals.update", $optional->id) }}" method="POST">
        @csrf
        @method("PUT")
        
        <label for="optional-name-input">Name</label>
        <input type="text" name="name" id="optional-name-input" value="{{ old("name", $optional->name) }}">
        
        <label for="optional-description-input">Description</label>
        <textarea name="description" id="optional-description-input" cols="30" rows="10">
            {{ old("description", $optional->description) }}
        </textarea>
        <button type="submit">Update</button>
        
    </form>
@endsection