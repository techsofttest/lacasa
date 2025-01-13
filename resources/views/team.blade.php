@extends('layouts.app')


@section('head_extras')


<style>

.text-hover
	{
	position: absolute;
    z-index: 10;
    align-items: center;
    padding: 20px;
    height: 85%;
	display:none;
	transition: all .3s ease;
	}

	.text-hover p
	{
	color: white !important;
	}

	.tty-imqage-box:hover > .text-hover
	{
	display:flex;
	}

	.tty-imqage-box:hover >.tt-image-hover {
    filter: brightness(0.5);
	}

	.teamfyll-img img
	{
	max-height:70vh;
	object-fit:cover;
	}

	.tty-imqage-box img
	{
	height: 40vh;
	object-fit: cover;
	}

</style>


@endsection



@section('content')


<div class="teamfyll-img">

<img src="{{asset('storage')}}/{{$page->banner}}" alt="" width="100%">
</div>
     <div class="team-foliosec-inner ">
	
	 <div class="container">
	 <div class="row">
	 <div class="col-lg-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" >
	 <div class="team-main-text">
	 <p>Our team is the heart of our organization, bringing together a diverse array of talents and perspectives that fuel our mission.  </p>
	  </div>
	  </div>
	 </div>
	 
	 
	 
	  <div class="row sfirst-rot">
	 <div class="col-lg-4 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" >
	 
	 <div class="team1image">
	 <div class="teamlightbox-button__wrapper"></div>
	 <img src="{{asset('storage')}}/{{$managing_partner->image}}" width="100%">
	 </div>
	 
	  </div>
	   <div class="col-lg-8 col-md-8 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" >
	 
	 <div class="team1heading">
	 
	<h3>{{$managing_partner->name}}</h3>
	<h4>{{$managing_partner->designation}}</h4>

    <p>{!!nl2br(e($managing_partner->description))!!}</p>

	 </div>
	 
	  </div>
	 </div>
	 
	 <div class="team-line1"></div>


	 
	 <div class="row first-rot justify-content-center">
	 
	
	@foreach($teams as $team)
     
	<div class="col-lg-4 col-md-4 col-sm-6 d-flex wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" >
	 
	<div class="tty-imqage-box">


		<div class="text-hover">


		 <p>{{$team->description}}</p>

		
		</div>

	 <div class="tt-image-hover">
	 <div class="teamlightbox-button__wrapper"></div>
	 <img src="{{asset('storage')}}/{{$team->image}}" alt="" width="100%">
	 
	 </div>
	 <div class="tt-text-hover">
	 <h3>{{$team->name}}</h3>
	 
		<h4>{{$team->designation}}</h4>

	  </div>
	 </div>
	 
	 </div>

	 @endforeach
	 
	 </div>
	 
	 
	<div class="team-line2"></div>
	 


	<div class="row justify-ontent-center team-box-3">

	@foreach($staffs as $team)
	 
	 <div class="col-lg-3 col-md-3 col-sm-6 d-flex wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" >
	 
	 <div class="tty-imqage-box">
	 <div class="tt-image-hover">
	 <div class="teamlightbox-button__wrapper"></div>
	 <img src="{{asset('storage')}}/{{$team->image}}" alt="" width="100%">
	 
	 </div>
	 <div class="tt-text-hover">
	 <h3>{{$team->name}}</h3>
	 
	<h4>{{$team->designation}}</h4>
	  </div>
	 </div>
	 
	 </div>


	 @endforeach

	 
	 	
	
	  </div>
	 
	 
	 <div class="text-center viemore-tt-bb">
		  
		  
		  <button href="#" class="tourmore">View More</button>
	 </div>
	 
	 
	 
	</div>
 
 
 
 
 
 </div>


@endsection