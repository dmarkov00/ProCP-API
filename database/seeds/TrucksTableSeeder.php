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
            $user = new Truck();
            $user->licensePlate="HZ-12-KFN1";
            $user->company_id=2;
            $user->location_id=1;
            $user->avgFuelComsumption=24;
            $user->payLoadCapacity=11500;
            $user->weight=1000;
            $user->height=3;
            $user->width=2;
            $user->length=7;
            $user->save();
			
		
			$user = new Truck();
            $user->licensePlate="HZ-12-KFN2";
            $user->company_id=1;
            $user->location_id=11;
            $user->avgFuelComsumption=24;
            $user->payLoadCapacity=12000;
            $user->weight=1000;
            $user->height=65;
            $user->width=2;
            $user->length=7;
            $user->save();
			
			$user = new Truck();
            $user->licensePlate="HZ-12-KFN3";
            $user->company_id=1;
            $user->location_id=25;
            $user->avgFuelComsumption=35;
            $user->payLoadCapacity=14500;
            $user->weight=3000;
            $user->height=4;
            $user->width=2;
            $user->length=10;
            $user->save();
			
			$user = new Truck();
            $user->licensePlate="HZ-12-KFN4";
            $user->company_id=1;
            $user->location_id=7;
            $user->avgFuelComsumption=30;
            $user->payLoadCapacity=13000;
            $user->weight=2500;
            $user->height=4;
            $user->width=2;
            $user->length=9.5;
            $user->save();
			
			$user = new Truck();
            $user->licensePlate="HZ-12-KFN5";
            $user->company_id=1;
            $user->location_id=17;
            $user->avgFuelComsumption=27;
            $user->payLoadCapacity=12000;
            $user->weight=2000;
            $user->height=3;
            $user->width=2;
            $user->length=9;
            $user->save();
			
			$user = new Truck();
            $user->licensePlate="HZ-12-KFN6";
            $user->company_id=1;
            $user->location_id=11;
            $user->avgFuelComsumption=33;
            $user->payLoadCapacity=14500;
            $user->weight=2700;
            $user->height=4;
            $user->width=2;
            $user->length=10;
            $user->save();
			
			$user = new Truck();
            $user->licensePlate="HZ-12-KFN7";
            $user->company_id=1;
            $user->location_id=20;
            $user->avgFuelComsumption=35;
            $user->payLoadCapacity=1400;
            $user->weight=3000;
            $user->height=4;
            $user->width=2;
            $user->length=11;
            $user->save();
			
			$user = new Truck();
            $user->licensePlate="HZ-12-KFN8";
            $user->company_id=1;
            $user->location_id=30;
            $user->avgFuelComsumption=25;
            $user->payLoadCapacity=13500;
            $user->weight=1600;
            $user->height=4;
            $user->width=2;
            $user->length=8.5;
            $user->save();
    }
}
