<!doctype html>
<html class="no-js" lang="zxx">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('meta_title')</title>
   <meta name="description" content="@yield('meta_description')">
   <meta name="keywords" content="@yield('meta_keywords')">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/img/favicon.png')}}">
   @yield('head_extras')

<style>

@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-Thin.ttf');
font-weight: 100;
 font-style: normal;
}
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-ThinItalic.ttf');
font-weight: 100;
 font-style: italic;
}
 

@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-ExtraLight.ttf');
font-weight: 200;
 font-style: normal;
}
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-ExtraLightItalic.ttf');
font-weight: 200;
 font-style: italic;
}
 

@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-Light.ttf');
font-weight: 300;
 font-style: normal;
}
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-LightItalic.ttf');
font-weight: 300;
 font-style: italic;
}
 

@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-Regular.ttf');
font-weight: 400;
 font-style: normal;
}
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-Italic.ttf');
font-weight: 400;
 font-style: italic;
}
 
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-Medium.ttf');
font-weight: 500;
 font-style: normal;
}
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-MediumItalic.ttf');
font-weight: 500;
 font-style: italic;
}
 
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-SemiBold.ttf');
font-weight: 600;
 font-style: normal;
}
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-SemiBoldItalic.ttf');
font-weight: 600;
 font-style: italic;
}
 
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-Bold.ttf');
font-weight: 700;
 font-style: normal;
}
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-BoldItalic.ttf');
font-weight: 700;
 font-style: italic;
}
 
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-ExtraBold.ttf');
font-weight: 800;
 font-style: normal;
}
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-ExtraBoldItalic.ttf');
font-weight: 800;
 font-style: italic;
}
 
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-Black.ttf');
font-weight: 900;
 font-style: normal;
}
@font-face {
font-family:"Montserrat";
src:url('assets/css/fonts/Montserrat-BlackItalic.ttf');
font-weight: 900;
 font-style: italic;
}

body {
    font-family: "Montserrat" !important;
	}
	

   
</style>

	<script>
	document.addEventListener('contextmenu', event => event.preventDefault());
	</script>

