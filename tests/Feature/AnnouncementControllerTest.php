<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Announcement;

class AnnouncementControllerTest extends TestCase
{
    use RefreshDatabase;  // this will ensure that your database is rolled back after each test

    public function testStoreMethod()
    {
        $user = User::factory()->create();  // creating a user to associate with announcement

        $response = $this->actingAs($user)  // set the currently logged in user for the application
        ->post('/announcements', [  // adjust this if your route is different
            'subject' => 'Test Subject',
            'body' => 'Test Body',
        ]);

        $response->assertRedirect('/announcements');  // assert that the user was redirected to the 'announcements' route

        $this->assertDatabaseHas('announcements', [  // assert that the announcement was added to the database
            'subject' => 'Test Subject',
            'body' => 'Test Body',
            'user_id' => $user->id,
        ]);
    }
}
