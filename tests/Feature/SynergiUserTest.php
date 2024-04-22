<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Synergi\User;

class SynergiUserTest extends TestCase
{
    use RefreshDatabase; // Use database migrations for testing

    /**
     * Test storing a new user.
     * @return void
     */
    public function test_store_new_user()
    {
        // Create fake user data
        $userData = [
            'username' => 'testuser',
            'email' => 'test@example.com',
            'comments' => 'Test comments',
        ];
        $response = $this->post(route('users.store'), $userData);
        $response->assertRedirect(route('users.thankyou'));
        $this->assertDatabaseHas('synergi_users', $userData);
    }

    /**
     * Test storing a user with missing required fields.
     * @return void
     */
    public function test_store_missing_fields()
    {
        $response = $this->post(route('users.store'), []);
        $response->assertSessionHasErrors(['username', 'email']);
    }

    /**
     * Test storing a user with a duplicate email.
     * @return void
     */
    public function test_store_duplicate_email()
    {
        $existingUser = User::factory()->create(['email' => 'test@testemail.com']);
        $response = $this->post(route('users.store'), [
            'username' => 'testuser',
            'email' => 'test@testemail.com',
            'comments' => 'Test comments'
        ]);
        $response->assertSessionHasErrors('email');
    }
}
