<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    public $timestamps = false; //define timestamp for your table if timestamp is not define in your table //without thsi you will get error because we have create table manually:
}
