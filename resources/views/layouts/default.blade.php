<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Containit">
  <meta name="author" content="">
  
  <!-- Favicon-->
  <link rel="icon" href="assets/img/favicon.png" type="image/gif" sizes="16x16">
  
  <!-- Title-->
  <title>@yield('title')</title>
  
  <!-- google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  
  <!-- Stylesheet-->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/dist/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/color/default.css')}}" id="theme-color">
  
	<link rel="stylesheet" href="{{asset('assets/css/lightslider.css')}}">
	
  
</head>

<body id="top">
 
 
<!-- LOADER TEMPLATE -->
<div id="page-loader">
  <div class="loader-icon fa fa-spin colored-border"></div>
</div>
<!-- /LOADER TEMPLATE -->  
 
<!-- HEADER TEMPLATE --> 
@include('template.includes.header')
<!-- HEADER TEMPLATE -->

<!-- PAGE CONTENT TEMPLATE -->
@yield('content')
<!-- PAGE CONTENT TEMPLATE -->

<!-- FOOTER TEMPLATE -->
@include('template.includes.footer')
<!-- FOOTER TEMPLATE -->


<!-- scripts-->
<!-- scripts-->
<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.maskedinput.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/dist/js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendor/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/vendor/instafeed.js/instafeed.min.js')}}"></script>
<script src="{{asset('assets/vendor/tweetie-master/tweetie.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-validator-master/dist/validator.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/parallax.js')}}"></script>
<script src="{{asset('assets/js/easing.js')}}"></script>
<script src="{{asset('assets/js/count.js')}}"></script>
<script src="{{asset('assets/js/beborn.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?&key=AIzaSyB0uuKeEkPfAo7EUINYPQs3bzXn7AabgJI"></script>
<script src="{{asset('assets/js/validate.js')}}"></script>

<script src="{{asset('assets/js/lightslider.js')}}"></script>
<script>
    	 $(document).ready(function() {
			
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
		});
    </script>


<script>
/*
====================
 Google map initialize
==================== 
*/
function initMap(){
  
var myLatlng = new google.maps.LatLng(-37.817250, 144.959798);
  
var mapOptions = {
    zoom: 12,
    center: myLatlng,
    mapTypeId: 'roadmap',
    zoomControl: false,
    scrollwheel: false,
    styles:[
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#bdbdbd"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#dadada"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#c9c9c9"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            }
        ],
};
  
var map = new google.maps.Map(document.getElementById('location-map'),mapOptions);

// Map marker
var marker = new google.maps.Marker({
    position: mapOptions.center,
    icon: 'assets/img/map-marker.png',
    map:map
  });
  
}
  
initMap();
  
</script>
</body>
</html>