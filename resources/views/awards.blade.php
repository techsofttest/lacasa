@extends('layouts.app')


@section('head_extras')



@endsection



@section('content')


<div class="AwrAchiwvment-in awwwwAchiwvment-in">
  <div class="container">
  
  <div class="wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
  <h3>Awards</h3>
   
  {!! $awards->content !!}


</div>

 <div class="Awrcccc-box ">
 <div class="row">


 @foreach($a_images as $img)

 <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
 <div class="recc-box">
 <div class="recc-box-img">
 <img src="{{asset('storage')}}/{{$img->image}}" alt="{{$img->name}}" width="100%">
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



