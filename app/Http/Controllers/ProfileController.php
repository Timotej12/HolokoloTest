<?php

namespace App\Http\Controllers;


use App\Models\NameDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    const MAXIMUM_SEARCH_RESULTS = 3;

    public function index($name){
        $names = DB::select("Select * FROM name_days WHERE name = '$name'");
        return view('profile',['data'=>$names]);
    }

    public function search(Request $request){
        if ($request->ajax()) {
            $query = $request->get('search');
            if ($query != '') {
                $data = DB::table('name_days')->where('name', 'like', '%'. $query .'%')->distinct()->limit(self::MAXIMUM_SEARCH_RESULTS)->get();
            }
            else {
                $data = DB::table('name_days')->limit(self::MAXIMUM_SEARCH_RESULTS)->get();
            }

            $data = ['results' => $data];

            return response()
                ->json($data);
        }

        abort(404);
    }







}


