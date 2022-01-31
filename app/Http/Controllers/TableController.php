<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\NameDay;

class TableController extends Controller
{
    /**
     * Show all name-days in table
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $data = NameDay::query()->get();
        return view('table', ['data' =>$data]);
    }



}