<link rel="preload" href="{{ asset('assets/css/fonts/Montserrat-Medium.ttf') }}" as="font" type="font/ttf" crossorigin>
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body style="font-family: Montserrat !important;">
 

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

 
   <!-- search popup end -->

   <!-- tp-offcanvus-area-start -->
   <div class="tpoffcanvas-area">
      <div class="tpoffcanvas">
         <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>
         <div class="tpoffcanvas__logo">
            <a href="index.html">
               <img src="{{asset('assets/img/logo.png')}}" alt="">
            </a>
         </div>
       
         <div class="tp-main-menu-mobile d-xl-none"></div>
        

         
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- tp-offcanvus-area-end -->

   <!-- header top area start -->

   <!-- header top area end -->

   <!-- header area start -->
   <div class="tp-header-area z-index-5">
      <div class="container "> 
         <div class="row align-items-center justify-content-center">
            <div class="col-auto f-first">
               <div class="tp-header-logo">
                  <a href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
               </div>
            </div>

            @php
    $thirdSegment = request()->segment(3); // Get the 3rd segment of the URI
         @endphp

            <div class="col-auto d-none d-lg-block f-second">
               <div class="tp-header-menu">
                  <nav class="tp-main-menu-content">
                     <ul>
                        <li>
                           <a class="{{ request()->segment(1) === '' ? 'active' : '' }}" href="{{url('/')}}">Home </a>
                        </li>
                        <li>
                           <a class="{{ request()->segment(1) === 'about' ? 'active' : '' }}" href="{{url('/about')}}">About</a>
                        </li>
						  <li class="has-dropdown-2">
                           <a class="{{ request()->segment(1) === 'portfolio' ? 'active' : '' }}" href="{{url('/portfolio')}}">Portfolio</a>
						   
						 
						   
                    <ul class="submenu tp-submenu">
						     
                    <li><a href="{{url('/portfolio')}}#portdlolio-Ids">All Projects</a></li>
                     <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Residential</a></li>
                     <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Commercial</a></li>
                     <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Mixed Use</a></li>
                     <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Hospitality</a></li>
                     <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Master Plan</a></li>
                     <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Public Use</a></li>
                     <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Work Span</a></li>
                     <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Aviation</a></li>
                     <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Interior Design</a></li>
                      </ul>

                  </li>
					 
                        <!--<li class="has-dropdown-2">-->

                           <li class="">

                           <a class="{{ request()->segment(1) === 'services' ? 'active' : '' }}" href="{{url('services')}}">Services</a>
                         
                        </li>


						<li class="has-dropdown-2">

                        <a class="{{ request()->segment(1) === 'achievements' ? 'active' : '' }}" href="{{url('/achievements')}}">Achievements</a>
                        <ul class="submenu tp-submenu">

                        <li><a href="{{url('/recognition')}}">Recognition</a></li>

                        <li><a href="{{url('/awards')}}">Awards</a></li>

						<li><a href="{{url('/clientele')}}">Clientele</a></li>

                        </ul>
                        
                        </li>


                        <li>
                           <a class="{{ request()->segment(1) === 'team' ? 'active' : '' }}"  href="{{url('/team')}}">Team </a>
                        </li>

						 <li>
                           <a class="{{ request()->segment(1) === 'contact' ? 'active' : '' }}" href="{{url('/contact')}}">Contact Us </a>
                        </li>
 
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="col-auto f-third">
  <div class="tp-header-2-right text-end">
                     <ul>
                        <li>
                           <div class="tp-header-2-icon cart d-none d-md-block">
                              <a class="cart-icon" href="#">
                                <i class="fa fa-share-alt"></i>                                
                              </a>
                             
                           </div>
                        </li>
                        <li>
                           <div class="tp-header-2-icon d-none d-md-block">
                              <button  class="search-open-btnss" onclick="myFunction()" > 
                                 <i class="fa fa-search"></i>                             
                              </button>
							  <div class="search-menu" id="myDIV" style="display:none">
							  <form class="search-form" action="/search" method="get">
          
          <input id="global_search_q" type="text" name="q" maxlength="60" placeholder="Search">
          <button aria-label="Search" disabled="disabled"><i class="fa fa-search"></i></button>
        </form>
							  </div>
							  
                           </div>
                        </li>
                        <li>
                           <div class="tp-header-bar d-lg-none">
                     <button class="tp-menu-bar"><i class="fa-solid fa-bars"></i></button>
                  </div>
                        </li>
                     </ul>
                  </div>
            </div>
			
			
         </div>
      </div>
   </div>
   <!-- header area end -->

   <!-- header area start -->
   <div class="tp-header-area tp-int-menu tp-header-sticky-cloned">
      <div class="container ">
         <div class="row align-items-center justify-content-between">
            <div class="col-auto">
               <div class="tp-header-logo">
                  <a href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
               </div>
            </div>
            <div class="col-auto d-none d-xl-block">
               <div class="tp-header-menu">
                  <nav class="tp-main-menu-content">
                     <ul>
                        
						
						
  <li>
                           <a class="active" href="{{url('/')}}">Home </a>
                        </li>
                        <li>
                           <a href="{{url('/about')}}">About  </a>
                        </li>
						  <li class="has-dropdown-2">
                           <a href="{{url('/portfolio')}}">Portfolio</a>
                           <ul class="submenu tp-submenu">
                                   <li><a href="{{url('/portfolio')}}#portdlolio-Ids">All Projects</a></li>
                                   <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Residential</a></li>
                                   <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Commercial</a></li>
                                   <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Mixed Use</a></li>
                                    <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Hospitality</a></li>
                                    <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Master Plan</a></li>
                                    <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Public Use</a></li>
                                    <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Work Span</a></li>
                     
                           </ul>
                        </li>
                        <li class="has-dropdown-2">
                           <a href="{{url('/services')}}">Services</a>
                           <ul class="submenu tp-submenu">

                              @foreach($services_hdr as $service)
                               <li><a href="{{url('services')}}/{{$service->slug}}">{{$service->name}}</a></li>
                              @endforeach
                             
                           </ul>
                        </li>
                       <li class="has-dropdown-2">
                           <a href="{{url('/achievements')}}">Achievements</a>
                           <ul class="submenu tp-submenu">
                              <li><a href="{{url('/recognition')}}">Recognition</a></li>
                              <li><a href="{{url('/awards')}}">Awards</a></li>
							  <li><a href="{{url('/clientele')}}">Clientele</a></li>
                             
                           </ul>
                        </li>
						  <li>
                           <a href="{{url('/team')}}">Team </a>
                        </li>
						 <li>
                             <a href="{{url('/contact')}}">Contact Us </a>
                        </li>
                      
                         
						
						
                       
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="col-auto">
			
			
			 <div class="tp-header-2-right text-end">
                     <ul>
                        <li>
                           <div class="tp-header-2-icon cart d-none d-md-block">
                              <a class="cart-icon" href="#">
                                <i class="fa fa-share-alt"></i>                                
                              </a>
                             
                           </div>
                        </li>
                        <li>
                           <div class="tp-header-2-icon d-none d-md-block">
                              <button  class="search-open-btn"> 
                                 <i class="fa fa-search"></i>                             
                              </button>
                           </div>
                        </li>
                        <li>
                         <div class="tp-header-bar d-xl-none">
                     <button class="tp-menu-bar"><i class="fa-solid fa-bars"></i></button>
                  </div>
                        </li>
                     </ul>
                  </div>
			
			
			
            
            </div>
         </div>
      </div>
   </div>
   <!-- header area end -->


   @yield('content')


   
            
   <div class="footer-sewc">
		  
		  <div class="container">
		  
		  <div class="row justify-content-between fosrow ">
		   <div class="col-auto foos-col-1 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
		  <div class="foot-center">
		  
		  <ul>
		 
		  <li><a href="https://www.office.com/" target="_blank" class="foo-1"> <img  class="priconm" src="{{asset('assets/img/fo-1.png')}}" alt="">Staff E-Mail Login</a></li>
		   <li><a href="https://eservices.lacasa.ae:4443/ " target="_blank" class="foo-2"> <img  class="priconm" src="{{asset('assets/img/fo-2.png')}}" alt="">Staff E-Services Login</a></li></ul>
		  </div>
		  </div>
		  
		  		   <div class="col-auto foos-col-2 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
		  <div class="foot-quick-limkss">
		  <div class="row">
		  
		  <div class="col-auto">
		  <ul>
		 
		  <li><a href="{{url('/')}}"  >  Home</a></li>
		   <li><a href="{{url('/about')}}"  >  About</a></li>
		    <li><a href="{{url('/team')}}"  >  Team</a></li>
			 <li><a href="{{url('/contact')}}"  >  Contact Us</a></li>
		   </ul>
		  </div>
		   <div class="col-auto">
		  <ul>
		 
		  

 <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Projects</a></li>
