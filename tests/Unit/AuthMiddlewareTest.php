<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthMiddlewareTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        echo $this->getName() . "\n";
    }

    // Just querying randomly chosen resource
    public function testSendingRequestWithToken()
    {
        $response = $this->get('/api/drivers', ['api_token' => 'mSk0YsMBx7UWu4wrDGAWiNdMnDWxlWZQFnt1wTPXeAA3hosfP293Na55lvFr']);

        $response->assertStatus(200);
    }
    public function testSendingRequestWithoutToken()
    {
        $response = $this->get('/api/drivers');

        $response->assertStatus(401);
    }

    public function testSendingRequestWithIncorrectToken()
    {
        $response = $this->get('/api/drivers', ['api_token' => 'this_is_a_non_existing_token']);

        $response->assertStatus(401);
    }
}
