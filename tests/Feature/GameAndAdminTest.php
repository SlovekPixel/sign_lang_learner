<?php

namespace Tests\Feature;

use App\User;
use App\pantomime;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GameAndAdminTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
    }

    public function test_user_can_save_game_result()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->post('/result/save', ['result' => '75'])
            ->assertOk()
            ->assertJson(['status' => 'okay']);

        $this->assertDatabaseHas('results', [
            'user_id' => $user->id,
            'result' => '75',
        ]);
    }

    public function test_face_endpoint_returns_pantomime_for_auth_user()
    {
        $user = factory(User::class)->create();

        $pantomime = new pantomime();
        $pantomime->url = 'img/demo.gif';
        $pantomime->meaning = 'Кот';
        $pantomime->save();

        $this->actingAs($user)
            ->getJson('/face')
            ->assertOk()
            ->assertJsonFragment(['meaning' => 'Кот']);
    }

    public function test_non_admin_cannot_open_admin_panel()
    {
        $user = factory(User::class)->create(['admin' => 0]);

        $this->actingAs($user)
            ->get('/admin')
            ->assertStatus(403);
    }

    public function test_admin_can_open_admin_panel()
    {
        $admin = factory(User::class)->create(['admin' => 1]);

        $this->actingAs($admin)
            ->get('/admin')
            ->assertStatus(200);
    }
}
