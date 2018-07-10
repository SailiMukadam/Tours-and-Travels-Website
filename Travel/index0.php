<!DOCTYPE html>
<html lang="en">
<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>My New Pen!</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!--  Styles  -->
  <link rel="stylesheet" href="styles/index.processed.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- navigation Bar-->
	<div class="nav">
  <div class="logo">
    <img src="https://imgak.mmtcdn.com/hcs/assets/img/mmtlogo.png" >
  </div>
			<a href="packages.php">Packages</a>
			<a href="#">Reviews</a>
			<a href="#">FAQ</a>
			<a href="#">Contact Us</a>
		<!-- Button trigger modal -->
        <?php
            session_start();
         if(isset($_SESSION['login'])): ?>
            <a href="model/login.php"><button class='btn btn-primary'>Logout
            </button></a>
    <?php else: ?>
            <a href="#"><button class='btn btn-primary' data-toggle="modal" data-target="#loginModal">Login</button></a>
        <?php  endif; ?>
	</div>

	<!-- Modal Login Form -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Login</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<form action="model/login.php" action="GET" class='form-group'>
					<label>Name</label>
					<input type='text' name='name' placeholder='Rahul Singh' class='form-control'></input>
				<label>Password</label>
					<input type='password' name='password' placeholder='abc' class='form-control'></input>
			<button type='submit'class='btn btn-success btn-block'>Login</button>
			<div class='row'>
				<div class='col-md-6'>
					<a href='form.php'>New User?</a></div>
				<div class='col-md-6'>
					<a href='#'>Forgot Password?</a></div>
			</div>
				</form>
      </div>
    </div>
  </div>
</div>
	 <!--  End Modal Form  -->

 <!--  Slider  -->
 <div class="slideshow">
  <div class="slides">
   <img src="http://berg.maskandesign.com/html/images/hotel1.jpg" alt="hotel1">
   <div class="intro">
    <h1><span>I CAN'T IMAGINE A BETTER HOTEL</span></h1>
    <p class="line2">This is simply the best hotel you Can imagine. Everybody is so friendly and unbelievable friendly</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
   </div>
  </div>
  <div class="slides">
   <img src="http://berg.maskandesign.com/html/images/hotel2.jpg" alt="hotel2">
  <div class="intro right-align">
   <h1><span>Magic Stay in London</span></h1>
		<p class="line2">Just spent a magical 4 days in London at Hotel 41</p>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
	 </div>
	  <a href="#welcome" class="down text-center"><i class="fa fa-angle-down fa-3x" aria-hidden="true"></i></a>
	 <a href="#welcome" class="right text-center"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></a>
	 <a href="#welcome" class="left text-center"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></a>
	</div>

 <!--  Image Gallery  -->
	<h1> Our Services</h1>
	<div id="ourServices">
			 <div class="box"><img src="http://berg.maskandesign.com/html/images/exc.jpg" alt="">
				 <div class="upper-layer">The berg excursions</div>
			 </div>
			 <div class="box"><img src="http://berg.maskandesign.com/html/images/room.jpg" alt=""></div>
			 <div class="box"><img src="http://berg.maskandesign.com/html/images/hotel_m9.jpg" alt=""></div>
			 <div class="box"><img src="http://berg.maskandesign.com/html/images/pool.jpg" alt=""></div>
	<div>

		 <!--  Company Introduction  -->
		<div id="welcome">
			<div class="intro">
			<h1>ABOUT US</h1>
			<p>Product Offering</BR>
Flights, Flight+Hotel Deals, International Flights, Hotels, International Hotels, Holidays in India,International Holidays, Cabs, Cheap Tickets to India, Bus Tickets, Rail, Route Planner, Flight Status, Mobile Apps About Us, Investor Relations, Testimonial, Reviews, Careers, Corporate Travel, Travel Guide, Travel Blog, Offers, Gift Vouchers, MakeMyTrip Coupons, My Trip Essentials, Deals, Stories, Trip Planner</BR></BR>
About the Site</br>
Complaints, Contact Us, Payment Security, Privacy Policy, User Agreement, Visa Information, More Offices, File Rail TDR, Make A Payment, Submit Account Details, Report a defect/MMT Bug Bounty</br></br>
Partner Programs</br>
Our Retail Stores, Franchise Program Details, Foreign Exchange, Apollo Munich – Travel Insurance, List your hotel</br></br>
More Links<br>
Low Budget Holidays, Delhi Mumbai Flights, Domestic Airlines, International Airlines, Indigo, Spicejet, Jet Airways, Air Asia, Delhi Hotels, Mumbai Hotels, Honeymoon Packages, Singapore Tours, Indian Railways, Kesineni Travels, Neeta Travels, RSRTC, Goa Packages, Thailand Packages
</p>
			</div>
			<div class="img">
				<img src="http://berg.maskandesign.com/html/images/businessman.png" alt="">
			</div>
		</div>

		 <!--  Book Tickets Form . Allows if and only if user id logged in  -->
         <form class="" action="model/redirect.php" method="get">
    		<div class="book-now text-left">
    			<div class="row">
    					<div class="col-md-3">
    						<label>Arrival</label>
    						<input type="date" value="" name='arrival' class="form-control">
    					</div>
    					<div class="col-md-3">
    						<label>Departure</label>
    						<input type="date" value="" name='departure' class="form-control">
    					</div>
    						<div class="col-md-2">
    						<label>Adult</label>
    						<select class="form-control" name='adults'>
    							<option>1</option>
    							<option>2</option>
    							<option>3</option>
    						</select>
    					</div>
    					<div class="col-md-2">
    						<label>Child(3-12)</label>
    						<select class="form-control" name='children'>
    							<option>None</option>
    							<option>1</option>
    							<option>2</option>
    							<option>3</option>
    						</select>
    					</div>
    					<div class="col-md-1">
                                <button type="submit" class="form-control" name="submit">SEND</button>
    					</div>
    			</div>
    		</div>
            </form>

		 <!--  Footer  -->
		<div class="footer">
			<div>

           Why MakeMyTrip?</br>
           The leading player in online flight bookings in India, MakeMyTrip offers great offers, some of the lowest  airfares, exclusive discounts
           and a seamless online booking experience. Flight, hotel and holiday bookingsthrough the desktop or mobile site is a delightfully customer
           friendly experience, and with just a few clicks you can complete your booking. With features like Instant Discounts, Fare Calendar, MyRewards
           Program, MyWallet and many more, the overall booking experience with MakeMyTrip constantly adds value to its product and continues to offer
           the best to its customers.

			</div>

			<div class="footer-end">
				<div class="social">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
</body>
		 <!--  Load javascript file after the page loads  -->
  <script src="scripts/index.js"></script>
</html>
