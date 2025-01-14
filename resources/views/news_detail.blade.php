@extends('layouts.app')


@section('head_extras')



@endsection



@section('content')

<div id="content-area" class="pro-detailss">
   
   <div class="container">
   
   <div  class="row po-de-row justify-content-between">
   


  

   <div class="col-lg-8 col-md-8 col-sm-8">


   @foreach($newss as $news)
    <div  class="row po-de-row justify-content-between">
    <div class="col-lg-12 col-md-12 col-sm-12">

    <div class="port-lef">
	 <div class="tp-slider-3-portfolio" >

                      
               <div class="tp-slider-3-height p-relative fix grey-bg">
                  
               <img class="tp-slider-3-bbsec tp-slider-3-overlay" src="{{asset('storage')}}/{{$news->image}}">
               
               </div>
             
            </div>
	
	<div class="port-lef-content">
	   
	<h3>{{$news->title}}</h3>
	<p>{{$news->description}}</p>
	</div>
   
   </div>

   </div>
   </div>
   @endforeach



   </div>

   


   
   <div class="col-lg-4 col-md-4 col-sm-4">
   <div class="port-ret">
   <h3>Archives</h3>
   
   <div class="row">


   @php
   use Illuminate\Support\Str;
   @endphp

   @foreach($dates as $date)
   <div class="col-lg-12">
   <a href="{{ url()->current() }}?time={{ $date->month_year }}">{{ $date->month_year }}</a>
   </div>
   @endforeach

   
   </div>
   
   </div>
   </div>
   
   </div>
   
   </div>
   
   </div>





@endsection


@section('footer_extras')

<script>

   document.addEventListener('DOMContentLoaded', function () {
   
   
      //$('#flipbook_pdf').hide();
   
      $('#show_pdf').click(function(){
   
      window.scrollTo(0, 0);
   
      window.dispatchEvent(new Event('resize'));
   
      $('#content-area').fadeOut(300);
   
      $('#flipbook_pdf').fadeIn(300);
   
      $('#show_content').show();
   
   
      })
   
   
      $('#show_content').click(function(){
   
      window.scrollTo(0, 0);
   
      $('#content-area').fadeIn(300);
   
      $('#flipbook_pdf').fadeOut(300);
   
      $('#show_content').hide();
   
   
      })
   
   
   });
      
   </script>


@endsection



