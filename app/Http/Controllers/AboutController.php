<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

    $data['page'] = DB::table('pages')->where('slug', 'about')->first();

    $data['about_main'] = DB::table('contents')->where('id',2)->first();

    $data['motto'] = DB::table('contents')->where('id',3)->first();

    $data['philosophy'] = DB::table('contents')->where('id',4)->first();    

    $data['approach'] = DB::table('contents')->where('id',5)->first();

    $data['client_focus'] = DB::table('contents')->where('id',6)->first();

    $data['me_experience'] = DB::table('contents')->where('id',7)->first();

    $data['sector_experience'] = DB::table('contents')->where('id',8)->first();

    $data['architecture_experience'] = DB::table('contents')->where('id',9)->first();

    $data['management_overview'] = DB::table('contents')->where('id',10)->first();

    $data['teams'] = DB::table('teams')->orderBy('order')->where('is_management',1)->get();

    return view('about',$data);

    }

}
