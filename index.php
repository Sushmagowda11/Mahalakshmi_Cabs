	<?php include ('includes/header.php');?>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkZ5uIR0UKffQOmfPbIR6j0iEPe1BrOSA&libraries=places"></script>

	<!-- hs Slider Start -->
	<div class="slider-area float_left" id=""><!-- id="home" -->
		<div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-captions caption-1">
						<div class="container">
							<div class="row">
								<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12   d-lg-block d-xl-block">
									<div class="content_tabs">
										<form action="search.php" method="post">
										<div class="row">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

												<div class="x_offer_tabs_wrapper">
													<ul class="nav nav-tabs">
														<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home"> ONEWAY TRIP</a>
														</li>
														<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu1"> ROUND TRIP</a>
														</li>
													</ul>
												</div>
												<div class="tab-content">
													<div id="home" class="tab-pane active">
														<div class="x_slider_form_main_wrapper float_left" >
															<div class="x_slider_form_heading_wrapper float_left">
																<h3>Let’s find your perfect car</h3>
															</div>
															<form action="search.php" method="post">
															<div class="row">
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>NAME</h3>
																		<input type="text" placeholder="Enter your Name" name="name" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>CONTACT NO</h3>
																		<input type="tel" maxlength="10" placeholder="Enter mobile number" name="number" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>Email Id</h3>
																		<input type="email" placeholder="info@gmail.com" name="email" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>Pick-up Location</h3>
																		<input type="text" placeholder="City, Airport, Station, etc." name="fromlocation" id="searchlocation1" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>Drop-off Location</h3>
																		<input type="text" placeholder="City, Airport, Station, etc." name="tolocation" id="searchlocation2" required>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-sec-header">
																		<h3>Pick-up Date</h3>
																		<label class="cal-icon">Pick-up Date
																			<input type="text" placeholder="Select Date" class="form-control datepicker" name="reservation_date" required>
																		</label>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-sec-header">
																		<h3>Pick-up Time</h3>
																		
																		<input type="time" name="reservation_time" required>
																	</div>
																</div>
																
																
																
																<div class="col-md-12">
																	<div class="x_slider_checkbox_bottom float_left">
																	
																		<div class="x_slider_checout_right">
																			<ul>
																				<li><button type="submit" name="oneway">Book Now</button>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</form>
														</div>
													</div>
													<div id="menu1" class="tab-pane fade">
														<div class="x_slider_form_main_wrapper float_left" >
															<div class="x_slider_form_heading_wrapper float_left">
																<h3>Let’s find your perfect car</h3>
															</div>
															<form action="search.php" method="post">
															<div class="row">
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>NAME</h3>
																		<input type="text" placeholder="Enter your Name" name="name" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>CONTACT NO</h3>
																		<input type="tel" maxlength="10" placeholder="Enter mobile number" name="number" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>Email Id</h3>
																		<input type="email" placeholder="info@gmail.com" name="email" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>Pick-up Location</h3>
																		<input type="text" placeholder="City, Airport, Station, etc." name="fromlocation" id="searchlocation3" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>Drop-off Location</h3>
																		<input type="text" placeholder="City, Airport, Station, etc." name="tolocation" id="searchlocation4" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="x_slider_form_input_wrapper float_left">
																		<h3>Number of Days</h3>
																		<input type="number" placeholder="2 or 3 days" name="numOfDays" required>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-sec-header">
																		<h3>Pick-up Date</h3>
																		<label class="cal-icon">Pick-up Date
																			<input type="text" placeholder="Select Date" class="form-control datepicker" name="reservation_date" required>
																		</label>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-sec-header">
																		<h3>Pick-up Time</h3>
																		
																		<input type="time" name="reservation_time" required>
																	</div>
																</div>
																
																
																
																<div class="col-md-12">
																	<div class="x_slider_checkbox_bottom float_left">
																	
																		<div class="x_slider_checout_right">
																			<ul>
																				<li><button type="submit" name="round">Book Now </button>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</form>
														</div>
													</div>
													
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
									<div class="content">
										<h2 data-animation="animated fadeInLeft">Explore Affordable <br>Car Rentals for Your Ultimate Journey</h2>
										<p data-animation="animated bounceInUp">We go beyond affordability, delivering a seamless, stress-free experience customized to meet your unique travel needs. Our commitment is to 
											<br> make every journey with us exceptional and hassle-free.
										</p>
										<div class="hs_effect_btn">
											<ul>
												<li data-animation="animated flipInX"><a href="#">about us<i class="fa fa-arrow-right"></i></a>
												</li>
												<li data-animation="animated flipInX"><a href="#">contact<i class="fa fa-arrow-right"></i></a>
												</li>
											</ul>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
				
			
			</div>
		</div>
	</div>
	<!-- hs Slider End -->

	<!-- xs Slider bottom title Start -->
	<div class="x_slider_bottom_title_main_wrapper">
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-magnifying-glass"></i>
			<h3><a href="#">24 / 7 CAR SUPPORT</a></h3>
			<p>Offering 24/7 car support for cabs ensures customer safety and satisfaction providing prompt
				assistance during emergencies and building trust through reliable
				service around the clock.</p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-world"></i>
			<h3><a href="#">LOTS OF LOCATION</a></h3>
			<p>Providing Frequent location updates for cabs ensure swift service, reduce wait times, enhance
			safety, and provide a seamless experience for both customers and drivers, ensuring
			accurate arrivals at destinations.</p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-checklist"></i>
			<h3><a href="#">RESERVATION ANYTIME</a></h3>
			<p>Experience the convenience of our 24/7 reservation system, providing flexible 
			scheduling for a hassle-free cab service. Book a cab anytime, ensuring accessibility 
			and convenience around the clock.</p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-car-trip"></i>
			<h3><a href="#">Rentals Cars</a></h3>
			<p>Experience seamless car rentals through our user-friendly platform, ensuring quick bookings. Your 
			ideal rental car is just a few clicks away, guaranteeing an efficient process for your journey
				.</p>
		</div>
	</div>
	<!-- xs Slider bottom title End -->
	<!-- xs offer car tabs Start -->
	<div class="x_offer_car_main_wrapper float_left padding_tb_100" id="service">
		<div class="container">
			
			
			
				
							<div class="row">
								<div class="col-md-12">
									<div class="x_offer_car_heading_wrapper float_left">
										<h3>ONEWAY</h3>
										
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="x_car_offer_img float_left">
											<img src="images/c1.png" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>
												<h3>₹14/kms</h3>
												
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">SWIFT DZIRE</a></h2>
											<p>Minimum 130km charges need to pay.</p>
										</div>
										<div class="x_car_offer_heading float_left">
											<ul>
												<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;4+1</a>
												</li>
												<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;AC</a>
												</li>
												<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;3</a>
												</li>
												<li>
													<div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
														<ul class="list">
															<li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
															</li>
															<li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Experience driver</a>
															</li>
															
														</ul>
													</div>
												</li>
											</ul>
										</div>
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li><a href="#">Book now</a>
												</li>
												<li><a href="#">Call Now</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="x_car_offer_img float_left">
											<img src="images/c2.png" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>₹21/kms</h3>
												
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">ERTIGA</a></h2>
											<p>Minimum 130km charges need to pay.</p>
										</div>
										<div class="x_car_offer_heading float_left">
											<ul>
												<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;4+1</a>
												</li>
												<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;AC</a>
												</li>
												<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;3</a>
												</li>
												<li>
													<div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
														<ul class="list">
															<li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
															</li>
															<li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Experience driver</a>
															</li>
															
														</ul>
													</div>
												</li>
											</ul>
										</div>
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li><a href="#">Book now</a>
												</li>
												<li><a href="#">Call Now</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="x_car_offer_img float_left">
											<img src="images/c4.png" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3> ₹23/kms
												</h3>
												
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">INNOVA</a></h2>
											<p>Minimum 130km charges need to pay.</p>
										</div>
										<div class="x_car_offer_heading float_left">
											<ul>
												<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;6+1</a>
												</li>
												<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;AC</a>
												</li>
												<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;6</a>
												</li>
												<li>
													<div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
														<ul class="list">
															<li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
															</li>
															<li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Experience driver</a>
															</li>
															
														</ul>
													</div>
												</li>
											</ul>
										</div>
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li><a href="#">Book now</a>
												</li>
												<li><a href="#">Call Now</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="x_car_offer_img float_left">
											<img src="images/c5.png" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>₹28/kms</h3>
												
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">INNOVA CRYSTA</a></h2>
											<p>Minimum 130km charges need to pay.</p>
										</div>
										<div class="x_car_offer_heading float_left">
											<ul>
												<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;7+1</a>
												</li>
												<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;AC</a>
												</li>
												<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;+9</a>
												</li>
												<li>
													<div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
														<ul class="list">
															<li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
															</li>
															<li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Experience driver</a>
															</li>
															
														</ul>
													</div>
												</li>
											</ul>
										</div>
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li><a href="#">Book now</a>
												</li>
												<li><a href="#">Call Now</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
							
							
							</div>
						
				
		
		</div>
	</div>

	<div class="btc_team_main_wrapper">
		<div class="btc_team_img_overlay"></div>
		<div class="container">
			
	<div class="row">
		<div class="col-md-12">
			<div class="x_offer_car_heading_wrapper float_left">
				<h3>Round Trip</h3>
				
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="x_car_offer_main_boxes_wrapper float_left">
				<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
				</div>
				<div class="x_car_offer_img float_left">
					<img src="images/c1.png" alt="img">
				</div>
				<div class="x_car_offer_price float_left">
					<div class="x_car_offer_price_inner">
					<h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>
						<h3>₹13/kms</h3>
						
					</div>
				</div>
				<div class="x_car_offer_heading float_left">
					<h2><a href="#">SWIFT DZIRE</a></h2>
					<p>Minimum 130km charges need to pay.</p>
				</div>
				<div class="x_car_offer_heading float_left">
					<ul>
						<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;4+1</a>
						</li>
						<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;AC</a>
						</li>
						<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;3</a>
						</li>
						<li>
							<div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
								<ul class="list">
									<li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
									</li>
									<li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Experience driver</a>
									</li>
									
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<div class="x_car_offer_bottom_btn float_left">
					<ul>
						<li><a href="#">Book now</a>
						</li>
						<li><a href="#">Call Now</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="x_car_offer_main_boxes_wrapper float_left">
				<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
				</div>
				<div class="x_car_offer_img float_left">
					<img src="images/c2.png" alt="img">
				</div>
				<div class="x_car_offer_price float_left">
					<div class="x_car_offer_price_inner">
						<h3>₹18/kms</h3>
						
					</div>
				</div>
				<div class="x_car_offer_heading float_left">
					<h2><a href="#">ERTIGA</a></h2>
					<p>Minimum 130km charges need to pay.</p>
				</div>
				<div class="x_car_offer_heading float_left">
					<ul>
						<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;4+1</a>
						</li>
						<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;AC</a>
						</li>
						<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;3</a>
						</li>
						<li>
							<div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
								<ul class="list">
									<li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
									</li>
									<li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Experience driver</a>
									</li>
									
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<div class="x_car_offer_bottom_btn float_left">
					<ul>
						<li><a href="#">Book now</a>
						</li>
						<li><a href="#">Call Now</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="x_car_offer_main_boxes_wrapper float_left">
				<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
				</div>
				<div class="x_car_offer_img float_left">
					<img src="images/c4.png" alt="img">
				</div>
				<div class="x_car_offer_price float_left">
					<div class="x_car_offer_price_inner">
						<h3> ₹20/kms
						</h3>
						
					</div>
				</div>
				<div class="x_car_offer_heading float_left">
					<h2><a href="#">INNOVA</a></h2>
					<p>Minimum 130km charges need to pay.</p>
				</div>
				<div class="x_car_offer_heading float_left">
					<ul>
						<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;6+1</a>
						</li>
						<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;AC</a>
						</li>
						<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;6</a>
						</li>
						<li>
							<div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
								<ul class="list">
									<li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
									</li>
									<li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Experience driver</a>
									</li>
									
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<div class="x_car_offer_bottom_btn float_left">
					<ul>
						<li><a href="#">Book now</a>
						</li>
						<li><a href="#">Call Now</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="x_car_offer_main_boxes_wrapper float_left">
				<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
				</div>
				<div class="x_car_offer_img float_left">
					<img src="images/c5.png" alt="img">
				</div>
				<div class="x_car_offer_price float_left">
					<div class="x_car_offer_price_inner">
						<h3>₹22/kms</h3>
						
					</div>
				</div>
				<div class="x_car_offer_heading float_left">
					<h2><a href="#">INNOVA CRYSTA</a></h2>
					<p>Minimum 130km charges need to pay.</p>
				</div>
				<div class="x_car_offer_heading float_left">
					<ul>
						<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;7+1</a>
						</li>
						<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;AC</a>
						</li>
						<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;+9</a>
						</li>
						<li>
							<div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
								<ul class="list">
									<li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
									</li>
									<li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Experience driver</a>
									</li>
									
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<div class="x_car_offer_bottom_btn float_left">
					<ul>
						<li><a href="#">Book now</a>
						</li>
						<li><a href="#">Call Now</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
	
	
	</div>

