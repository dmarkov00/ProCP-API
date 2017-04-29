<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DriverTest extends TestCase
{
    public function DriverTest()
    {
        $this->TEST_TOKEN = config('app.timezone');
    }

    // Used the display the name of the test that was run

    public function setUp()
    {
        parent::setUp();
        echo $this->getName() . "\n";

        // this thing needs to be setup to retreve the token from the file
//        $this->TEST_TOKEN = config('constants.TEST_TOKEN');
//
//        echo 'kik ' . $this->TEST_TOKEN ;
//        echo $this->TEST_TOKEN;
    }

    private $TEST_TOKEN;

    public function testGetAllDrivers()
    {
        // The second parameter stands for the headers that are sent
        $response = $this->get('/api/drivers', ['api_token' => 'mSk0YsMBx7UWu4wrDGAWiNdMnDWxlWZQFnt1wTPXeAA3hosfP293Na55lvFr']);

        $response->assertStatus(200);
    }

    public function testCreateDriverWithCorrectData()
    {
        $response = $this->post('/api/drivers', ['fName' => 'Ivan', 'lName' => 'Shafiora', 'phoneNbr' => '023244', 'email' => 'vankataa@abv.bg'],
            ['api_token' => 'mSk0YsMBx7UWu4wrDGAWiNdMnDWxlWZQFnt1wTPXeAA3hosfP293Na55lvFr']);

        $response->assertStatus(201)
            ->assertJson(['fName' => 'Ivan',
                'lName' => 'Shafiora',
                'phoneNbr' => '023244',
                'email' => 'vankataa@abv.bg']);
    }

    public function testCreateDriverWithIncorrectData()
    {
        // Here we are passing an empty array
        $response = $this->post('/api/drivers', [],
            ['api_token' => 'mSk0YsMBx7UWu4wrDGAWiNdMnDWxlWZQFnt1wTPXeAA3hosfP293Na55lvFr']);

        // the assertExactJson expects array so we have to convert expected json
        $response->assertStatus(422)
            ->assertExactJson((array)json_decode('{"email":["The email field is required."],
            "fName":["The f name field is required."],
            "lName":["The l name field is required."],
            "phoneNbr":["The phone nbr field is required."]}'));

    }
}

