@extends('layouts.app')


@section('head_extras')

<style>


.ex__title
{
 text-transform:uppercase;   
}

.view_intro_cont
{
   text-align: center;
   position: absolute;
   top: 93%;
    left: 50%;
    transform: translate(-50%, 0);
    color: white;

}


@media only screen and (max-width: 575px) and (min-width: 100px) {
   .view_intro_cont {
      top: 85% !important;
   }
}

.video_btn  
{  background: #0000007a;
    padding: 8px;
    border-radius: 10px;
    }
.video_btn:hover{
    Background: #979393;
}  

.tp-blog-arrow-box {
    top: 15% !important;
}

</style>


@endsection


@section('content')

<div class="tp-slider-3-area" >
               <div class="tp-slider-3-wrapper p-relative">
                  <div class="tp-slider-dots"></div>
                  <div class="swiper-container tp-slider-3-active">
                     <div class="swiper-wrapper">





                     @if(!empty($banner_video))

                     @if(!empty($banner_video->video))

                     <div class="swiper-slide">
                          <div class="video-container my_video_c">
      <div class="video-item" data-portrait-index="0" data-vimeo="299739458"  data-vimeo-start="0s" data-vimeo-width="640" data-vimeo-height="272">
        <video loop="" autoplay=""  muted class="html-video" poster="{{asset('storage')}}/{{$banner_video->poster}}">
        <source type="video/mp4" src="{{asset('storage')}}/{{$banner_video->video}}" />
      </video>
          <div class="iframe-css"></div>
        </div>

               <div class="view_intro_cont">
               <a class="video_btn goToFirstVideo" href="javascript:void(0);"><i class="fa fa-video"></i> View Intro</a> 
               </div>

                        </div>

                        </div>

                        @endif

                        @endif


                        

                        @if($page && isset($page->slider_images) && is_array(json_decode($page->slider_images)))
                        @php
                            // Decode JSON string into an array
                            $add_images = json_decode($page->slider_images, true);
                        @endphp

                        @foreach($add_images as $img)

                        <div class="swiper-slide">
                           <div class="tp-slider-3-height p-relative fix grey-bg">
                            <img class="tp-slider-3-bg tp-slider-3-overlay" src="{{asset('storage')}}/{{$img}}">
                             <div class="Banner-slide" >
                             
                              <div class="container">
                                 <div class=" p-relative">
                                    <div class="row align-items-center justify-content-between">
									    <div class="col-lg-12">
                                       <div class="baner-trexts">
									   <h2>ELLINGTON</h2>
									   </div>


                                       </div>


                                          
                                    </div>


                                 </div>
								  </div>
                              </div>
                           </div>
                        </div>

                        @endforeach
                        @endif



                     


                     </div>
                  </div>

               </div>

            </div>


            <!-- slider area end -->




   
   <div class="tp-funfact-area Counter-m-tpsec tp-funfact-height fix p-relative">
              
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-xl-12 col-lg-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
					 
					  <div class="swiper-container tp-counter-active">
                              <div class="swiper-wrapper">
                                 <div class="swiper-slide">
					  <div class="tp-funfact-item-box d-flex justify-content-center row">
                          <div class="col-lg-auto col-auto"> <div class="tp-funfact-item p-relative justify-content-between ">
                             <h6 class="tp-funfact-number">19<span class="ssapn">+</span> <span class="aco-spann">   Years of Excellence</span></h6>
                             
                               </div>
                           </div>
                          
                        
                        </div>
					  </div>
					  
					   <div class="swiper-slide">
					 <div class="tp-funfact-item-box d-flex justify-content-center row">
                          <div class="col-lg-auto col-auto"> <div class="tp-funfact-item p-relative justify-content-between ">
                             <h6 class="tp-funfact-number">600<span class="ssapn">+</span> <span class="aco-spann">   Projects</span></h6>
                             
                               </div>
                           </div>
                          
                        
                        </div>
					  </div>
					  
					  
					   <div class="swiper-slide">
					  <div class="tp-funfact-item-box d-flex justify-content-center row">
                          <div class="col-lg-auto col-auto"> <div class="tp-funfact-item p-relative justify-content-between ">
                             <h6 class="tp-funfact-number">500<span class="ssapn">+</span> <span class="aco-spann">   Clients</span></h6>
                             
                               </div>
                           </div>
                          
                        
                        </div>
					  </div>
					  
					  
					  
					  
					  
               </div>
            </div>
					   <div class="row justify-content-center" style="display:none">
                     <div class="col-xl-12 couu1" >
                        <div class="tp-funfact-item-box d-flex justify-content-center row">
                          <div class="col-lg-auto"> <div class="tp-funfact-item p-relative justify-content-between ">
                             <h6 class="tp-funfact-number">19<span class="ssapn">+</span> <span class="aco-spann">   Years of Excellence</span></h6>
                             
                               </div>
                           </div>
                          
                        
                        </div>
                     </div>
					  <div class="col-xl-12 couu2" >
                        <div class="tp-funfact-item-box d-flex justify-content-center row">
                          <div class="col-lg-auto"> <div class="tp-funfact-item p-relative justify-content-between ">
                             <h6 class="tp-funfact-number">600<span class="ssapn">+</span> <span class="aco-spann">   Years</span></h6>
                             
                               </div>
                           </div>
                          
                        
                        </div>
                     </div>
					   <div class="col-xl-12 couu3" >
                        <div class="tp-funfact-item-box d-flex justify-content-center row">
                          <div class="col-lg-auto"> <div class="tp-funfact-item p-relative justify-content-between ">
                             <h6 class="tp-funfact-number">500<span class="ssapn">+</span> <span class="aco-spann">   Clients</span></h6>
                             
                               </div>
                           </div>
                          
                        
                        </div>
                     </div>
					  
					 
   </div>
                     </div>
                  </div>
				  <div class="counter-line"></div>
               </div>
            </div>
			
			
			  
     <div class="tp-about-area tp-about-bg p-relative grey-bg pb-150 Experisemainsec">
             
               <div class="container">
                  <div class="row align-items-end">
                   
                     <div class="col-lg-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-about-content" >
                           <div class="tp-about-title-box  ">
                             <div class="row justify-content-between">
							 <div class="col-auto">
							    <h4>From Concept to<br> Completion.</h4>
							 </div>
							  <div class="col-auto">
							  <h3>SERVICES</h3>
							 </div>
							 
							 </div>
                             
							
							  
                           </div>
                           <div class="tp-about-text mb-25">
                              {!! $service_content->content !!}
                           </div>
                         
                         
                        </div>
                     </div>
                  </div>
				                    </div>
									
									
									
									<div class="container">
									
									
									
									
									 <div class="row justify-content-center expertise-row">
									 
									 

                        @foreach($services as $service)
									 
                        <div class="col-lg-2 col-md-4 col-sm-6 d-flex  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
									
							<div class="tp-project-2-item">
                        
                     <div class="tp-project-2-thumb ">
                     <a href="{{url('services')}}/{{$service->slug}}" class="tt-imggg"><img src="{{asset('storage')}}/{{$service->home_image}}" class="image1" alt=""></a>
										  
							<div class="ex__content">
                    <h3 class="ex__title"><a href="{{url('services')}}/{{$service->slug}}">{{$service->name}}</a></h3> </div>  
                  </div>
                     </div>	


									</div>

                        @endforeach
									

									

									</div>
									
									<div class="featured-line"></div>
									
									</div>
									
									

					 
					
            </div>
   
   
   
   
     <!-- project area start -->
            <div class="tp-project-area tp-project-style-2 ">
               <div class="container">
			   
			   
			     <div class="tp-hero-area ">
            
                  <div class="row">
                     <div class="col-xl-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-hero-wrap text-center">
                           <h1 class="featureddd-tit ">
                             FEATURED <span>PROJECTS</span>
                              
                             
                           </h1>
                         
                        </div>
                     </div>
                  </div>
           
            </div>
			   
			   
			   
                  <div class="row ">



                     @foreach($projects as $project)

                     <div class="col-lg-4 col-md-6 col-sm-6   wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-project-item-wrap p-relative">
                           <div class="tp-project-item fix">
                              <div class="tp-project-thumb">
                                 <a href="{{url('project/'.$project->slug)}}"><div class="lightbox-button__wrapper"></div><img class="w-100" src="{{asset('storage/'.$project->thumb_image)}}"
                                       alt=""></a>
                              </div>
                           </div>
                           <div class="tp-project-content black-bg">
                              <h6 class="tp-project-title"><a href="{{url('project/'.$project->slug)}}">
