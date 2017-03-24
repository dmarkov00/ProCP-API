<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=10; $i++){
            $user = new Company();
            $user->address="company_address".$i;
            $user->companyName="john".$i."company";
            $user->save();
        }
    }
}
