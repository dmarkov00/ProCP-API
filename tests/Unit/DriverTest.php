<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DriverTest extends TestCase
{
    // Used the display the name of the test that was run
    public function setUp() {
        parent::setUp();
        echo $this->getName() . "\n";
    }
    public function testGetAllDrivers()
    {
        $response = $this->get('api/drivers');

        $response->assertStatus(200);
    }

}
