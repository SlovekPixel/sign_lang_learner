<?php

namespace Tests\Unit;

use App\User;
use App\pantomime;
use App\result;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_fillable_includes_admin()
    {
        $user = new User();

        $this->assertContains('admin', $user->getFillable());
        $this->assertContains('email', $user->getFillable());
        $this->assertContains('password', $user->getFillable());
    }

    public function test_password_is_hidden()
    {
        $user = factory(User::class)->create([
            'password' => bcrypt('secret123'),
        ]);

        $array = $user->toArray();

        $this->assertArrayNotHasKey('password', $array);
        $this->assertArrayNotHasKey('remember_token', $array);
    }

    public function test_new_user_is_not_admin_by_default()
    {
        $user = factory(User::class)->create();

        $this->assertSame(0, (int) $user->admin);
        $this->assertFalse((bool) $user->admin);
    }

    public function test_admin_flag_can_be_set()
    {
        $user = factory(User::class)->create(['admin' => 1]);

        $this->assertSame(1, (int) $user->admin);
    }
}
