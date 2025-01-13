@extends('layouts.app')


@section('head_extras')


@endsection


@section('content')


<div class="Achiwvmentbann-img">

<img src="{{asset('storage')}}/{{$page->banner}}" alt="" width="100%">
</div>
 <div class="Achiwvment-innersecs">

<div class="container">
 <div class="Achiwvment-text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">

 {!! $main->content !!}

 </div>
	  </div>
  </div>
 <div class="container"> <div class="ref-line1"></div></div>
  
  <div class="RegAchiwvment ">
  <div class="container">
  <div class="wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
  <h3>Recognitions</h3>
  <img src="{{asset('storage')}}/{{$recognition->image}}" class="reco" width="100%">
  
   {!! $recognition->content !!}


 <br> 
</div>

 <div class="RegAchiwvment-box ">
 <div class="row reco-iii">


 @foreach($r_images as $img)

 <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
 <div class="recc-box">
  <div class="recc-box-img">
 
 <img src="{{asset('storage')}}/{{$img->image}}" alt="{{$img->name}}" width="100%">
 </div>
 
 </div>
 
 </div>

 @endforeach


 
 </div>
 
 <div class="text-center remore-tt-bb">
		  
		  
		  <a href="{{url('recognition')}}" >View More</a>
		  </div>
		  
		  <div class="ref-line1"></div>
 
 
 </div>


 </div>
  
	  </div>
	  
	  
	  <div class="RegAchiwvment ">
  <div class="container">
  <h3>Awards</h3>
  <img src="{{asset('storage')}}/{{$awards->image}}" class="reco" width="100%">
  
   {!! $awards->content !!}

 <div class="RegAchiwvment-box ">
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
 
 <div class="text-center remore-tt-bb">
		  
		  
		  <a href="{{url('awards')}}"  >View More</a>
		  </div>
		  
		  <div class="ref-line1"></div>
 
 
 </div>


 </div>
  
	  </div>
	  
	  
	  
  <div class="RegAchiwvment ">
  <div class="container">
  <h3>Clientle</h3>
  <img src="{{asset('storage')}}/{{$clientele->image}}" class="reco" width="100%">
  
   {!! $clientele->content !!}
 
 <div class="RegAchiwvment-box ">
 <div class="row clinate-iii">


 @foreach($c_images as $img)

 <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
 <div class="recc-box">
  <div class="recc-box-img">
 <img src="{{asset('storage')}}/{{$img->image}}" alt="{{$img->name}}" width="100%">
 </div>
 
 </div>
 
 </div>

 @endforeach


 
 </div>
 
 <div class="text-center remore-tt-bb">
		  
		  
		  <a href="{{url('clientele')}}"  >View More</a>
		  </div>
		  
		   
 
 
 </div>


 </div>
  
</div>




@endsection


@section('footer_extras')



@endsection



