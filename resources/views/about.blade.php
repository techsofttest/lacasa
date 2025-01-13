@extends('layouts.app')

@section('head_extras')

<style>
    
    .etiyos-nn-sec h5 p{
    font-size: 1.5vw;
    font-weight: normal;
    line-height: 1.9;
    font-style: normal;
    text-align: left;
    color: #878787;
    margin-bottom: 1.5vw;
    }
    
</style>

@endsection

@section('content')

<div class="About-img">
    <img src="{{ asset('storage') }}/{{ $page->banner }}" alt="" width="100%">
</div>

<div class="About-innersecs">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="about-nn-sec">
                    <div class="innser-sec-title">
                        <h2>Here at <span>LACASA !</span></h2>
                    </div>
                    <div>
                        {!! $about_main->content !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <img class="ab1-im" src="{{ asset('storage') }}/{{ $about_main->image }}" width="100%">
            </div>
        </div>
    </div>
</div>

<div class="Ehiyos-innersecs">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-12">
                <div class="etiyos-nn-sec">
                    <h5>{!! $motto->content !!}</h5>
                    <div class="row ethiuos-row">
                        <div class="col-lg-6 col-md-6">
                            <div class="phoosec-box">
                                <h3>Philosophy</h3>
                                {!! $philosophy->content !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="phoosec-box">
                                <h3>Approach</h3>
                                {!! $approach->content !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="phoosec-box">
                                <h3>Client Focus</h3>
                                {!! $client_focus->content !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="phoosec-box">
                                <h3>Middle East Expertise</h3>
                                {!! $me_experience->content !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="phoosec-box">
                                <h3>Sector Experience</h3>
                                {!! $sector_experience->content !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="phoosec-box">
                                <h3>Architecture & Engineering</h3>
                                {!! $architecture_experience->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="Management-innersecs">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="Management-nn-sec">
                    <h2>Management Overview</h2>
                    {!! $management_overview->content !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="Managing-image-fulls">
    <div class="container">
        
        @php
        $i=1;
        @endphp

            @foreach($teams as $team)
            <div class="Managing-boxes">
                <div class="Managing-boxes-img">
                    <img src="{{ asset('storage') }}/{{ $team->about_image }}" alt="" width="100%">
                    <div class="manger-box-slide">
                        <!-- First Row -->
                        <div class="first-row">
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="managing-box-content-main">
                                            <div class="managing-box-content">
                                                <div class="managing-box-content-first">
                                                    <h3>{{ $team->name }}</h3>
                                                    <h4>{{ $team->designation }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Second Row -->
                        <div class="second-row">
                            <div class="container">
                                <div class="row @if($i % 2 != 0) justify-content-end @endif">
                                    <div class="col-lg-7 col-md-7">
                                        <div class="managing-box-content-main">
                                            <div class="managing-box-content">
                                                <div class="managing-box-content-second">
                                                    <h3>{{ $team->name }}</h3>
                                                    <h4>{{ $team->designation }}</h4>
                                                    <h5> QUALIFICATION: </h5>
                                                     @foreach(explode(',', $team->qualification) as $item)
                                                    <p>-{{$item}}</p>
                                                    @endforeach
                                                    <h5>PERSONAL SUMMARY:</h5>
                                                    <div class="ab-ma-scroll">
                                                        {!! $team->about_desc !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
                @php
  $i++;
  @endphp
            @endforeach
        
    </div>
</div>

<div class="Get-in-innersec Get-in-innersec-aboue">
    <div class="container">
        <div class="text-center Get-in-innersec-bb">
            <h3>Get to know more about Us!</h3>
            <a href="{{url('team')}}">View More</a>
        </div>
    </div>
</div>

@endsection
