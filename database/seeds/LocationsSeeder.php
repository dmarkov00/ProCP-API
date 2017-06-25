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
        $location = new Location();
        $location->house_Nbr="myHouseNumber1";
        $location->street="myStree1t";
        $location->city="Berlin";
        $location->contry="Germany";
        $location->ZIP="0001";
        $location->save();
        /*
        for($i=0; $i<=10; $i++){
            $location = new Location();
            $location->house_Nbr="myHouseNumber".$i;
            $location->street="myStreet".$i;
            $location->city="Brussels";
            $location->contry="Belgium";
            $location->ZIP="dummyZIPs";
            $location->save();
        }*/
    }
}
