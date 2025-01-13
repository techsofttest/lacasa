@extends('layouts.app')


@section('head_extras')

<!-- Flipbook StyleSheets -->
<link href="{{asset('assets/css/dflip/css/dflip.min.css')}}" rel="stylesheet" type="text/css">
<!-- themify-icons.min.css is not required in version 2.0 and above -->
<link href="{{asset('assets/css/dflip/css/themify-icons.min.css')}}" rel="stylesheet" type="text/css">

<style>

.flowpaper_viewer
   {
   background: rgb(255 255 255) !important;
   }


   .df-container.df-floating>.df-ui-next {
    right: -8px !important;
   }

   .df-container.df-floating>.df-ui-prev {
    left: -13px !important;
   }


   .df-3dcanvas {
    left: 50%;
    transform: translateX(-50%);
   }

   #show_pdf
   {
      color: #878787;
   }

</style>

@endsection



@section('content')

<div id="content-area" class="pro-detailss">
   
   <div class="container">
   
   <div  class="row po-de-row justify-content-between">
   
   <div class="col-lg-8 col-md-8 col-sm-8">
    <div class="port-lef">
	 <div class="tp-slider-3-portfolio" >

               <div class="tp-slider-3-wrapper p-relative">
                  <div class="tp-slider-dots"></div>
                  <div class="swiper-container tp-slider-3-port">
                     <div class="swiper-wrapper">




                        <div class="swiper-slide">
                           <div class="tp-slider-3-height p-relative fix grey-bg">
                              <img class="tp-slider-3-bbsec tp-slider-3-overlay" src="{{asset('storage')}}/{{$project->image}}">
                           
                           </div>
                        </div>


                        @if($project && isset($project->additional_images) && is_array(json_decode($project->additional_images)))
                        @php
                            // Decode JSON string into an array
                            $add_images = json_decode($project->additional_images, true);
                        @endphp

                        @foreach($add_images as $img)
                        <div class="swiper-slide">
                           <div class="tp-slider-3-height p-relative fix grey-bg">
                            <img class="tp-slider-3-bbsec tp-slider-3-overlay" src="{{asset('storage')}}/{{$img}}">
                             
                           </div>
                        </div>
                        @endforeach

                        @endif

						
						
						 
                     </div>
                  </div>
               </div>
            </div>
	
	<div class="port-lef-content">
	   <div class="  back_btn-port">
         <a href="portfolio.html">
        <img src="{{asset('assets/img/back.png')}}" alt="">
         </a>
      </div>
	<h3>{{$project->name}}</h3>
	<p>{{$project->description}}</p>
	</div>
   
   </div>
   </div>
   
     <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="port-ret">
   <h3>Related Content</h3>
   
   <div class="row">


      @php
    use Illuminate\Support\Str;
   @endphp

   @foreach($related as $proj)

   <div class="col-lg-12">
   
   <div class="Ceworkforce-box ">

      <div class="Cework-box-content">
      <div class="Cework-box-img d-flex align-items-center">
      <div class="Cework-box-img-subb">
         <div class="porttbox-button__wrapper"></div>
      <img src="{{asset('storage')}}/{{$proj->image}}" alt="">
      </div>
      <div class="aa-ppsec"><p>{{ Str::limit($proj->description, 145) }}..</p>
      </div></div>
            

      </div>
      </div>

   </div>

   @endforeach



   <div class="col-lg-12">
      <div class="pptf d-flex">
      <h6>
                   <a id="show_pdf" href="javascript:void(0);">
                   Know more about us <img src="{{asset('assets/img/front.png')}}" alt="">
                   </a>
                </h6>
              <img class="port-iiiss" src="{{asset('assets/img/overview-cover.jpg')}}"> 
             
      </div>
      
      
        
       </div>
   
   
 
   
      
   
   
   
   </div>
   
   </div>
   </div>
   
   </div>
   
   </div>
   
   </div>



   <div id="pdf-area">

      <div class="container my-5 py-4">
	 
            <div style="display:none;padding-left:30px;padding-right:30px;" class="_df_book" id="flipbook_pdf" source="{{asset('assets/img/portfolio/COMPANY-OVERVIEW.pdf')}}" ></div>
      

            <div class="col-lg-12 text-center">

               <button class="btn" id="show_content" style="display:none;"><i class="fa-regular fa-circle-left"></i> Go Back</button>

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



