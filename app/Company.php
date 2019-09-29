<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';//which table do you want to update
    public $timestamps = false;  //without thsi you will get error because we have create table manually:
}
