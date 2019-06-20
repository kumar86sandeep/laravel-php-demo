@extends('layouts.default')
@section('title','Containit: 20 Container')
@section('content')

	<div class="faqs-block prodc-in" id="faqs-block">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="inner-hdgs">Know Everything About Our Custom Size Container</h2>
				</div>	
			</div>
			
			
			<div class="row">
				<div class="col-md-6">
				
					<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
						<li data-thumb="{{asset('assets/img/product-detail/Custom-1.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/Custom-1.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/Custom-2.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/Custom-2.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/Custom-3.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/Custom-3.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/Custom-4.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/Custom-4.jpg')}}" />
						</li>
						
						
					</ul>
					
				</div>
				<div class="col-md-6">
					<form method="post" action="{{url('template/getQuote')}}" id="getQuoteForm" class="contact-form">
						{{ csrf_field() }}
					  <div class="form-group">
						<input type="text" class="form-control" id="getquote_first_name" name="getquote_first_name" placeholder="First Name">
					  </div>
					
					  <div class="form-group">
						<input type="text" class="form-control" id="getquote_last_name" name="getquote_last_name" placeholder="Last Name">       
					  </div>
					
					  <div class="form-group">
						<input type="email" class="form-control" id="getquote_email" name="getquote_email" placeholder="Email">
					  </div>
					
					  <div class="form-group">
						<input type="text" class="form-control" id="getquote_phone" name="getquote_phone" name="phone" placeholder="Phone">
					  </div>
					
					  <div class="form-group">
						<input type="text" value="Custom size Container" id="getquote_containertype" name="getquote_containertype" class="form-control" readonly>						  
					  </div>
				  
					<input type="submit" class="btn btn-block btn-theme" value="Get A Free Quote">
					</form>	
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-md-12">
					<p>In recent years, shipping containers have evolved to become the building blocks of an entirely new architecture – construction offices, movable food and retail establishments even private homes and residences. ContainIt has leading developing the techniques that are fueling this evolution and we remain one of the most prolific and creative, custom container producer.</p>
					<p>Here is a partial list of container modifications we’ve on offer, and you can see examples in the Gallery. But to make the most of our custom capabilities and craftsmanship, we encourage you to think 'out of the box' and whatever comes to mind, we’re confident to get size produced for you. That’s the Advantage of working with ContainIt!</p>
					<p>Most popular customization requests we get:</p>
					
				</div>
			</div>
			<div class="row">
				<div class="plan-feature col-md-6">
						<ul>
						  <li><i class="fa fa-check"></i> Single Windows / Double window</li>
						  <li><i class="fa fa-check"></i> Rollup Doors</li>
						  <li><i class="fa fa-check"></i> Swinging Doors</li>
						  <li><i class="fa fa-check"></i> Entry Doors</li>
						  <li><i class="fa fa-check"></i> Secured Entry</li>
						  
						</ul>
					</div>
					<div class="plan-feature col-md-6">
						<ul>
						  
						  <li><i class="fa fa-check"></i> HVAC</li>
						  <li><i class="fa fa-check"></i> With custom electrical points</li>
						  <li><i class="fa fa-check"></i> Interior Finishing</li>
						  <li><i class="fa fa-check"></i> Modular Designs</li>
						</ul>
					</div>
			</div>
			
			
		</div>


	</div><!--//products-block-->

@endsection