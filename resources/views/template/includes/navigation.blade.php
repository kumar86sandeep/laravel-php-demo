<nav class="main-nav navbar navbar-expand-lg fixed-top navbar-light">
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{asset('assets/img/final-logo.png')}}" alt="ContainIt">
    </a>
	
	<div class="header-phn">Call Us For A Free Quote: <a href="tel:317-409-9000">317-409-9000</a></div>
	

	
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark scrolling" href="#intro-hero">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark scrolling" href="{{url('/about-us')}}">About Us</a>
        </li>
		<?php /* <li class="nav-item dropdown">
          <a href="javascript:void(0)" class="nav-link text-dark scrolling dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Rent Container</a></li>
            <li><a href="#">Buy Container</a></li>
            <li><a href="#">Rent-to-Own</a></li>
          </ul>
        </li> */ ?>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link text-dark scrolling dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/products/20-ft-container')}}">20' Containers</a></li>
            <li><a href="{{url('/products/40-ft-container')}}">40' Containers</a></li>
            <li><a href="{{url('/products/45-ft-container')}}">45' Containers</a></li>
            <li><a href="{{url('/products/53-ft-container')}}">53' Containers</a></li>
            <li><a href="{{url('/products/custom-size-container')}}">Custom Size Containers</a></li>
          </ul>
        </li>
		<?php 
		/* <li class="nav-item">
          <a class="nav-link text-dark scrolling" href="javascript:void(0)" data-toggle="modal" data-target="#getQuote">Get A Quote</a>
        </li> */ ?>
		<li class="nav-item">
          <a class="nav-link text-dark scrolling" href="#contact">Get A Quote</a>
        </li>        
        <?php /* <li class="nav-item">
          <a class="nav-link text-dark scrolling" href="#testimonials">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark scrolling" href="#team">Team</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-dark scrolling btn-call-to-action" href="#contact">Buy now</a>
        </li> */ ?>
      </ul>
    </div>
  </nav>