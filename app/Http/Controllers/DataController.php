<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use json;

class DataController extends Controller
{
    public function getCountries()
    {


        $countries = \DB::table('collections')->pluck("name","id");
        return view('userpanel.dropdown',compact('countries'));
    }

    public function getStates($id)
    {
        $states = \DB::table("sizes")->where("collect_id",'=',$id)->pluck("name","id");
        return json_encode($states);
    }
}