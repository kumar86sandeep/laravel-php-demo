@extends('layouts.default')
@section('title','Containit: About Us')
@section('content')

            <div class="faqs-block" id="faqs-block">
			
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 about-bann">
							<h1 class="block-heading text-center">About ContainIt Inc.</h2>
						</div>
					</div>
				</div>
			
				<div class="container abt-page">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<img class="about_us_img" src="{{asset('assets/img/product/containers.jpg')}}" alt="">
						</div>
						<div class="col-md-6 col-sm-12 about_us_p">
							<p>ContainIt Inc. helps customers buy & rent shipping containers throughout the United States. Based in Tennessee, with our other locations in Nashville, Lebanon, Carthage, Cookeville, Crossville, Gainesboro, Livingston and Rickman. We're one of the prominent suppliers of shipping containers in North America and we've helped thousands of businesses and private individuals buy & rent containers.</p>
							<p>We have a few of our containers located throughout Middle Tennessee in locations near you. Not all sizes are available at all locations so if you don’t see what you are looking for, give us a call. Have questions about our delivery service, call us and we will be happy to give you an estimate.</p>
							<p>Whether you need two containers or 100, we leverage our relationships with ContainIt Inc. providers and shipping lines to help our customers purchase New or Used shipping containers at wholesale prices in their market.</p>
						</div>
					</div>
					
					<div class="row" id="contactUs">
						<div class="col-md-12 ml-lg-auto">
	  
							<div class="col-sm-12 text-center">
							<h2 class="section-title">Get In Touch</h2>
							
						  </div>
						  
							
							<form method="post" action="{{url('template/getQuote')}}" id="getContactUs" class="contact-form">
							{{ csrf_field() }}

							  <div class="row">
								<div class="col-sm-6">
								  <div class="form-group">
									<input type="text" class="form-control" id="getquote_first_name" name="getquote_first_name" placeholder="First Name">
								  </div>
								</div>
								<div class="col-sm-6">
								  <div class="form-group">
									<input type="text" class="form-control" id="getquote_last_name" name="getquote_last_name" placeholder="Last Name">       
								  </div>
								</div>
								<div class="col-sm-12">
								  <div class="form-group">
									<input type="email" class="form-control" id="getquote_email" name="getquote_email" placeholder="Email">
								  </div>
								</div>
								<div class="col-sm-12">
								  <div class="form-group">
									<input type="text" class="form-control" id="getquote_interested_in" name="getquote_interested_in" placeholder="Interested In">   
								  </div>
								</div>
								<div class="col-sm-12">
								  <div class="form-group">
									<textarea class="form-control" id="getquote_message" name="getquote_message" placeholder="Message" rows="5" ></textarea>
								  </div>
								</div>
								
							  </div> 
							  
							  <input type="submit" class="btn btn-block btn-theme" value="Submit">
							</form>
						  </div> <!-- END col-md-6 col-md-offset-1-->
					</div>
				</div>
            </div><!--//faqs-block-->
			
			
			
			

@endsection