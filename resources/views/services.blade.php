@extends('layouts.app')


@section('content')

<div class="sss-img">
<img src="{{asset('storage')}}/{{$page->banner}}" alt="">
</div>

<div class="Service-mmsec">

<div class="container">

 <div class="row justify-content-center ">
		   <div class="col-lg-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
		   <div class="Service-mmsec-sub">
<h2>SERVICES</h2>
<p>LACASA Architectural and Engineering Consultants offers a comprehensive A to Z range of services that cover all aspects of architectural and engineering consultancy, ensuring a seamless process from initial concept through to project completion. Their expertise spans design, project management, construction supervision, and technical advisory, making them a one-stop solution for a diverse range of projects.
</p>
</div>
</div>
</div>
</div>
</div>
 
<div class="service-main-box-sec-ful">
 
@php
$i=0;
@endphp

@foreach($services as $service)



 <div class="service-main-box-sec  @if($i % 2 != 0) service-main-box-sec-bg @endif">
 <div class="container">
 <div class="row">
 <div class="col-lg-6 col-md-6 d-flex wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
  <div class="service-main-box-text">
 <h3>{{$service->name}}</h3>
 
 <p>{{$service->short_desc}}</p>
 
 <div class="ss-immsbtn">

 <a href="{{url('services')}}/{{$service->slug}}">Read More</a>
 
 @if($service->slug=="lacasa-id")  <a href="{{url('portfolio')}}">Portfolio</a> @endif
 
 </div>
 </div>
 
 </div>
  <div class="col-lg-6 col-md-6 d-flex wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
  <div class="service-main-box-img">
   <div class="ssbox-button__wrapper"></div>
   <img src="{{asset('storage')}}/{{$service->image}}" width="100%">
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
  

@endsection