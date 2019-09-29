<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $req)
    {
    	//print_r($req->file());
    	return $req->file('user_img')->store('public');
    }
}
