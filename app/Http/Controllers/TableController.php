<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function index(){
        $data = DB::select("Select * FROM name_days");
        return view('table', ['data' =>$data]);
    }

    public function show($name){
        $data = DB::select("Select * FROM name_days WHERE name = '$name'");
        return view('table',['data'=>$data]);
    }



}

