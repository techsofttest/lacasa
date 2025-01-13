<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {

    $data['page'] = DB::table('pages')->where('slug', 'service')->first();

    $data['services'] = DB::table('services')->orderBy('name')->get();

    return view('services',$data);

    }



    public function show($slug)
    {

    $data['service'] = DB::table('services')->where('slug',$slug)->first();

    return view('service_detail',$data);

    }





}
