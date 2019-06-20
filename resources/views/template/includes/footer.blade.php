<!--<div id="location-map" style="width:100%; height:450px;"></div>-->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="footer-widget">
            <h4>Company Info</h4>
            <address class="contact-address">
			  <!--<p>Address : PO Box 16122 Collins Street West, Victoria 8007 Australia</p>-->
			  <p>Email : <a href="mailto:jefflongsworth@containit.info">jefflongsworth@containit.info</a></p>
			 <p>Phone :<a href="tel:317-409-9000">317-409-9000</a></p>
			</address>
			<!--<div class="social">
			 <ul class="list-inline">
			   <li class="list-inline-item">
				 <a href=""><i class="fa fa-facebook"></i></a>
			   </li>
			   <li class="list-inline-item">
				 <a href=""><i class="fa fa-twitter"></i></a>
			   </li>
			   <li class="list-inline-item">
				 <a href=""><i class="fa fa-google-plus"></i></a>
			   </li>
			   <li class="list-inline-item">
				 <a href=""><i class="fa fa-pinterest-p"></i></a>
			   </li>
			 </ul>
			</div> -->
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="footer-widget">
            <h4>Locations</h4>
			<ul>
              <li>Nashville</li>
                <li>Lebanon</li>
                <li>Carthage</li>
              <li>Cookeville</li>
              <li>Crossville</li>
              <li>Gainesboro</li>
              <li>Livingston</li>
              <li>Rickman</li>
            </ul>
            
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="footer-widget">
            <h4>Menu</h4>
			<?php  if (Route::getCurrentRoute()->uri() == '/'){ ?> 
				<ul>
				  <li><a class="scrolling" href="#intro-hero">Home</a></li>  
				  <li><a class="scrolling" href="#faq">FAQ</a></li>
				  <li><a class="scrolling" href="{{url('/about-us/')}}">About Us</a></li>
				  <li><a class="scrolling" href="{{url('/about-us/#contactUs')}}">Contact Us</a></li>
				  
				</ul>
			<?php }else{ ?>
				<ul>
				  <li><a class="scrolling" href="{{url('/#intro-hero')}}">Home</a></li>  
				  <li><a class="scrolling" href="{{url('/#faq')}}">FAQ</a></li>
                    <li><a class="scrolling" href="{{url('/about-us/')}}">About Us</a></li>
				  <li><a class="scrolling" href="{{url('/about-us/#contactUs')}}">Contact Us</a></li>
				</ul>

			<?php } ?>
          </div>
        </div>
        
      </div> <!-- END row-->
    </div> <!-- END container-->
  </div> <!-- END footer-top-->
  

  <div class="footer-bottom">
    <p>Copyright 2019 Containit</p>
  </div>
</footer> <!-- END footer-->

<div id="getQuote" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">        
        <h4 class="modal-title">Get a Free quote</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
		<form method="post" action="{{url('template/getQuote')}}" id="popupGetQuoteForm" class="contact-form">
		 {{ csrf_field() }}

		  <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control" id="getquote_first_name_popup" name="getquote_first_name" placeholder="First Name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
				<input type="text" class="form-control" id="getquote_last_name_popup" name="getquote_last_name" placeholder="Last Name">       
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input type="email" class="form-control" id="getquote_email_popup" name="getquote_email" placeholder="Email">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" class="form-control" id="getquote_phone_popup" name="getquote_phone" placeholder="Phone">
              </div>
            </div>
			<div class="col-sm-12">
              <div class="form-group">
                <select id="getquote_containertype_popup" name="getquote_containertype" class="form-control getquoteselect getquote_containertype">
				  <option value="">Container type</option>
				  <option value="20' Container">20' Container</option>
				  <option value="40' Container">40' Container</option>
				  <option value="45' Container">45' Container</option>
				  <option value="53' Container">53' Container</option>
				  <option value="Custom Size Container">Custom Size</option>
				</select>
              </div>
            </div>
          </div> 
          
          <input type="submit" class="btn btn-block btn-theme" value="Submit">
        </form>
       <?php /*  <form method="post" action="{{url('template/getQuote')}}" id="getQuoteForm" class="contact-form">
			{{ csrf_field() }}
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control getquoteinput" id="getquote_name" name="getquote_name" placeholder="Name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="email" class="form-control getquoteinput" id="getquote_email" name="getquote_email" placeholder="Email">                
              </div>
            </div>
          </div> <!-- END row-->
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control getquoteinput" id="getquote_phone" name="getquote_phone" placeholder="Phone">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <select id="getquote_condition" name="getquote_condition" class="form-control getquoteselect">
				  <option value="">Select condition</option>
				  <option value="New">New</option>
				  <option value="Used">Used</option>
				</select>
              </div>
            </div>
          </div> <!-- END row-->
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <select id="getquote_mefor" name="getquote_mefor" class="form-control getquoteselect">
				  <option value="">Quote me for</option>
				  <option value="Rent">Rent</option>
				  <option value="Buy">Buy</option>
				  <option value="Rent to Own">Rent to Own</option>
				</select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <select id="getquote_containertype" name="getquote_containertype" class="form-control getquoteselect getquote_containertype">
				  <option value="">Container type</option>
				  <option value="20' Container">20' Container</option>
				  <option value="40' Container">40' Container</option>
				  <option value="45' Container">45' Container</option>
				  <option value="53' Container">53' Container</option>
				  <option value="Custom">Custom size - Mention in notes</option>
				</select>
              </div>
            </div>
          </div> <!-- END row-->
            <div class="form-group">
              <textarea class="form-control getquotetextarea" id="getquote_notes" name="getquote_notes" placeholder="Additional notes" rows="5"></textarea>
            </div>
          <input type="submit" class="btn btn-block btn-theme butn-main" type="submit" value="Submit">
        </form> */ ?>
      </div>      
    </div>

  </div>
</div>

<div class="scroll-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

