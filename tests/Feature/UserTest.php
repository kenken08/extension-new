<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function test_register_user()
    {
        $this->withoutExceptionHandling();

        $attributes = [
            'id' => '1',
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'email' =>  $this->faker->email,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'password_confirmation' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];

        $this->post('/register/create', $attributes)->assertStatus(302);
    }
}
