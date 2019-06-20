@extends('layouts.default')
@section('title','Containit: 40 Container')
@section('content')

	<div class="faqs-block prodc-in" id="faqs-block">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="inner-hdgs">Know Everything About Our 40' Container</h2>
				</div>	
			</div>
			
			
			<div class="row">
				<div class="col-md-6">
				
					<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
						<li data-thumb="{{asset('assets/img/product-detail/40-foot-1.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/40-foot-1.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/40-foot-2.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/40-foot-2.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/40-feet5.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/40-feet5.jpg')}}" />
						</li>
						<li data-thumb="{{asset('assets/img/product-detail/40-feet-highcube.jpg')}}"> 
							<img src="{{asset('assets/img/product-detail/40-feet-highcube.jpg')}}" />
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
						<input type="text" value="40' Container" id="getquote_containertype" name="getquote_containertype" class="form-control" readonly>
					  </div>
				  
					<input type="submit" class="btn btn-block btn-theme" value="Get A Free Quote">
					</form>
						
				</div>
			</div>
			
			
			<div class="row prod-features">
				<div class="plan-feature col-md-6">
					<ul>
					  <li><i class="fa fa-check"></i> 40 FT Long</li>
					  <li><i class="fa fa-check"></i> 8 FT Wide</li>
					  <li><i class="fa fa-check"></i> 8.5 FT High (external)</li>
					  <li><i class="fa fa-check"></i> Wind and Watertight</li>
					  <li><i class="fa fa-check"></i> Constructed from High-Quality cor-ten steel</li>
					  <li><i class="fa fa-check"></i> Sold in New Condition</li>
					  
					</ul>
				</div>
				<div class="plan-feature col-md-6">
					<ul>
					  <li><i class="fa fa-check"></i> Available for Delivery</li>
					  <li><i class="fa fa-check"></i> Available for pickup from our depots</li>
					  <li><i class="fa fa-check"></i> Conversion work available on request</li>
					  <li><i class="fa fa-check"></i> Internal hardwood flooring</li>
					  <li><i class="fa fa-check"></i> Fitted with a lock-box as standard</li>
					  <li><i class="fa fa-check"></i> External colour may vary</li>
					</ul>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<p>40 ft container dimension offer double capacity as compared to a 20 ft container, and costs just 15-25% more than that. It makes the 40 footer, the most cost-efficient shipping container for goods carriage by ship. There are two types in 40' container: <br>a) Standard height <br>b) High Cube Height</p>
					<p>Typical dimensions of 40' containers are:</p>
					<div class="plan-feature col-md-12">
						<ul>
						  <li><i class="fa fa-check"></i> Exterior 40’L x 8’W x 8’6″ H</li>
						  <li><i class="fa fa-check"></i> Interior 39’5″L x 7’8″W X 7’10″H</li>
						  <li><i class="fa fa-check"></i> Tare Weight 8.160 lb</li>
						</ul>
					</div>
					
					<p><b>40' High Cube dimentions:</b></p>
					<div class="plan-feature col-md-12">
						<ul>
						  <li><i class="fa fa-check"></i> Exterior 40’L x 8’W x 9’6″ H</li>
						  <li><i class="fa fa-check"></i> Interior 39’5″L x 7’8″W X 8’10″H</li>
						  <li><i class="fa fa-check"></i> Tare Weight 8,750 lb</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p>40ft Containers are considered within the industry as the standard shipping container sizes, these new units are manufactured using high-quality corten steel which is corrosion resistant and designed to stand up to the harsh rigours of sea conditions. Heavy duty corrosion resistant steel makes these units cargo worthy for as long as possible. On top of this, the containers are also painted to protect the steel as much as possible and extend the containers lifespan.</p>
					<p>Internal flooring is formed from 27mm heavy duty hardwood. The external paint colour is usually green or blue, but may vary, if you need a specific colour please let our sales team know when you make your enquiry.</p>
					<p>New 40-foot containers are ideal for secure storage - they are wind and watertight and have good quality door seals to provide an ideal storage environment. If you're looking for 66.83m3 of secure storage, we have it !</p>
					
					<h3>Refurbished Containers: </h3>
					<p>Sold in Good Used Condition, Typically 10 - 15 years old</p>
					<p>40ft units have many uses, as with smaller sized containers they are ideal for on-site storage or goods transportation. 40ft's are also becoming increasingly popular as a base construction material in many construction projects - so if you're looking for a 40ft steel shipping container for a conversion project such as a home or swimming pool look no further.</p>
					<p>A used 40ft shipping container should last you 20 years plus, with a little maintenance. This is down to the exterior material; shipping containers are manufactured from a high-quality corten steel. Cor-ten steel is a heavy duty, weathering, corrosion resistant steel which is ideal to withstand the harsh rigours of sea conditions.</p>
					<p>When we first receive a used/second-hand shipping container at one of our depots, they are inspected to ensure that they are fully wind and water tight; and are up to cargo worthy industry standard. The double doors will be inspected to make sure they are fully operational and that the seals that run around the double doors are fully intact to prevent any water ingress. The flooring of a shipping container is made from hardwood.</p>
					<p>Our used 40ft shipping containers will be typically 10-15 years old from the date it was manufactured. They are usually used to transport cargo across seas for 10 years by leasing companies before being released for sale second hand.</p>
					<p>Our 40ft used containers are usually picked from our depots on a "next in-line" basis, so the external colour will be a generic shipping line colour, which may vary.</p>
					<p>If you require your used shipping container for shipping overseas, then we can update the details on the CSC plate.(Please advise us if this is a requirement at the time of order)</p>
					
				</div>
			</div>
			
			
		</div>


	</div><!--//products-block-->

@endsection