<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=10; $i++){
            $client = new Client();
            $client->company_id=1;
            $client->name="dummyname";
            $client->phone="dummyphone".$i;
            $client->email="mail@mail.com";
            $client->address="dummyaddress";
            $client->save();
        }
    }
}