<li><a href="{{url('/portfolio')}}#portdlolio-Ids">All Projects</a></li>
 <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Residential</a></li>
 <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Commercial</a></li>
 <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Mixed Use</a></li>
  <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Hospitality</a></li>
 <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Master Plan</a></li>
 <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Public Use</a></li>
 <li><a href="{{url('/portfolio')}}#portdlolio-Ids">Work Span</a></li>
		   </ul>
		  </div>
		   <div class="col-auto">
		  <ul>
		 
		 


  <li><a href="{{url('/services')}}">Services</a></li>

  @foreach($services_hdr as $service)
   <li><a href="{{url('services')}}/{{$service->slug}}">{{$service->name}}</a></li>
  @endforeach

		   </ul>
		  </div>
		   <div class="col-auto">
		  <ul>
		  

		   <li><a href="{{url('/achievements')}}"  > Achievements</a></li>
		    <li><a href="{{url('/recognition')}}"  >  Recognition & Awards
</a></li>
			 <li><a href="{{url('/clientele')}}"  > Clientele</a></li>
		   </ul>
		  </div>
		  </div>
		  
		  </div>
		  </div>
		  
		    <div class="col-auto foos-col-3 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
		  <div class="footer-map"><img src="{{asset('assets/img/footer/footer-map.png')}}"></div>
		  </div>
		  
		 
		  
		  
		  		 
		  
		   <div class="col-auto foos-col-4 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"> 
		   
		  <div class="foot-download-main">
		   <div class="row  ">
		  <div class="col-lg-12 d-block">
		   <div class="foot-download">
		  <ul>
		  <li><a href="{{asset('assets/img/portfolio/COMPANY-OVERVIEW.pdf')}}" target="_blank">Company Profile <img  class="priconm" src="{{asset('assets/img/footer/fo-3.png')}}" alt=""></a></li>
		   <li><a href="https://www.linkedin.com/company/lacasa/" target="_blank"> <img  class="priconm" src="{{asset('assets/img/footer/fo-4.png')}}" alt=""></a></li>
			<li><a href="#" target="_blank"> <img  class="priconm" src="{{asset('assets/img/footer/fo-5.png')}}" alt=""></a></li>
		  </ul>
		  
		   </div>
		    </div>
		      <div class="col-lg-12 d-block">
		   <p class="copy-right">2024 LACASA Architects & Engineering Consultants</p>
		 </div>
		  </div>
		    </div>
		  </div>
		  
		  
		  </div>
		  
		  </div>
		  
		  </div>
  

   <!-- JS here -->

   <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/three.js') }}"></script>
    <script src="{{ asset('assets/js/hover-effect.umd.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <script>
    AOS.init({
    offset: 20,
    });
    </script>

   @yield('footer_extras')


    
    </body>


    </html>



