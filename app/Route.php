<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public $timestamps = false;
    // Making all attributes mass assignable
    protected $guarded = [];
}
