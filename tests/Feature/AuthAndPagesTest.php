<?php

namespace Tests\Feature;

use App\User;
use App\pantomime;
use App\result;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthAndPagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
    }

    public function test_home_page_is_available_for_guests()
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSee('Жесты');
    }

    public function test_login_page_is_available()
    {
        $this->get('/login')
            ->assertStatus(200)
            ->assertSee('Вход');
    }

    public function test_guest_is_redirected_from_learning()
    {
        $this->get('/static')->assertRedirect('/login');
        $this->get('/anim')->assertRedirect('/login');
    }

    public function test_user_can_register_as_non_admin()
    {
        $response = $this->post('/register', [
            'name' => 'Demo User',
            'email' => 'demo@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/');
        $this->assertDatabaseHas('users', [
            'email' => 'demo@example.com',
            'admin' => 0,
        ]);
    }

    public function test_authenticated_user_can_open_learning()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get('/static')
            ->assertStatus(200);
    }

    public function test_authenticated_user_can_open_game()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get('/anim')
            ->assertStatus(200);
    }
}
