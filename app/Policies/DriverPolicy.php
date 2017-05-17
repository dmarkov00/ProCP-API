<?php

namespace App\Policies;

use App\User;
use App\Driver;
use App\Company;
use Illuminate\Auth\Access\HandlesAuthorization;

class DriverPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public  function update(){

    }
}
