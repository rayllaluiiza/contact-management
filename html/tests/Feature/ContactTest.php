<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;
    
    public function test_store_contact(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/contacts', [
            'name' => 'Sally',
            'email' => 'sally@gmail.com',
            'contact' => '123456789'
        ]);

        $response->assertRedirect();
    }

    public function test_store_required_name(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/contacts', [
            'name' => '',
            'email' => 'sally@gmail.com',
            'contact' => '123456789'
        ]);

        $response->assertSessionHasErrors('name');
    }

    public function test_store_valid_email(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/contacts', [
            'name' => 'Sally',
            'email' => 'sally',
            'contact' => '123456789'
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_store_required_9_digits(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/contacts', [
            'name' => 'Sally',
            'email' => 'sally',
            'contact' => '123'
        ]);

        $response->assertSessionHasErrors('contact');
    }
}
