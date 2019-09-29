<?php

namespace App\Http\Controllers;

use App\usr;
use Illuminate\Http\Request;

class OnetoOneController extends Controller
{
    public function index()
    {
    	return usr::find(1)->myCompany;
    }
}
