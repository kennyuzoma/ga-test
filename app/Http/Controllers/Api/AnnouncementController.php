<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnnouncementResource;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller {

    /**
     * A collection of Announcement resources
     * @param Request $request
     *
     * @return AnnouncementResource
     */
    public function index(Request $request): AnnouncementResource
    {
        return AnnouncementResource::collection(Announcement::paginate());
    }

    /**
     * An individual Announcement resource
     *
     * @param Request $request
     * @param Announcement $announcement
     *
     * @return AnnouncementResource
     */
    public function show(Request $request, Announcement $announcement): AnnouncementResource
    {
        return new AnnouncementResource($announcement);
    }

}
