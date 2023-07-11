@extends('layouts.app')

@section('content')
    <div style="border-bottom:1px solid gray;" class="mb-5 pb-5">
        <h1>{{ $announcement->subject }} </h1>
        <a href="{{ route('announcements.edit', $announcement) }}">(Edit)</a> | <a href="{{ route('announcements.delete', $announcement) }}">(Delete)</a>
        <br />
        <p>Created: {{ $announcement->created_at->format('F j, Y') }}</p>
        <p>By: {{ $announcement->user->name }}</p>
    </div>
    <div>{!! $announcement->mdBody !!}</div>
@endsection
