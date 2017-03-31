<?php

use App\Load;

class LoadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=10; $i++){
            $load = new Load();
            $load->startLocation_id=1;
            $load->endLocation_id=1;
            $load->content="dummycontent";
            $load->deadline=\Carbon\Carbon::now();
            $load->delivered=false;
            $load->salary=2250.75;
            $load->client_id=1;
            $load->truck_id=1;
            $load->save();
        }
    }
}
