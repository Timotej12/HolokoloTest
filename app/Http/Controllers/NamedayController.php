<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class NamedayController extends Controller
{
   public function index(){
       $date = date("Y-m-d");
       $names = DB::select("Select * FROM name_days WHERE date = '$date'");
       return view('welcome',['names'=>$names]);
   }



}

