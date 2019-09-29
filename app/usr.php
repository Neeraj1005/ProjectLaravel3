<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usr extends Model
{
    public function myCompany()
    {
    	//return $this->hasOne('App\Company');
    	
    	return $this->hasMany('App\Company');
    	//return $this->hasOne('App\cmp','user_id','id');
    }
}
