<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index($name){
        $date = date("Y-m-d");
        $names = DB::select("Select * FROM name_days WHERE name = '$name'");
        return view('profile',['data'=>$names]);
    }



}


