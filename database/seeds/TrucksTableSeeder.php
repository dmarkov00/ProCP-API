<?php

use Illuminate\Database\Seeder;
use App\Truck;

class TrucksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=10; $i++){
            $user = new Truck();
            $user->licensePlate="HZ-12-KFN".$i;
            $user->company_id=1;
            $user->location_id=1;
            $user->avgFuelComsumption=1;
            $user->payLoadCapacity=1;
            $user->weight=43;
            $user->height=65;
            $user->width=11;
            $user->length=10.5;
            $user->save();
        }
    }
}
