<?php

namespace App\Http\Controllers;

use App\Models\NameDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * @var int
     *
     * Number of shown results from search.
     */
    const MAXIMUM_SEARCH_RESULTS = 3;

    /**
     * Show date of name's nameday.
     *
     * @param $name string
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $name){
        $data = NameDay::query()->where('name', $name)->first();

        return view('profile', ['data' => $data]);
    }

    /**
     * Search namedays with query from search input.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|void
     */
    public function search(Request $request){
        if ($request->ajax()) {
            $query = $request->get('search');
            $data = [];

            if ($query != '') {
                $data = NameDay::query()
                    ->where('name', 'like', '%'. $query .'%')
                    ->distinct()
                    ->limit(self::MAXIMUM_SEARCH_RESULTS)
                    ->get();
            }

            $data = ['results' => $data];

            return response()
                ->json($data);
        }

        // If request was not of type AJAX, throw error.
        abort(404);
    }







}


