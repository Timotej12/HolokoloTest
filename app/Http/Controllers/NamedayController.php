<?php

namespace App\Http\Controllers;

use App\Models\NameDay;

class NamedayController extends Controller
{
    /**
     * Show today's nameday.
     */
   public function index(){
       $date = date("Y-m-d");
       $name = NameDay::query()->where('date', $date)->first();
       return view('welcome', ['name' => $name]);
   }
}

