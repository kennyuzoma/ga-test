<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::paginate(10);

        return view('announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('announcements.create');
    }

    public function store(Request $request)
    {
        $announcement = new Announcement();
        $announcement->subject = $request->subject;
        $announcement->body = $request->body;
        $announcement->user_id = 1; // hard coded for the sake of example
        $announcement->save();

        return redirect('announcements');
    }

    public function show(Announcement $announcement): View
    {
        return view('announcements.show', compact('announcement'));
    }

    public function edit(Announcement $announcement): View
    {
        return view('announcements.edit', compact('announcement'));
    }

    public function update(Request $request, Announcement $announcement): RedirectResponse
    {
        $announcement->subject = $request->subject;
        $announcement->body = $request->body;
        $announcement->save();

        return redirect('announcements');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect('announcements');
    }
}
