@extends('layouts.default')
@section('title','Containit: 53 Container')
@section('content')

	<div class="faqs-block prodc-in" id="faqs-block">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="inner-hdgs">Know Everything About Our 53' Container</h2>
				</div>	
			</div>
			
			
			<div class="row">
				<div class="col-md-6">
				
					<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
						<li data-thumb="{{asset('assets/img/product-detail/53-Ft-container-2.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/53-Ft-container-2.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/53-Ft-container-3.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/53-Ft-container-3.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/53-Ft-container_insideView.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/53-Ft-container_insideView.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/53-Container.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/53-Container.jpg')}}" />
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
						<input type="text" value="53' Container" id="getquote_containertype" name="getquote_containertype" class="form-control" readonly>						  
					  </div>
				  
					<input type="submit" class="btn btn-block btn-theme" value="Get A Free Quote">
					</form>	
				</div>
			</div>
			
			
			<div class="row prod-features">
				<div class="plan-feature col-md-6">
					<ul>
					  <li><i class="fa fa-check"></i> Secure & Watertight</li>
					  <li><i class="fa fa-check"></i> Ground Level Access</li>
					  <li><i class="fa fa-check"></i> All Steel Construction</li>
					</ul>
				</div>
				<div class="plan-feature col-md-6">
					<ul>
					  <li><i class="fa fa-check"></i> Portable – Move as Needed</li>
					  <li><i class="fa fa-check"></i> Temporary or Permanent Storage</li>
					</ul>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<p>A 53ft shipping container or storage container is considered a High Cube container. High Cube containers dimensions are 9' 6" tall on the exterior. They are 1ft taller than standard height containers. They are also 8ft 6in wide, making them 6in wider than standard containers as well. The container is comprised of 14-gauge corrugated steel panels throughout. It has lockable double doors on one end. It is equipped with hardwood flooring on the interior.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p>Unlike 20ft and 40ft shipping containers | storage containers, 53ft containers are not utilized for international shipping. They are used primarily for domestic over the road and rail service.</p>
					<p>53ft high cube shipping or storage containers are perfect for commercial, industrial and rural storage applications.</p>
					
				</div>
			</div>
			
			
		</div>


	</div><!--//products-block-->

@endsection