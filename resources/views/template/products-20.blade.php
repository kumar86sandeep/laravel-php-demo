@extends('layouts.default')
@section('title','Containit: 20 Container')
@section('content')

	<div class="faqs-block prodc-in" id="faqs-block">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="inner-hdgs">Know Everything About Our 20' Container</h2>
				</div>	
			</div>
			
			
			<div class="row">
				<div class="col-md-6">
				
					<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
						<li data-thumb="{{asset('assets/img/product-detail/20-foot-1.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/20-foot-1.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/20-foot-2.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/20-foot-2.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/20-foot-3.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/20-foot-3.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/20-foot-4.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/20-foot-4.jpg')}}" />
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
						<input type="text" value="20' Container" id="getquote_containertype" name="getquote_containertype" class="form-control" readonly>						  
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
					<p>As of today, more than 17 million containers of different dimensions and types are used globally to make container shipping the most efficient method of transportation. These shipping containers are ISO certified, which means that they are brought into business only when they are manufactured and tested as per the specifications provided by the International Organization for Standardization (ISO) to ensure that the goods carried are suitable for multiple transportation modes, i.e. via ship, truck or rail.</p>
					<p>A standard 20' container is the most popular of all and is used by ships of all sizes: Small, Medium & Big. The 20 ft container dimensions are as follows:</p>
					<div class="plan-feature col-md-12">
						<ul>
						  <li><i class="fa fa-check"></i> Exterior: 20’L x 8’W x 8’6″ H</li>
						  <li><i class="fa fa-check"></i> Interior: 19’4″L x 7’8″W X 7’10″H</li>
						  <li><i class="fa fa-check"></i> Tare Weight: 4,916 lb</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p>It can carry the maximum gross weight of 30480 kg / 67200 lbs for general purpose containers and up to 45,000 kg (99,207 lbs) for flatracks.</p>
					<p>A 20 ft reefer container has a payload capacity of 27,400kg</p>
					<p>The normal 20' containers are used to transport general dry commodities where as refrigerator containers are used to move products which require temperature control. An electrical power supply is connected to the refrigeration unit which is fitted in the refrigerated container. The refrigeration unit is arranged in such a way that the external dimensions of the container meet ISO standards and thus fit into the container ship cell guides.</p>
					<p>It can carry the maximum gross weight of 30480kg / 67200lbs for general purpose containers, up to 60,000 kg (123,276 lbs) for Flatracks and 35,000 kg (77,161 lbs) for reefer containers.</p>
					<p>As with standard shipping containers, high-cubes are manufactured using high-quality cor-ten (corrosion resistant tensile stength) steel which is designed to stand up to the harsh rigours of sea conditions. New containers are manufactured in China and have one clean cargo over to the UK before being sold on. This explains the term 'one trip' often used to describe new containers.</p>
					<p>Internal Flooring can vary slightly but is typically formed from hardwood. The external paint colour is usually green or blue, but this may also vary depending on the shipping line - if you need a specific colour please let us know when you inquire.</p>
					<p>If you require your unit for shipping overseas, the initial CSC certification lasts for 5 years from the date of manufacture. The date of manufacture is clearly stated on the CSC plate on the double doors. CSC certification can be updated after this initial 5 year period if required, certification verifies that the containers construction is adequate to transport goods safely and up to a stated weight limit.</p>
					<h3>Refurbished Containers:</h3>
					<p>Sold in Good Used Condition, Typically 10 - 15 years old</p>
					<p>Used 20ft Containers are a great choice if you're looking to convert your container, these 20ft used units are amongst the cheapest shipping containers available - so offer a great price point for starting a conversion project. Used containers are always structurally sound, wind and watertight so provide a great starting point - at a cost-effective price, ideal if you're planning on repainting or cladding your container anyway. If you are looking for someone to complete a bespoke conversion project for you - we also modify 20ft units to specification!</p>
					<p>Used 20ft units are manufactured using high-quality cor-ten steel, which is designed to stand up to the harsh rigours of sea conditions. We would expect a properly maintained used container to last you in excess of 15 years from the date of purchase from us. Our second-hand shipping containers are the double doors will be fully operational and the door seals fully intact to prevent any water ingress. Flooring is formed from hardwood.</p>
					<p>Each container is usually picked from the depot on a 'next in-line' basis, so the external paint colour of each unit will vary.</p>
					<h3>Security:</h3>
					<p>To improve the security of your unit we can provide your container with a lock-box (a steel box welded on the double doors to enclose a padlock thus making is less tamper proof) and a high-security padlock. We can also paint the unit and provide many other extras.</p>
				</div>
			</div>
			
			
		</div>


	</div><!--//products-block-->

@endsection