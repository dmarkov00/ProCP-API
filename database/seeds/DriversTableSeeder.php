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
        
            $user = new Driver();
            $user->fName="Aaron";
            $user->lName="Aar";
            $user->phoneNbr=56565656;
            $user->company_id=2;
            $user->email="aaron@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Alan";
            $user->lName="Aaa";
            $user->phoneNbr=56565600;
            $user->company_id=2;
            $user->email="alan@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Bert";
            $user->lName="Bb";
            $user->phoneNbr=56565601;
            $user->company_id=2;
            $user->email="bert@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Adam";
            $user->lName="Aad";
            $user->phoneNbr=56565602;
            $user->company_id=2;
            $user->email="adam@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Bill";
            $user->lName="Bee";
            $user->phoneNbr=56565603;
            $user->company_id=2;
            $user->email="bill@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Boris";
            $user->lName="Boo";
            $user->phoneNbr=56565604;
            $user->company_id=2;
            $user->email="boris@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Bruno";
            $user->lName="Buu";
            $user->phoneNbr=56565605;
            $user->company_id=2;
            $user->email="bruno@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Carl";
            $user->lName="Car";
            $user->phoneNbr=56565657;
            $user->company_id=2;
            $user->email="carl@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Claude";
            $user->lName="Caa";
            $user->phoneNbr=56565606;
            $user->company_id=2;
            $user->email="claude@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Charles";
            $user->lName="Cc";
            $user->phoneNbr=56565607;
            $user->company_id=2;
            $user->email="charles@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Daniel";
            $user->lName="Dd";
            $user->phoneNbr=56565608;
            $user->company_id=2;
            $user->email="daniel@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Dani";
            $user->lName="De";
            $user->phoneNbr=56565609;
            $user->company_id=2;
            $user->email="dani@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Duke";
            $user->lName="Doo";
            $user->phoneNbr=56565610;
            $user->company_id=2;
            $user->email="duke@gmail.com";
            $user->save();
			
			$user = new Driver();
            $user->fName="Luke";
            $user->lName="L";
            $user->phoneNbr=56565611;
            $user->company_id=2;
            $user->email="luke@gmail.com";
            $user->save();
        
    }
}
