@extends('layouts.app')

@section('content')
    @if ($announcements->count())
        @foreach($announcements as $announcement)
            <div class="mb-10 ">
                <h2><a href="{{ route('announcements.show', $announcement) }}">{{ $announcement->subject }}</a></h2>
                <p>{!! $announcement->mdBody !!}</p>
                <p>Created: {{ $announcement->created_at->format('F j, Y') }}</p>
                <p>By: {{ $announcement->user->name }}</p>
                <br />
                <p><a href="{{ route('announcements.show', $announcement) }}">Read More</a></p>
            </div>
        @endforeach

        {{ $announcements->links() }}
    @else
        <p>No announcements</p>
    @endif

@endsection
