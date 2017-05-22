<?php

use Illuminate\Database\Seeder;
use App\Driver;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=10; $i++){
            $user = new Driver();
            $user->fName="Driver".$i;
            $user->lName="Driver".$i;
            $user->phoneNbr=$i.$i.$i;
            $user->company_id=1;
            $user->email="john".$i."@gmail.com";
            $user->save();
        }
    }
}
