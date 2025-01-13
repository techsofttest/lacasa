@extends('layouts.app')


@section('content')


<div class="Contact-innersecs" style="background: url('{{asset('assets/img/contact-bg.jpg')}}');background-size: 100% 100%;">

<div class="con-bbg">

<!--
<img src="assets/img/contact-bg.jpg">
-->

</div>

<div class="container">

<div class="row ">

<div class="col-lg-6 cc-oocontact-col">


	  
	@foreach($locations as $location)
	
	<style>
	    
   #map{{$location->id}}
   {
	width: 100%;
    height: 250px;
    margin-bottom: 1.4vw;
   }
	    
	</style>

<div class="row ">

<div class="col-xl-12">
<div class="Contact-nn-sec">

<div class="Contact-sec-title wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                             
                              <h2 >{{$location->name}}</h2>

                           </div>
						   
						

                     <div id="map{{$location->id}}"></div>

						   <div class=" wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">

						   <p>Location: {{$location->address}}</p>                       
 <p>Phone: <a href="tel:{{$location->phone}}">{{$location->phone}}</a>            </p>              
 <p>Email: <a href="mailto:{{$location->email}}">{{$location->email}}</a>     </p>                
 <p>Website: <a href="{{$location->website}}" target="_blank">{{$location->website}}</a></p>
</div>
						 
 </div>
    </div>



	  </div>


    @endforeach
	  
	  
	  
	  
	   
	  
	  <div class="row">
	  
	  <div class="col-lg-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
	  
	  <div class="contact-heading">
	  
	  
	  <div class="cpo-d-dlex  ">
	  <h3>Contact us</h3>
	  <p>We’d love to hear from you! For inquiries or more information about our services and achievements at LACASA, please reach out to us.
</p>
	  </div>
	  
	  
	  </div>
	  
	  
	  
	  </div>
	  
	  
	  </div>
	  
	  
	  <div class="tp-form-top  ">
                     <div class="row"> 
                        <div class="col-lg-12  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                           <div class="tp-form-box tp-form-box-style-2">
                              
                              <form id="contact-form" action="#" method="POST">
                                 <div class="row">

								 								  <div class="col-xl-12 col-lg-12 co-mb-30">
                                       <div class="tp-form-textarea-box">
                                          <select name="region" required >
										  <option selected disabled>Select Region</option>
										  <option value="United Arab Emirates">United Arab Emirates</option>
										   <option value="Kingdom of Saudi Arabia">Kingdom of Saudi Arabia</option>
										    <option value="Qatar">Qatar</option>
										  </select>
                                       </div>
                                    </div>
								 

                                     <div class="col-xl-6 col-6-12 co-mb-30">
                                       <div class="tp-form-input-box">
                                          <input name="name" type="text" placeholder="Name">
                                       </div>
                                    </div>
								
                                    <div class="col-xl-6 col-lg-6 co-mb-30">
                                       <div class="tp-form-input-box">
                                          <input name="email" type="email" placeholder="Email">
                                       </div>
                                    </div>
                                      <div class="col-xl-12 col-lg-12 co-mb-30">
                                       <div class="tp-form-input-box co-mb-40">
                                          <input name="name" class="tt" type="text" placeholder="Subject">
                                       </div>
                                    </div>


                                    <div class="col-xl-12 col-lg-12 co-mb-40">
                                       <div class="tp-form-textarea-box">
                                          <textarea name="message" placeholder="Message"></textarea>
										  
										  <div class="ccc-iim"><img   src="assets/img/c-ic1.png" alt=""><img   src="assets/img/c-ic2.png" alt=""></div>
                                       </div>
                                    </div>
                                                       
                                   
                                 </div>
								 
								 <div class=" co-mb-40">
                                 <button class="tp-btn-black hover-2 theme-bg" type="submit"><span>Send a messege</span></button>
                                </div>
                              </form>
                           </div>                   
                        </div>
                      
                     </div>
                  </div>
	     </div>
                  </div>
	  
  </div>
	  </div>


