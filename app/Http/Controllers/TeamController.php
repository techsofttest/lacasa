<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{

    public function index()
    {

    $data['page'] = DB::table('pages')->where('slug', 'team')->first();

    $data['teams'] = DB::table('teams')->where('is_management',1)->orderBy('order')->skip(1)->take(PHP_INT_MAX)->get();

    //$data['teams'] = DB::table('teams')->orderBy('order','asc')->get();

    $data['staffs'] = DB::table('teams')->where('is_management',0)->orderBy('order','asc')->get();

    $data['managing_partner'] = DB::table('teams')->orderBy('order')->first();

    return view('team',$data);

    }



}
