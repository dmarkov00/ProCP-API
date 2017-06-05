<?php

use App\Load;
use Illuminate\Database\Seeder;

class LoadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//some delivered loads
        for($i=0; $i<=5; $i++){
            $load = new Load();
            $load->startLocation_id=1;
            $load->endLocation_id=2;
            $load->content="dummycontent";
            $load->weight=55.5;
            $load->deadline=\Carbon\Carbon::now();
			$load->arrivaldate=\Carbon\Carbon::now();
            $load->delivered=true;
			$load->loadstatus=3;
            $load->fullsalary=2250.75;
			$load->delayfeePercHour=5;
			$load->finalsalary=2250.75;
            $load->client_id=1;
            $load->truck_id=1;
            $load->driver_id=1;
            $load->route_id=1;
            $load->save();
        }
		
		
		//some ontransport loads
		for($i=0; $i<=3; $i++){
            $load = new Load();
            $load->startLocation_id=3*$i;
            $load->endLocation_id=4+$i;
            $load->content="food";
            $load->weight=55.5;
            $load->deadline=\Carbon\Carbon::now();
			$load->arrivaldate=null;
            $load->delivered=false;
			$load->loadstatus=2;
            $load->fullsalary=2000.00;
			$load->delayfeePercHour=5;
			$load->finalsalary=null;
            $load->client_id=2;
            $load->truck_id=2;
            $load->driver_id=2;
            $load->route_id=2;
            $load->save();
        }
		
		//some available loads
		for($i=1; $i<=3; $i++){
            $load = new Load();
            $load->startLocation_id=$i*3;
            $load->endLocation_id=$i*10;
            $load->content="pizza";
            $load->weight=10500;
            $load->deadline="2017-06-27 11:01:45";
			$load->arrivaldate=null;
            $load->delivered=false;
			$load->loadstatus=1;
            $load->fullsalary=2500.00;
			$load->delayfeePercHour=5;
			$load->finalsalary=null;
            $load->client_id=2;
            $load->truck_id=2;
            $load->driver_id=2;
            $load->route_id=2;
            $load->save();
        }
		
		for($i=1; $i<=3; $i++){
            $load = new Load();
            $load->startLocation_id=5+$i;
            $load->endLocation_id=20+$i;
            $load->content="pasta";
            $load->weight=14000;
            $load->deadline="2017-07-10 11:01:45";
			$load->arrivaldate=null;
            $load->delivered=false;
			$load->loadstatus=1;
            $load->fullsalary=5000.00;
			$load->delayfeePercHour=5;
			$load->finalsalary=null;
            $load->client_id=2;
            $load->truck_id=2;
            $load->driver_id=3;
            $load->route_id=3;
            $load->save();
        }
		
		for($i=1; $i<=3; $i++){
            $load = new Load();
            $load->startLocation_id=$i+8;
            $load->endLocation_id=$i+1;
            $load->content="sushi";
            $load->weight=5000;
            $load->deadline="2017-08-27 12:00:00";
			$load->arrivaldate=null;
            $load->delivered=false;
			$load->loadstatus=1;
            $load->fullsalary=10000.00;
			$load->delayfeePercHour=10;
			$load->finalsalary=null;
            $load->client_id=2;
            $load->truck_id=2;
            $load->driver_id=2;
            $load->route_id=2;
            $load->company_id=2;
            $load->save();
        }
		
		for($i=1; $i<=3; $i++){
            $load = new Load();
            $load->startLocation_id=$i*5;
            $load->endLocation_id=36+$i;
            $load->content="apples";
            $load->weight=13500;
            $load->deadline="2017-07-01 11:01:45";
			$load->arrivaldate=null;
            $load->delivered=false;
			$load->loadstatus=1;
            $load->fullsalary=1000.00;
			$load->delayfeePercHour=5;
			$load->finalsalary=null;
            $load->client_id=2;
            $load->truck_id=2;
            $load->driver_id=2;
            $load->route_id=4;
            $load->save();
        }
		
		
    }
}
