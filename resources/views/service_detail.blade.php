@extends('layouts.app')


@section('content')



  
  <div class="sss-img">

  <img src="{{asset('storage')}}/{{$service->banner}}" alt="" width="100%">
   
  </div>
   
   
   
   
   <div class="service-detail-sec">
   
   <div class="container">
   
      <div class="row">
   
         <div class="col-lg-12 text-start back_btn">
   
            <a href="{{url('/services')}}">
            <img src="{{asset('assets/img/back.png')}}" alt="">
            </a>
         </div>
   
      </div>
   
   
    <div class="row justify-content-center ">
            <div class="col-lg-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
            <div class="">
   <h2>{{$service->name}}</h2>
   
   
  @php
   $image1 = "";
   if (!empty($service->detail_image1)) {
       $image1 = '
       </p>
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 wow tpfadeup">
             <img width="100%" style="margin-bottom:1.5vw" src="' . asset('storage/' . $service->detail_image1) . '">
          </div>
       </div>
       <p>
       ';
   }
@endphp

  

    <p>
       
    {!! str_replace('{image}', $image1, nl2br(e($service->long_desc))) !!}
    
    </p>

   </div>
   </div>
   </div>
   
 
   
   <div class="row">
   
      <div class=" @if($service->detail_image_width==0) col-lg-12 col-md-12 col-sm-12 @elseif($service->detail_image_width==1)col-lg-6 col-md-6 col-sm-6 @elseif($service->detail_image_width==3) col-lg-4  col-md-4 col-sm-4  @else col-lg-8 col-md-8 col-sm-8 @endif wow tpfadeup">
   
         <img class="@if(empty($service->detail_image1) )ser-fw-image-n @else ser-fw-image @endif" src="{{asset('storage')}}/{{$service->detail_image2}}">
   
      </div>
   
      
      <div class="@if($service->detail_image_width==0) col-lg-12 col-md-12 col-sm-12 @elseif($service->detail_image_width==1)col-lg-6 col-md-6 col-sm-6 @elseif($service->detail_image_width==3) col-lg-8 col-md-8 col-sm-8   @else col-lg-4  col-md-4 col-sm-4  @endif wow tpfadeup">
   
         <img class="@if(empty($service->detail_image1) )ser-fw-image-n @else ser-fw-image @endif" src="{{asset('storage')}}/{{$service->detail_image3}}">
   
      </div>
   
   </div>
   
  <p>
   {!! nl2br(e($service->long_desc2)) !!}
  <p>
   

</div>
</div>
   




@endsection