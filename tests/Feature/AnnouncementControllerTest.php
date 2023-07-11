<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Announcement;

class AnnouncementControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreMethod()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
        ->post('/announcements', [
            'subject' => 'Test Subject',
            'body' => 'Test Body',
        ]);

        $response->assertRedirect('/announcements');

        $this->assertDatabaseHas('announcements', [
            'subject' => 'Test Subject',
            'body' => 'Test Body',
            'user_id' => $user->id,
        ]);
    }
}