@endsection



@section('footer_extras')



<script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyDlBXNeeC2uasbdOe4smRxVnVIZcMfZ_6E&#038;ver=6.3.1' id='google-maps-js'></script>
   


<script>


//Standard

var bauhausDefaultGoogleMap = [];



//Shades of Grey

var bauhausShadesOfGrey = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];



// Cartoon

var bauhausCartoon = [{ "featureType": "landscape", "stylers": [ { "visibility": "off" } ]},{ "featureType": "transit", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.park", "elementType": "labels", "stylers": [ { "visibility": "off" }]},{ "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#d3d3d3" }, { "visibility": "on" } ]},{ "featureType": "road", "elementType": "geometry.stroke", "stylers": [ { "visibility": "off" } ]},{ "featureType": "landscape", "stylers": [ { "visibility": "on" }, { "color": "#b1bc39" } ]},{ "featureType": "landscape.man_made", "stylers": [ { "visibility": "on" }, { "color": "#ebad02" } ]},{ "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#416d9f" } ]},{ "featureType": "road", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#000000" } ]},{ "featureType": "road", "elementType": "labels.text.stroke", "stylers": [ { "visibility": "off" }, { "color": "#ffffff" } ]},{ "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#000000" } ]},{ "featureType": "road", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#ffffff" } ]},{ "featureType": "road", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ]},{ "featureType": "water", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi", "elementType": "geometry.fill", "stylers": [ { "color": "#ebad02" } ]},{ "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#8ca83c" } ]}];



// Grey Scale

var bauhausGrey = [{ "featureType": "road.highway", "stylers": [ { "visibility": "off" } ]},{ "featureType": "landscape", "stylers": [ { "visibility": "off" } ]},{ "featureType": "transit", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.park", "stylers": [ { "visibility": "on" } ]},{ "featureType": "poi.park", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#d3d3d3" }, { "visibility": "on" } ]},{ "featureType": "poi.medical", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.medical", "stylers": [ { "visibility": "off" } ]},{ "featureType": "road", "elementType": "geometry.stroke", "stylers": [ { "color": "#cccccc" } ]},{ "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#cecece" } ]},{ "featureType": "road.local", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#808080" } ]},{ "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#808080" } ]},{ "featureType": "road", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#fdfdfd" } ]},{ "featureType": "road", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ]},{ "featureType": "water", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi", "elementType": "geometry.fill", "stylers": [ { "color": "#d2d2d2" } ]}];



// Black & White

var bauhausBlackWhite = [{ "featureType": "road.highway", "stylers": [ { "visibility": "off" } ]},{ "featureType": "landscape", "stylers": [ { "visibility": "off" } ]},{ "featureType": "transit", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.park", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.park", "elementType": "geometry.fill",  "stylers": [ { "color": "#d3d3d3" }, { "visibility": "on" } ]},{ "featureType": "road", "elementType": "geometry.stroke", "stylers": [ { "visibility": "off" } ]},{ "featureType": "landscape", "stylers": [ { "visibility": "on" }, { "color": "#ffffff" } ]},{ "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#cecece" } ]},{ "featureType": "road", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#000000" } ]},{ "featureType": "road", "elementType": "labels.text.stroke", "stylers": [ { "visibility": "on" }, { "color": "#ffffff" } ]},{ "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#000000" } ]},{ "featureType": "road", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#000000" } ]},{ "featureType": "road", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ]},{ "featureType": "water", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi", "elementType": "geometry.fill", "stylers": [ { "visibility": "off" } ]}];



// Retro

var bauhausRetro = [{ "featureType": "transit", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#d3d3d3" }, { "visibility": "on" } ]},{ "featureType": "road", "elementType": "geometry.stroke", "stylers": [ { "visibility": "off" } ]},{ "featureType": "landscape", "stylers": [ { "visibility": "on" }, { "color": "#eee8ce" } ]},{ "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#b8cec9" } ]},{ "featureType": "road", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#000000" } ]},{ "featureType": "road", "elementType": "labels.text.stroke", "stylers": [ { "visibility": "off" }, { "color": "#ffffff" } ]},{ "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#000000" } ]},{ "featureType": "road", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#ffffff" } ]},{ "featureType": "road", "elementType": "geometry.stroke", "stylers": [ { "visibility": "off" } ]},{ "featureType": "road", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ]},{ "featureType": "water", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi", "elementType": "geometry.fill", "stylers": [ { "color": "#d3cdab" } ]},{ "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#ced09d" } ]},{ "featureType": "poi", "elementType": "labels", "stylers": [ { "visibility": "off" } ]}];



// Night

var bauhausNight = [{ "featureType": "landscape", "stylers": [ { "visibility": "off" } ]},{ "featureType": "transit", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.park", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#d3d3d3" }, { "visibility": "on" } ]},{ "featureType": "road", "elementType": "geometry.stroke", "stylers": [ { "visibility": "off" } ]},{ "featureType": "landscape", "stylers": [ { "visibility": "on" }, {  "hue": "#0008ff" }, { "lightness": -75 }, { "saturation": 10 } ]},{ "elementType": "geometry.stroke", "stylers": [ { "color": "#1f1d45" } ]},{ "featureType": "landscape.natural", "stylers": [ { "color": "#1f1d45" } ]},{ "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#01001f" } ]},{ "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#e7e8ec" } ]},{ "elementType": "labels.text.stroke", "stylers": [ { "visibility": "on" }, { "color": "#151348" } ]},{ "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#f7fdd9" } ]},{ "featureType": "administrative", "elementType": "labels.text.stroke", "stylers": [ { "visibility": "on" }, { "color": "#01001f" } ]},{ "featureType": "road", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#316694" } ]},{ "featureType": "road", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ]},{ "featureType": "water", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi", "elementType": "geometry.fill", "stylers": [ { "color": "#1a153d" } ]}];



// Night Light

var bauhausNightLight = [{"elementType": "geometry", "stylers": [ { "visibility": "on" }, { "hue": "#232a57" } ]},{ "featureType": "road.highway", "stylers": [ { "visibility": "off" } ]},{ "featureType": "landscape", "elementType": "geometry.fill", "stylers": [ { "hue": "#0033ff" }, { "saturation": 13 }, { "lightness":-77 } ]},{ "featureType": "landscape", "elementType": "geometry.stroke", "stylers": [ { "color": "#4657ab" } ]},{ "featureType": "transit", "stylers": [ { "visibility": "off" } ]},{ "featureType": "road", "elementType": "geometry.stroke", "stylers": [ { "visibility": "off" } ]},{ "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#0d0a1f" } ]},{ "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#d2cfe3" } ]},{ "elementType": "labels.text.stroke", "stylers": [ { "visibility": "on" }, { "color": "#0d0a1f" } ]},{ "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#ffffff" } ]},{ "featureType": "administrative", "elementType": "labels.text.stroke", "stylers": [ { "visibility": "on" }, { "color": "#0d0a1f" } ]},{ "featureType": "road", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#ff9910" } ]},{ "featureType": "road.local", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#4657ab" } ]},{ "featureType": "road", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ]},{ "featureType": "water", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi", "elementType": "geometry.fill", "stylers": [ { "color": "#232a57" } ]},{ "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#232a57" } ]},{ "featureType": "poi", "elementType": "labels", "stylers": [ { "visibility": "off" } ]}];



// Papiro

var bauhausPapiro = [{"elementType": "geometry", "stylers": [ { "visibility": "on" }, { "color": "#f2e48c" } ]},{ "featureType": "road.highway", "stylers": [ { "visibility": "off" } ]},{ "featureType": "transit", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.park", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi.park", "elementType": "geometry.fill",  "stylers": [ { "color": "#d3d3d3" }, { "visibility": "on" } ]},{ "featureType": "road", "elementType": "geometry.stroke", "stylers": [ { "visibility": "off" } ]},{ "featureType": "landscape", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#f2e48c" } ]},{ "featureType": "landscape", "elementType": "geometry.stroke", "stylers": [ { "visibility": "on" }, { "color": "#592c00" } ]},{ "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#a77637" } ]},{ "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#592c00" } ]},{ "elementType": "labels.text.stroke", "stylers": [ { "visibility": "on" }, { "color": "#f2e48c" } ]},{ "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#592c00" } ]},{ "featureType": "administrative", "elementType": "labels.text.stroke", "stylers": [ { "visibility": "on" }, { "color": "#f2e48c" } ]},{ "featureType": "road", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#a5630f" } ]},{ "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#592c00" } ]},{ "featureType": "road", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ]},{ "featureType": "water", "elementType": "labels", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi", "elementType": "geometry.fill", "stylers": [ { "visibility": "off" } ]},{ "featureType": "poi", "elementType": "labels", "stylers": [ { "visibility": "off" } ]}];



var BauHaus;


BauHaus = bauhausGrey;



   


 function initMap() {
    // Define the BauHaus map style
    const BauHausstyledMap = new google.maps.StyledMapType(BauHaus, { name: "BauHaus" });

    // Initialize an object to store maps
    const maps = {};

    @foreach($locations as $location)
    {
        let mapContainerId = "map{{$location->id}}";
        let mapContainer = document.getElementById(mapContainerId);

        if (mapContainer) {
            let mapOptions = {
                center: { lat: {{$location->latitude}}, lng: {{$location->longitude}} }, // Coordinates for the location
                zoom: 14,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [{ "color": "#ebe3cd" }]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{ "color": "#523735" }]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{ "color": "#f5f1e6" }]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{ "color": "#c9b2a6" }]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "geometry.fill",
                        "stylers": [{ "color": "#e8e5d0" }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{ "color": "#c9d6d6" }]
                    }
                ]
            };

            // Create the map
            let map = new google.maps.Map(mapContainer, mapOptions);

            // Add the BauHaus styled map type
            map.mapTypes.set('BauHaus_style', BauHausstyledMap);
            map.setMapTypeId('BauHaus_style');

            // Store the map instance in the maps object
            maps[{{$location->id}}] = map;

            // Optional: Add marker (uncomment if needed)
            /*
            const markerIcon = {
                path: 'M19-5C6.866-5-3,4.966-3,17.214c0,2.233,0.332,4.388,0.941,6.419 c2.523,12.103,17.896,30.404,20.013,32.887C18.217,56.827,18.602,57,19,57c0.049,0,0.096,0,0.145-0.007 c0.372-0.04,0.708-0.227,0.935-0.517l0.083-0.104c4.704-5.628,17.608-21.826,19.901-32.761C40.677,21.588,41,19.439,41,17.214 C41,4.966,31.126-5,19-5 M19,26.169c-4.928,0-8.938-4.016-8.938-8.956c0-1.666,0.461-3.236,1.264-4.58 c0.799-1.351,1.947-2.473,3.322-3.237C15.934,8.673,17.425,8.261,19,8.261c1.589,0,3.087,0.419,4.381,1.156 c1.365,0.764,2.508,1.887,3.304,3.237c0.799,1.336,1.255,2.9,1.255,4.559C27.939,22.154,23.929,26.169,19,26.169',
                fillColor: '#ee3127',
                fillOpacity: 1,
                scale: 1,
                anchor: new google.maps.Point(19, 57),
                strokeWeight: 0
            };

            const marker = new google.maps.Marker({
                position: { lat: {{$location->latitude}}, lng: {{$location->longitude}} },
                map: map,
                icon: markerIcon
            });
            */
        }
    }
    @endforeach
}



     //add marker

     
   window.onload = initMap;


 </script>

@endsection