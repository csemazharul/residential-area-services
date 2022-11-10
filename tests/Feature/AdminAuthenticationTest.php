<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('admin/login');

        $response->assertStatus(200);
    }

    public function test_admins_can_authenticate_using_the_login_screen()
    {
        $admin = Admin::factory()->create();

        $response = $this->post('admin/login', [
            'email' => $admin->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated('admin');
        $response->assertRedirect(route('admin.dashboard'));
    }

    public function test_admins_can_not_authenticate_with_invalid_password()
    {
        $admin = Admin::factory()->create();

        $this->post('admin/login', [
            'email' => $admin->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest('admin');
    }
}
