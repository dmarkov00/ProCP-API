<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompaniesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DriversTableSeeder::class);
        $this->call(LocationsSeeder::class);
        $this->call(TrucksTableSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(LoadsSeeder::class);
    }
}
