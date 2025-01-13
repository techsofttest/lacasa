<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    
    public function index()
    {

    $data['page'] = DB::table('pages')->where('slug', 'contact')->first();

    $data['locations'] = DB::table('locations')->orderBy('order')->get();

    return view('contact',$data);

    }

}
