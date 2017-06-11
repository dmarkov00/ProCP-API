<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name="john Does Not";
        $user->companyName="john1company";
		$user->companyId=2;
        $user->email="johngreen@gmail.com";
        $user->api_token="6UhcQUtcEuE2HXdUM1crQtV9RQQDI6t5IvWVkWcTTFxbc7rtjXz5Od77cqba";
        $user->password=bcrypt("secret");
        $user->save();
        for($i=0; $i<=10; $i++){
            $user = new User();
            $user->name="john Does Not";
            $user->companyName="john1company";
			$user->companyId=$i;
            $user->email="john".$i."@gmail.com";
            $user->api_token=str_random(60);
            $user->password=bcrypt("secret");
            $user->save();
        }
    }
}
