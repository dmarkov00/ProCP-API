<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DriverTest extends TestCase
{

    // Used the display the name of the test that was run
    public function setUp()
    {
        parent::setUp();

        echo $this->getName() . "\n";
    }

    private $TEST_TOKEN;

    public function testGetAllDrivers()
    {
        // The second parameter stands for the headers that are sent
        $response = $this->get('/api/drivers', ['api_token' => config('constants.TEST_TOKEN')]);

        $response->assertStatus(200);
    }

    public function testCreateDriverWithCorrectData()
    {
        $response = $this->post('/api/drivers', ['fName' => 'Ivan', 'lName' => 'Truck', 'phoneNbr' => '023244', 'email' => 'truck@abv.bg'],
            ['api_token' => config('constants.TEST_TOKEN')]);

        $response->assertStatus(201)
            ->assertJson(['fName' => 'Ivan',
                'lName' => 'Truck',
                'phoneNbr' => '023244',
                'email' => 'truck@abv.bg']);
    }

    public function testCreateDriverWithIncorrectData()
    {
        // Here we are passing an empty array
        $response = $this->post('/api/drivers', [],
            ['api_token' => config('constants.TEST_TOKEN')]);

        // the assertExactJson expects array so we have to convert expected json
        $response->assertStatus(422)
            ->assertExactJson((array)json_decode('{"email":["The email field is required."],
            "fName":["The f name field is required."],
            "lName":["The l name field is required."],
            "phoneNbr":["The phone nbr field is required."]}'));

    }

    public function testUpdateDriverData()
    {
        $response = $this->put('/api/drivers/10', ['fName' => 'George',
            'lName' => 'Diesel',
            'phoneNbr' => '9999999',
            'email' => 'gd@abv.bg'],
            ['api_token' => config('constants.TEST_TOKEN')]);

        $response->assertStatus(200)
            ->assertJson(['fName' => 'George',
                'lName' => 'Diesel',
                'phoneNbr' => '9999999',
                'email' => 'gd@abv.bg']);
    }
}

