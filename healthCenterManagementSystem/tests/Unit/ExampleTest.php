<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Contracts\Console\Kernel;
use App\Models\User;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function createApplication()
    {
        $app = require __DIR__.'/../../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_authenticated_user_can_access_dashboard()
    {
        $user = User::factory()->create()->first();
        $this->actingAs($user);
        $response = $this->get('/admin/dashboard');
        $response->assertStatus(200);
    }

    public function test_guest_is_redirected_to_login()
    {
    $response = $this->get('/admin/dashboard');
    $response->assertRedirect('/login');
    }
}