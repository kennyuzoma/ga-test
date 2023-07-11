@extends('layouts.app')

@section('content')
    <h1>Create A New Annoucement</h1>
    <form method="POST" action="{{ route('announcements.store') }}" class="form-container">
        @csrf
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" class="form-input" >
        <label for="body">Body:</label>
        <textarea id="body" name="body" class="form-input" ></textarea>
        <input type="submit" value="Create" class="form-submit" >
    </form>
@endsection
