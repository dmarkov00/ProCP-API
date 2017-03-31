<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=10; $i++){
            $location = new Location();
            $location->house_Nbr="myHouseNumber".$i;
            $location->street="myStreet".$i;
            $location->city="Brussels";
            $location->contry="Belgium";
            $location->ZIP="dummyZIPs";
            $location->save();
        }
    }
}
