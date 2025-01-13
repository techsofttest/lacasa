<?php

namespace App\Http\Controllers;

use App\Models\Project;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index()
    {

    $data['page'] = DB::table('pages')->where('slug', 'home')->first();

    $data['projects'] = DB::table('projects')->where('featured',1)->orderBy('order')->get();

    $data['service_content'] = DB::table('contents')->where('id',1)->first();;

    $data['services'] = DB::table('services')->orderBy('name')->get();

    $data['banner_video'] = DB::table('videos')->where('id',1)->first();

    $data['ad_video'] = DB::table('videos')->where('id',2)->first();

    $data['newse'] = DB::table('news')->orderBy('news_date')->get();
    

    return view('index',$data);

    }

}
