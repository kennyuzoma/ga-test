@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('announcements.update', $announcement) }}" class="form-container ">
        @csrf
        @method('PUT')
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" class="form-input" value="{{ $announcement->subject }}">
        <br />
        <label for="body">Body:</label>
        <textarea id="body" name="body" class="form-input">{{ $announcement->body }}</textarea>
        <input type="submit" class="form-submit" value="Update">
    </form>
@endsection
