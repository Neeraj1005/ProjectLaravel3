<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Add code for insert data in database
        //return $request->input();//this will return array data for checking
        $user = new Company;
        $user->name = $request->name;
        $user->address = $request->address;
        echo $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //1st methodTHis is hardcoded code return Company::where('id',4)->update(['address'=>'bageshwar']);
        /*2nd Method Dynamically define
        return Company::where('name',$request->name)->update(['address'=>$request->address]);*/
        /*3rd method for update*/
        $cmp= Company::find($request->id);
        $cmp->name=$request->name;
        $cmp->address=$request->address;
        $cmp->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cmp= Company::find($request->id);
        echo $cmp->delete();
        /*if you want to delete collection
        echo Company::destroy([2,3,4]);*/
    }
}
