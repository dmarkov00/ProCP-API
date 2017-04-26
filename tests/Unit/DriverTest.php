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

    public function testGetAllDrivers()
    {
        // The second parameter stands for the headers that are sent
        $response = $this->get('/api/drivers', ['api_token'=>'mSk0YsMBx7UWu4wrDGAWiNdMnDWxlWZQFnt1wTPXeAA3hosfP293Na55lvFr']);
        
        $response->assertStatus(200);
    }
}
