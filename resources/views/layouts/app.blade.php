<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body class="bg-gray-200">
<nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">
        <li>
            <a href="{{ route('announcements.index') }}" class="p-3">Home</a>
        </li>
        <li>
            <a href="{{ route('announcements.index') }}" class="p-3">Announcements</a>
        </li>
        <li>
            <a href="{{ route('announcements.create') }}" class="p-3">Create New</a>
        </li>
    </ul>

    <ul class="flex items-center">
        <!-- add navigation items here -->
    </ul>
</nav>
<div class="w-1/2 p-4 mx-auto">
    @yield('content')
</div>
</body>
</html>
