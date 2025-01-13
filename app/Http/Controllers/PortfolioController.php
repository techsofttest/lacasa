<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    
    public function index()
    {

    $data['project_types'] = DB::table('project_types')->orderBy('type')->get();

    $data['projects'] = DB::table('projects')->where('featured',1)->orderBy('order')->get();

    $data['video1'] = DB::table('videos')->where('id',3)->first();

    $data['video2'] = DB::table('videos')->where('id',4)->first();

    return view('portfolio',$data);

    }


    public function fetch_by_type(Request $request)
    {

    $type_id = $request->input('type', []);

    $projects = DB::table('projects')->whereIn('project_type_id',$type_id)->orderBy('order')->get();


    $project_rows="";

    foreach($projects as $project)
    {

    $project_rows .='
        <div class="col-lg-2 col-md-3 col-sm-4 grid-item cat5 cat3 cat2">
                <div class="tp-project-item-wrap p-relative">
                    <div class="tp-project-item fix">
                        <div class="tp-project-thumb">
                            <a href="'.url("project").'/'.$project->slug.'">
                                <img class="w-100" src="'.asset("storage").'/'.$project->image.'" alt="'.$project->image.'">
                            </a>
                        </div>
                    </div>
                    <div class="tp-project-content black-bg">
                        <h6 class="tp-project-title"><a href="'.url("project").'/'.$project->slug.'">'.$project->name.'</a></h6>
                    </div>
                    <div class="tp-project-last-title">
                        <h6><a href="'.url("project").'/'.$project->slug.'"></a>'.$project->name.'</h6>
                    </div>
                </div>
            </div>
            ';

    }


    //return view('portfolio',$data); 

    echo $project_rows;

    }


    public function show($slug)
    {

        $data['project'] = DB::table('projects')->where('slug',$slug)->first();

        $data['related'] = DB::table('projects')->where('featured',1)->limit(5)->get();

        return view('portfolio_detail',$data);

    }


}
