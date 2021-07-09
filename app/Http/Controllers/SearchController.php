<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search(Request $request)
    {
        if (isset($_GET['query']))
        {
            $search_text = $_GET['query'];
            $countries = DB::table('country')->where('Name','LIKE','%'.$search_text.'%')->paginate(2);
            $countries->appends($request->all());
            return view('search',['countries'=>$countries]);
        }
        else
        {
            return view('search');
        }
    }
}
