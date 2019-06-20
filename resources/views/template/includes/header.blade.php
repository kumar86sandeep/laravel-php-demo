<?php  if (Route::getCurrentRoute()->uri() == '/'){ ?> 
@include('template.includes.navigation')
  
  @if (session('message'))
    <div class="msg_print"  id="success-alert">
		<div align="center" class="message alert alert-success ">
			<button type="button" class="close" data-dismiss="alert">x</button>
			<strong>Success! </strong>
			{{ session('message') }}
		</div>
	</div>
	
@endif

 <header id="intro-hero" class="fullscreen" style="background:url(assets/img/intro-bg4.jpg) no-repeat; background-size: cover;"> 

	<!--<div class="testimonial-slides hero-slider owl-carousel ">
         
          
            
            <div class="hero-inner ">
				<div class="left-hero">
					<h1 class="hero-title">20' Container</h4>
					<p class="hero-tagline">
					A standard 20' container is the most popular of all.
					</p>
					<a href="javascript:void(0)">View details</a>
				</div>
				<div class="right-hero"><img src="assets/img//product/1.png"  alt=""></div>
            </div>
          
          
          <div class="hero-inner ">
			<div class="left-hero">
				<h1 class="hero-title">40' Container</h4>
				<p class="hero-tagline">
				40ft Containers are considered within the industry as the standard shipping container .
				</p>
				<a href="javascript:void(0)">View details</a>
			</div>
			<div class="right-hero"><img src="assets/img//product/2.png"  alt=""></div>
          </div> 
          		  
          <div class="hero-inner ">
			<div class="left-hero">
				<h1  class="hero-title">45' Container</h4>
				<p class="hero-tagline">
				Efficient Cargo transportation, Potentially Low Cost transportation
				</p>
				<a href="javascript:void(0)">View details</a>
			</div>
			<div class="right-hero"><img src="assets/img//product/3.png"  alt=""></div>
          </div>
		  
		  
          <div class="hero-inner ">
			<div class="left-hero">
				<h1 class="hero-title">Rent or Buy.</h4>
				<p class="hero-tagline">
				Rent or Buy: We have you covered. Explore our range of New or used containers.
				</p>
				<a href="javascript:void(0)" href="javascript:void(0)" data-toggle="modal" data-target="#getQuote">Get Quote</a>
			</div>
			<div class="right-hero"><img src="assets/img//product/4.png"  alt=""></div>
          </div> 
		
          
        </div> -->
 
 
    <div class="container">
      <div class="row">
        <div class="col-lg-9 m-auto hero-content text-dark text-center bg-white shadow-true p-4 rounded">
           <h4 class="hero-title">Do You Need To Buy Or Rent A Shipping Or Storage Container?</h4>
           <p class="hero-tagline mob-dis-none">
            Just enter your email address in the form below for a free quote!
           </p>
           <p class="hero-tagline mob-dis-block">
            Just Click The Button Below To Call Us For A Free Quote
           </p>
           
		   <form method="post" action="{{url('template/contactUs')}}" id="contactUs" class="registration-form rego">
			{{ csrf_field() }}
             <div class="row">
               <!-- <div class="col-sm-6">
                 <div class="form-group has-error has-danger">
                   <input type="text" class="form-control" placeholder="Full name" required="">
                 </div>
               </div> -->
               <div class="col-sm-12">
                 <div class="form-group">
                   <input type="email" class="form-control" placeholder="Email Address" id="contactus_email" name="contactus_email">
                 </div>
               </div>
               <!--<div class="col-sm-12">
                 <div class="form-group">
                   <textarea class="form-control" id="header-textarea" name="header-textarea" placeholder="Details" rows="8" ></textarea>
                 </div>
               </div>-->
               <div class="col-sm-12">
                 <div class="form-group">
                   <input type="submit" class="btn btn-block btn-theme" value="Yes, Give Me My Free Quote!">
                 </div>
               </div>
               <!--<div class="col-sm-12">
                 <small>We won't spam you. we only send our hottest offer for you.</small>
               </div>-->
             </div>
           </form> 
		   
		   <a class="call-us-mob" href="tel:317-409-9000">Call Us For A Free Quote</a>
		   
        </div> <!-- END col-lg-6 -->
      </div> <!-- END row-->
    </div> <!-- END container-->
 </header> 
<?php }else{ ?>

	@include('template.includes.navigation_inner')
  
	  @if (session('message'))
		<div class="msg_print"  id="success-alert">
			<div align="center" class="message alert alert-success ">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>Success! </strong>
				{{ session('message') }}
			</div>
		</div>
		
	@endif

	<header id="intro-hero" class="fullscreen inner_header"> 
	</header> 
	
<?php } ?>