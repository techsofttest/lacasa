@extends('layouts.app')


@section('head_extras')



@endsection



@section('content')


<div class="RegAchiwvment-in ">
  <div class="container">
  <div class="wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
  <h3>Recognitions</h3>
   
  {!! $recognition->content !!}

</div>

 <div class="Regcccc-box ">
 <div class="row reco-iii ">


 @foreach($r_images as $img)

 <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
 <div class="recc-box">
  <div class="recc-box-img">
 
 <img src="{{asset('storage')}}/{{img->image}}" alt="{{$img->name}}" width="100%">
 </div>
 
 </div>
 
 </div>

 @endforeach

 
 
 </div>
 
 
		  
		  
 
 
 </div>


 </div>
  
	  </div>
	  
	  
	  



@endsection


@section('footer_extras')



@endsection



