@extends("layouts/mainLayout")

@section('main-content')
    <form action="{{ route("optionals.store") }}" method="POST">
        @csrf
        @method("POST")
        
        <label for="optional-name-input">Name</label>
        <input type="text" name="name" id="optional-name-input">
        
        <label for="optional-description-input">Description</label>
        <textarea name="description" id="optional-description-input" cols="30" rows="10">
        
        </textarea>
        <button type="submit">Create</button>
        
    </form>
@endsection