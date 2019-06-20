@extends('layouts.default')
@section('title','Containit: 45 Container')
@section('content')

	<div class="faqs-block prodc-in" id="faqs-block">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="inner-hdgs">Know Everything About Our 45' Container</h2>
				</div>	
			</div>
			
			
			<div class="row">
				<div class="col-md-6">
				
					<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
						<li data-thumb="{{asset('assets/img/product-detail/45-foot-1.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/45-foot-1.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/45-foot-2.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/45-foot-2.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/45-foot-3.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/45-foot-3.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/45-foot-4.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/45-foot-4.jpg')}}" />
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
						<input type="text" value="45' Container" id="getquote_containertype" name="getquote_containertype" class="form-control" readonly>
					  </div>
				  
					<input type="submit" class="btn btn-block btn-theme" value="Get A Free Quote">
					</form>
						
				</div>
			</div>
			
			
			<div class="row prod-features">
				<div class="plan-feature col-md-6">
					<ul>
					  <li><i class="fa fa-check"></i> Constructed from High-Quality cor-ten steel</li>
					  <li><i class="fa fa-check"></i> Wind and Watertightr</li>
					  <li><i class="fa fa-check"></i> Sold in New Condition</li>
					  <li><i class="fa fa-check"></i> Available for Collection from our depots</li>
					</ul>
				</div>
				<div class="plan-feature col-md-6">
					<ul>
					  <li><i class="fa fa-check"></i> Fitted with a secure lock-box as standard</li>
					  <li><i class="fa fa-check"></i> Bespoke conversion work available on request</li>
					  <li><i class="fa fa-check"></i> Internal hardwood flooring</li>
					  <li><i class="fa fa-check"></i> External colour may vary</li>
					</ul>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<p>45 ft containers provide slightly better cubic feet capacity than a 40 ft container giving valuable extra space to the shipper giving the major advantages as:</p>
					<div class="plan-feature col-md-12">
						<ul>
						  <li><i class="fa fa-check"></i> Efficient Cargo transportation</li>
						  <li><i class="fa fa-check"></i> Potentially Low Cost transportation</li>
						</ul>
					</div>
					<p>The payload capacity of 45 ft container is almost similar to a 40 ft container:</p>
					<div class="plan-feature col-md-12">
						<ul>
						  <li><i class="fa fa-check"></i> Length : 13.71 Mtr</li>
						  <li><i class="fa fa-check"></i> Width : 2.44 Mtr</li>
						  <li><i class="fa fa-check"></i> Standard Height : 2.59 Mtr</li>
						  <li><i class="fa fa-check"></i> High Cube Height : 2.89 Mtr</li>
						</ul>
					</div>
					
					<p>With an additional foot of height, the high cube container is perfectly suited for taller items. This unit is also commonly used to create container homes, on construction sites to store large equipment and materials and also for private storage and shipping purposes.</p>
					
					<p>The above specifications are a representation of the commonly used containers. Specific container dimensions and capacity the ISO containers may vary.</p>
				</div>
			</div>
			
			
			
		</div>


	</div><!--//products-block-->

@endsection