@extends('layouts.app')


@section('head_extras')

<!-- Flipbook StyleSheets -->
<link href="{{asset('assets/css/dflip/css/dflip.min.css')}}" rel="stylesheet" type="text/css">
<!-- themify-icons.min.css is not required in version 2.0 and above -->
<link href="{{asset('assets/css/dflip/css/themify-icons.min.css')}}" rel="stylesheet" type="text/css">

<style>

.About-menu li ul {
    min-height: 300px !important;
}


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


</style>

@endsection


@section('content')


<div class="Port-foliosec-inner ">
	
	 <div class="container">
	 	 <div class="container-ppp" style="padding:0 3.5vw">
	 	  <div class="row">
  <div class="col-lg-12">
	  <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
	  <div class="p-globe">
	 
	<h4> We’re proud to be part of the <strong>MENA</strong> region’s dynamic growth. </h4>
	  </div>
	   </div>
	   <div class="col-lg-5 col-md-5 col-sm-5 d-flex align-items-center  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
	  <img src="{{asset('assets/img/portfolio/pmap1.png')}}" alt="" width="100%">
	   </div>
	    <div class="col-lg-3 col-md-3 col-sm-3 d-flex align-items-center  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
<div class="row">
 <div class="col-lg-4 col-md-4 col-sm-4 col-4  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
	  <img src="{{asset('assets/img/portfolio/bc1.png')}}" alt="" width="100%">
	   </div>
	    <div class="col-lg-4 col-md-4 col-sm-4 col-4   wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
	  <img src="{{asset('assets/img/portfolio/bc2.png')}}" alt="" width="100%">
	   </div>
	    <div class="col-lg-4 col-md-4  col-sm-4 col-4  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
	  <img src="{{asset('assets/img/portfolio/bc3.png')}}" alt="" width="100%">
	   </div>
</div>
	   </div>
	    </div>
	 
	 </div>
	 
	 
	   
   </div>
	 </div>
	  </div>
	 </div>
	 
	 
	 
	 <div class="">
	 <div class="container">
	 

      <div  class="_df_book" id="flipbook_pdf" source="{{asset('assets/img/portfolio/COMPANY-OVERVIEW.pdf')}}" style="padding-left:30px;padding-right:30px;"></div>

	 </div>
	 
	 </div>
	 
	 
   
 <div class="tp-project-area tp-project-style-2 fix Projectsec-twosec" id="portdlolio-Ids">
 <div class="container">
 <div class="row">
  <div class="col-lg-12">
  
  
  
   <ul class="About-menu mtab">

                    
            <li><a href="javascript:void(0);" onclick="openprofile(event, 'project1')" id="defaultOpen"  class="tablink mtablinks active">FEATURED PROJECTS</a></li>      
            <li class=" menu-item-has-children"><a href="javascript:void(0);"   class="tablink mtablinks">All Projects</a>
			
			 <ul class="About-menu-sub"  >
						 <button id="clear_filter">Clear</button>

                        @foreach($project_types as $project_type)
                           <li><span>{{$project_type->type}}</span><input type="checkbox" name="check[]" value="{{$project_type->id}}" class="type_check" onchange="openprofile(event, 'project2')"> </li>
                        @endforeach
                        </div>
			</li>
                 
          </ul>
		   </div>
		   
		   
		   
		   <div class="col-lg-12">

 <div class="tabmain produc-rightsec aucc-tab">
				
				
				 <!----------- Start  --------->
<div id="project1" class="mtabcontent "  >
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
		 </div>
		 
		  <div id="project2" class="mtabcontent"  >

		 
		  <div class="row all-tt-row" id="filter_rows">

					
        </div>


		   
		 </div>
		 

 </div>

 </div> 
		   
  
 
 
 
 
                  </div>
				  
				  

				  <div class="text-center viemore-innersec-bb">

		  
		        <a href="#">View More</a>

		  </div>
		  
		  
		  
		  
				   
				   </div>



               <div class="container">

                  <div class="row">

                     <div class="col-lg-6 col-sm-6">

                  <video class="w-100 vvid1 " autoplay="autoplay" muted poster="{{asset('storage')}}/{{$video2->poster}}" style="padding-right: 20px;">

                     <source type="video/mp4" src="{{asset('storage')}}/{{$video1->video}}" />
      
                  </video>

                     </div>

                     
                     <div class="col-lg-6 col-sm-6">

                        <video class="w-100 vvid" autoplay="autoplay" muted poster="{{asset('storage')}}/{{$video2->poster}}" style="padding-left: 20px;">

                           <source type="video/mp4" src="{{asset('storage')}}/{{$video2->video}}" />
      
                        </video>
                        
                     </div>

                  </div>

               </div>



               <div class="text-center viemore-innersec-bb"></div>


 
 </div>
 
 
 
 
 </div>


@endsection


@section('footer_extras')

<script>
function openprofile(evt, profileName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("mtabcontent");
 
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("mtablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
	
  }
  document.getElementById(profileName).style.display = "block";
  evt.currentTarget.className += " active";
   
 
}
document.getElementById("defaultOpen").click();
</script>


<script>

var option_flipbook_pdf = {scrollWheel: false,zoomRatio: 1.5};

</script>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@dearhive/dearflip-jquery-flipbook@1.7.3/dflip/js/dflip.min.js" type="text/javascript"></script>


<script>


$('.type_check').change(function(){

  
   var checkedValues = [];
    $('.type_check:checked').each(function() {
            checkedValues.push($(this).val());  // Add the value of each checked checkbox
   });

   let requestBody = {
   "_token": '{{ csrf_token() }}',
   type: checkedValues
   }

   $.ajax({
         method: "POST",
         url: "/projects/filter",
         data: requestBody,
         datatype: 'json',
         success: function(result) {

        $('#filter_rows').html(result);
         }
    });

         //console.log(result);
   

   })


   $('#clear_filter').click(function()
   {
   
         // Uncheck all checkboxes with class 'check'
         $('.type_check').prop('checked', false);

         $('.type_check').trigger('change');
     
   })



</script>


@endsection



