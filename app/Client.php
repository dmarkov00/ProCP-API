<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    public $timestamps = false;
    // Making all attributes mass assignable
    protected $guarded = [];


}
