<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AchievementController extends Controller
{

    

    public function index()
    {

    $data['page'] = DB::table('pages')->where('slug', 'achievements')->first();

    $data['main'] = DB::table('contents')->where('id',11)->first();

    $data['recognition'] = DB::table('contents')->where('id',12)->first(); 

    $data['r_images'] = DB::table('achievements')->where('achieve_type_id',1)->get(); 

    $data['awards'] = DB::table('contents')->where('id',13)->first(); 

    $data['a_images'] = DB::table('achievements')->where('achieve_type_id',2)->get(); 

    $data['clientele'] = DB::table('contents')->where('id',14)->first(); 

    $data['c_images'] = DB::table('achievements')->where('achieve_type_id',3)->get();

    return view('acheivements',$data);

    }


    public function recognition()
    {

    $data['recognition'] = DB::table('contents')->where('id',12)->first(); 

    $data['r_images'] = DB::table('achievements')->where('achieve_type_id',1)->get(); 

    return view('reco',$data);

    }



    public function awards()
    {

    $data['awards'] = DB::table('contents')->where('id',12)->first(); 

    $data['a_images'] = DB::table('achievements')->where('achieve_type_id',2)->get();

    return view('awards',$data);

    }



    public function clientele()
    {

    $data['clientele'] = DB::table('contents')->where('id',12)->first(); 

    $data['c_images'] = DB::table('achievements')->where('achieve_type_id',3)->get();

    return view('clientele',$data);

    }


    
}
