<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterLoginTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        echo $this->getName() . "\n";
    }

    public function testRegisterUser()
    {
        $response = $this->post('/api/register', ['name' => 'Stephen Steer',
            'email' => 'stpr@gmail.nl',
            'password' => '123456',
            'password_confirmation' => '123456']);

        $response->assertStatus(201)
            ->assertJson(['name' => 'Stephen Steer',
                'email' => 'stpr@gmail.nl']);

    }

    public function testRegisterUserWithIncompleteData()
    {
        // We send an empty array of data

        $response = $this->post('/api/register', []);

        $response->assertStatus(422)
            ->assertExactJson((array)json_decode('{"name":["The name field is required."],
            "email":["The email field is required."],
            "password":["The password field is required."],
            "password_confirmation":["The password confirmation field is required."]}'));
    }

    public function testLoginUser()
    {
        $response = $this->post('/api/login',
            ['email' => 'stpr@gmail.nl',
                'password' => '123456',
            ]);

        $response->assertStatus(200)
            ->assertJson(['name' => 'Stephen Steer',
                'email' => 'stpr@gmail.nl']);
    }

    public function testLoginWithIncorrectEmail()
    {
        $response = $this->post('/api/login',
            ['email' => 'non_existing_email@gmail.nl',
                'password' => '123456',
            ]);

        $response->assertStatus(422);
    }

    public function testLoginWithIncompleteData()
    {
        // We send an empty array of data

        $response = $this->post('/api/login', []);

        $response->assertStatus(422)
            ->assertExactJson((array)json_decode('{"email":["The email field is required."],
            "password":["The password field is required."]}'));
    }

    public function testLoginWithIncorrectPassword()
    {
        $response = $this->post('/api/login',
            ['email' => 'stpr@gmail.nl',
                'password' => 'not_a_correct_password',
            ]);

        $response->assertStatus(422)
            ->assertJson(['message' => 'Incorrect password']);
    }
}