</div>
</div>



	<!-- xs offer car tabs End -->
	
	
	<!-- btc team Wrapper End -->
	<!-- x counter Wrapper Start -->
	<div class="x_counter_main_wrapper">
		<div class="x_counter_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_counter_car_heading_wrapper float_left">
						<h4>Work Process</h4>
						<h3>How it works?</h3>
					
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="x_cou_main_box_wrapper">
						<div class="x_icon"> <i class="flaticon-airplane-shape"></i> 
						</div>
						<h5><span>1.</span> <a href="#">pick destination</a></h5>
						
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="x_cou_main_box_wrapper">
						<div class="x_icon"> <i class="flaticon-calendar"></i> 
						</div>
						<h5><span>2.</span> <a href="#">select term</a></h5>
						
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="x_cou_main_box_wrapper">
						<div class="x_icon"> <i class="flaticon-sedan-car-front"></i> 
						</div>
						<h5><span>3.</span> <a href="#">choose a car</a></h5>
						
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="x_cou_main_box_wrapper x_cou_main_box_wrapper_last">
						<div class="x_icon"> <i class="flaticon-emoticon-square-smiling-face-with-closed-eyes"></i> 
						</div>
						<h5><span>4.</span> <a href="#">enjoy the ride</a></h5>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x counter Wrapper End -->
	<!-- x booking Wrapper Start -->
	<div class="x_booking_main_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="x_book_logo_wrapper float_left">
						<img src="images/logo.png" alt="logo">
					</div>
				</div>
				<div class="col-md-6">
					<div class="x_book_logo_heading_wrapper float_left">
						<h3>Streamline Your Travel Plans!</h3>
						<p>The Most User Centric Rental Theme on the Market.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="x_book_logo_btn float_left">
						<ul>
							<li><a href="#">BOOK CAR <i class="fa fa-arrow-right"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x booking Wrapper End -->
	<!-- xs offer car tabs Start -->
	<div class="x_offer_car_main_wrapper float_left padding_tb_100" id="Testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper float_left">
						<h4>Testimonials</h4>
						<h3>Top Reviews</h3>
						<p>Hear from our satisfied passengers about their positive experiences, providing valuable insights 
							<br>into the exceptional service and reliability of our cab projects.</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="screenshot">
						<div class="owl-carousel screen nplr screen-loop">
							<div>
							    <a href="https://www.google.com/maps/place/Mahalakshmi+Car+Travels/@16.5341108,80.5998223,17z/data=!4m8!3m7!1s0x3a35ef9aed74cd0d:0x6d6cf8e359becdfe!8m2!3d16.5341108!4d80.5998223!9m1!1b1!16s%2Fg%2F11m_s3_5tr?entry=ttu" target="_blank">
								<div class="card  valign-wrapper">
								
									<!-- /Client's image -->
									<div class="card-content center-align valign">
										<div class="testi_slide_star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<!-- Client's Feedback -->
										<p>“ Booked mahalakshmi tour cab service from Hyd to vijaywada , price is decent , car is clean , driver is nice and polite , had very good experience , will definitely book next time . ”</p>
										<!-- /Client's Feedback -->
										<!-- Client's Name -->
										<p class="card-title">Riz Md </p>
										<!-- /Client's Name -->
									</div>
								</div>
								</a>
							</div>
							<div>							    <a href="https://www.google.com/maps/place/Mahalakshmi+Car+Travels/@16.5341108,80.5998223,17z/data=!4m8!3m7!1s0x3a35ef9aed74cd0d:0x6d6cf8e359becdfe!8m2!3d16.5341108!4d80.5998223!9m1!1b1!16s%2Fg%2F11m_s3_5tr?entry=ttu" target="_blank">

								<div class="card  valign-wrapper">
								
									<div class="card-content center-align valign">
										<div class="testi_slide_star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<!-- Client's Feedback -->
										<p>“ Well maintained car and good driver were sent on our trip. Very pleased with their service. Will book again ”</p>
										<!-- /Client's Feedback -->
										<!-- Client's Name -->
										<p class="card-title">Aditya Praveen </p>
										<!-- /Client's Name -->
									</div>
								</div>
								</a>
							</div>
							<div>
							    							    <a href="https://www.google.com/maps/place/Mahalakshmi+Car+Travels/@16.5341108,80.5998223,17z/data=!4m8!3m7!1s0x3a35ef9aed74cd0d:0x6d6cf8e359becdfe!8m2!3d16.5341108!4d80.5998223!9m1!1b1!16s%2Fg%2F11m_s3_5tr?entry=ttu" target="_blank">

								<div class="card  valign-wrapper">
							
									<!-- /Client's image -->
									<div class="card-content center-align valign">
									<div class="testi_slide_star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<!-- Client's Feedback -->
										<p>“ Driver Chaitanya was very patient. In the midst of Michaung toofan, he drove carefully from Hyderabad to Annavaram. ”</p>
										<!-- /Client's Feedback -->
										<!-- Client's Name -->
										<p class="card-title">Sumanth Pogaru	</p>
										<!-- /Client's Name -->
									</div>
								</div>
								</a>
							</div>
							<div>
			                                                      <a href="https://www.google.com/maps/place/Mahalakshmi+Car+Travels/@16.5341108,80.5998223,17z/data=!4m8!3m7!1s0x3a35ef9aed74cd0d:0x6d6cf8e359becdfe!8m2!3d16.5341108!4d80.5998223!9m1!1b1!16s%2Fg%2F11m_s3_5tr?entry=ttu" target="_blank">

								<div class="card  valign-wrapper">
									<!-- Client's image -->
								
									<!-- /Client's image -->
									<div class="card-content center-align valign">
										<div class="testi_slide_star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<!-- Client's Feedback -->
										<p>“ I booked Mahalakshmi travels cab for outside travel from Guntur for our family members. They charged  reasonably for oneway travel and provided good service. I hope they keep up the good work. ”</p>
										<!-- /Client's Feedback -->
										<!-- Client's Name -->
										<p class="card-title">Sambasiva Chebrolu
										</p>
										<!-- /Client's Name -->
									</div>
								</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc team Wrapper Start -->
	<div class="x_why_main_wrapper" id="about">
		<div class="x_why_img_overlay"></div>
		<div class="container">
			<div class="x_why_left_main_wrapper">
				<img src="images/w1.png" alt="car_img">
			</div>
			<div class="x_why_right_main_wrapper">
				<h3>Why Choose Us ?</h3>
				<p>In an era defined by innovation, we stay ahead of the curve by integrating cutting-edge technology into every aspect of our cab services. Our user-friendly Cab services provides a convenient platform for easy bookings, real-time tracking, and transparent fare details.
				The	integration of GPS technology ensures accurate and efficient navigation, minimizing travel times and optimizing routes.
					<br>
					<br>We understand that a seamless blend of technology and transportation is essential for modern travelers, and our commitment to staying at the forefront of these advancements makes choosing us synonymous with choosing a technologically advanced and user-centric 
					transportation solution.</p>
				<ul>
					<li><a href="#">read more <i class="fa fa-arrow-right"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- btc team Wrapper End -->
	
	<div class="x_contact_title_main_wrapper float_left padding_tb_100" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
						<h4>get in touch</h4>
						<h3>Contact Info</h3>
					
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	<i class="fa fa-map-marker"></i>
						</div>
						<div class="x_contact_title_icon_cont">
							<h3><a href="#">address</a></h3>
							<p>1-4-175, Battalatataiah ST, Bhavanipuram, Vijayawada (Urban), N. T. R,Andhra Pradesh - 520012</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	<i class="flaticon-phone-call"></i>
						</div>
						<div class="x_contact_title_icon_cont">
							<h3>phone Number</h3>
							<p><a href="tel:9297000555"></a>+91-9297000555
							
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	<i class="flaticon-mail-send"></i>
						</div>
						<div class="x_contact_title_icon_cont">
							<h3>Email Address</h3>
							<p><a href="mailto:mahalakshmicab.info@gmail.com">mahalakshmicab.info@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- x news latter Wrapper End -->
	<!-- x footer Wrapper Start -->
	<?php include ('includes/footer.php');?>

<script>
  function initAutocomplete() {
    var searchlocation1 = document.getElementById('searchlocation1');
    var searchlocation2 = document.getElementById('searchlocation2');
	var searchlocation3 = document.getElementById('searchlocation3');
    var searchlocation4 = document.getElementById('searchlocation4');

    var autocompleteFrom = new google.maps.places.Autocomplete(searchlocation1);
    var autocompleteTo = new google.maps.places.Autocomplete(searchlocation2);
	var autocompleteFrom = new google.maps.places.Autocomplete(searchlocation3);
    var autocompleteTo = new google.maps.places.Autocomplete(searchlocation4);
  }
</script>

<script>
  window.onload = function () {
    initAutocomplete();
  };
</script>