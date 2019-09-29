<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
   //this is used for every method insert delete update if we use same model
    protected $table = 'company';//which table do you want to update
    public $timestamps = false;  //without thsi you will get error because we have create table manually:
}
