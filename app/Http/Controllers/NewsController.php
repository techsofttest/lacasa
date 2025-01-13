<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    

    public function index()
    {

    $data['newss'] = DB::table('news')->orderBy('news_date')->get();

    //$data['archive'] = ;

    $data['dates'] = DB::table('news')
    ->selectRaw('DISTINCT DATE_FORMAT(news_date, "%Y-%m") as month_year')
    ->orderBy('news_date', 'asc')
    ->get();

    return view('news_detail',$data);

    }


}