</a></h6>

                           </div>
						      <div class="tp-project-last-title">
                              <h6 class=" "><a href="{{url('project/'.$project->slug)}}">
						         {{$project->name}}</a></h6>

                           </div>
						   
                        </div>
                     </div>

                     @endforeach


					
                  </div>
				  
				  <div class="text-center viemore-innersec-bb ser-bb-btn">
		  
		  
		  <a href="{{url('/portfolio')}}">View More</a>
		  </div>
               </div>
            </div>



            

 

           
      <div class="mvideo-container mmy_video_c" style="    background: #f8f8f8;">
    <div class="mvideo-item" data-portrait-index="0" data-vimeo="299739458"  data-vimeo-start="0s" data-vimeo-width="640" data-vimeo-height="272">
          <video loop="" autoplay=""  muted class="html-video" poster="assets/img/banner/b1.png">
        <source type="video/mp4" src="{{asset('storage')}}/{{$ad_video->video}}" />
      </video>
          <div class="iframe-css"></div>
        </div>
    
 </div>
   
   
   
   
  <div class="tp-blog-area   p-relative    ">
              
               <div class="container">
                  <div class="tp-blog-title-wrap  nn-title">
                     <div class="row">
                        <div class="col-xl-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                           <div class="la-blog-title-box">
                             
                              <h3  >News & Insights</h3>
							  <div class="dd-line"></div>

                                 <div class="tp-blog-arrow-box d-block d-lg-block">
                                    <button class="blog-prev">
                                    <img src="{{asset('assets/img/b1.png')}}" alt="">
                                    </button>
                                    <button class="blog-next">
                                    <img src="{{asset('assets/img/b2.png')}}" alt="">
                                    </button>
                                 </div>

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xl-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-blog-wrapper p-relative">
                           
                           <div class="swiper-container tp-blog-active">
                              <div class="swiper-wrapper">


                        @foreach($newse as $news)

                        <div class="swiper-slide">
                                   <div class="blog-ho-box">
								   
								   <div class="row justify-content-between ">
								   <div class="col-lg-6 col-md-6 col-sm-6">
								   
								   <div class="news-left">
								   <h3>{{$news->title}}</h3>
								   <p>{{$news->description}}</p>
								   <a class="nebbtn" href="{{url('/news-and-insights')}}">View More</a>
								   </div>
								   
								   </div>
								   
								    <div class="col-lg-6 col-md-6 col-sm-6">
								   
								   <div class="bbimg">
								   
								 <img src="{{asset('storage')}}/{{$news->image}}" alt="" width="100%">
								   </div>
								   
								   </div>
								   
								   </div>
								   
								   </div>
                                 </div>


                        @endforeach
                                
                                
                               
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 


@endsection



@section('footer_extras')


<script>
   // Wait for DOM content to load
   
   document.addEventListener('DOMContentLoaded', function () {

      $('.goToFirstVideo').click(function(){
         if (slider3swiper) {  // Check if slider3swiper is defined
         slider3swiper.slideTo(1); // Navigate to the first slide
         var video = $('.video-item video')[0]; 
         video.currentTime = 0; 
         video.play();
         } else {
         console.error('Swiper instance is not defined');
         }
      });


   });

 
</script>


@endsection