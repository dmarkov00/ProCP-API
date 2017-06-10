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
        
            $client = new Client();
            $client->company_id=2;
            $client->name="Bobby Bo";
            $client->phone="6655665";
            $client->email="bobby@mail.com";
            $client->address="Street 1, Netherlands";
            $client->save();
			
			$client = new Client();
            $client->company_id=2;
            $client->name="Timmy Tam";
            $client->phone="77556665";
            $client->email="timmy@mail.com";
            $client->address="Street 2, Germany";
            $client->save();
			
			$client = new Client();
            $client->company_id=2;
            $client->name="Tommy Toma";
            $client->phone="66446663";
            $client->email="tommy@mail.com";
            $client->address="Street 4, Belgium";
            $client->save();
			
			$client = new Client();
            $client->company_id=2;
            $client->name="Tony Top";
            $client->phone="337774476";
            $client->email="tony@mail.com";
            $client->address="Street 3, Austria";
            $client->save();
			
			$client = new Client();
            $client->company_id=2;
            $client->name="Billy Bii";
            $client->phone="55888447";
            $client->email="billy@mail.com";
            $client->address="Street 5, Lithuania";
            $client->save();
			
			$client = new Client();
            $client->company_id=1;
            $client->name="Sergei Se";
            $client->phone="574746";
            $client->email="sergei@mail.com";
            $client->address="Street 6, Poland";
            $client->save();
        
    }
}
