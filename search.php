<?php 
	require 'vendor/autoload.php';
    if(isset($_POST['oneway']) || isset($_POST['round']))
    {
        $origin = $_POST['fromlocation'];
        $destination = $_POST['tolocation'];
       $distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyDkZ5uIR0UKffQOmfPbIR6j0iEPe1BrOSA');
       $distance_arr = json_decode($distance_data);
       $distance_arr->status;
    if ($distance_arr->status=='OK') {
        $destination_addresses = $distance_arr->destination_addresses[0];
        $origin_addresses = $distance_arr->origin_addresses[0];
    } else {
      echo "<p>The request was Invalid</p>";
      exit();
    }
       if ($origin_addresses=="" or $destination_addresses=="") {
          echo "<p>Destination or origin address not found</p>";
          exit();
       }
       // Get the elements as array
       $elements = $distance_arr->rows[0]->elements;
       $distance = $elements[0]->distance->text;
       $duration = $elements[0]->duration->text;
	   
        $result = str_replace(',', '', $distance); 
		$dist = intval(str_replace(' km','',$result));
        
        $fl = $_POST['fromlocation'];
        $tl = $_POST['tolocation'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['number'];
        $amt = "-----";
        $rd = $_POST['reservation_date'];
        $rt = $_POST['reservation_time'];
        $cab = "-----";
        $tm = "-----";
        $ext = "-----";
        
		// TELEGRAM MESSAGE(ONE WAY) STARTS
		$pickup = $fl;
		$drop = $tl;
		$fname = $nm;
		$email = $em;
		$phone = $num;
		$date = $rd;
		$time = $rt;
		$distance = $dist;
		
		$botToken = '6951028317:AAEQiD6IvECPTgruYVVrnN1STjfG49LmAO4'; // 6951028317:AAEQiD6IvECPTgruYVVrnN1STjfG49LmAO4
		$apiUrl = "https://api.telegram.org/bot{$botToken}/";
		
		$chatId = '6640190869'; // 6640190869
		
		if(isset($_POST['oneway'])){
			$message = "*Enquiry* \r\n \r\n Pickup: $pickup \r\n Drop: $drop \r\n Name: $fname \r\n Phone: +91$phone \r\n Reservation Date: $date \r\n Reservation Time: $time \r\n Distance: $distance km \r\n Email: $email";
		}else{
			$numOfDays = $_POST['numOfDays'];

            $message = "*Enquiry* \r\n \r\n Round Trip($numOfDays days) \r\n Pickup: $pickup \r\n Drop: $drop \r\n Name: $fname \r\n Phone: +91$phone \r\n Reservation Date: $date \r\n Reservation Time: $time \r\n Distance: $dist km \r\n Email: $email";
		}

		$httpClient = new GuzzleHttp\Client();
		
		$response = $httpClient->post($apiUrl . 'sendMessage', [
			'json' => [
				'chat_id' => $chatId,
				'text' => $message,
			],
		]);
		
		$telegram_result = json_decode($response->getBody(), true);
		
		if ($telegram_result['ok']) {
			// echo 'Message sent successfully!';
		} else {
			// echo 'Error sending message: ' . $telegram_result['description'];
		}

	// TELEGRAM MESSAGE(ONE WAY) ENDS
	     
?>

	<?php include ('includes/header.php');?>


    <div class="x_responsive_form_wrapper float_left">
		<div class="container">
			<div class="x_slider_form_main_wrapper float_left">
				<div class="x_slider_form_heading_wrapper float_left">
					<h3>Let’s update your perfect car</h3>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="x_slider_form_input_wrapper float_left">
							<h3>Pick-up Location</h3>
							<input type="text" value="<?php echo $fl; ?>" placeholder="City, Airport, Station, etc." disabled>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="x_slider_form_input_wrapper float_left">
							<h3>Drop-off Location</h3>
							<input type="text" value="<?php echo $tl; ?>" placeholder="City, Airport, Station, etc." disabled>
						</div>
					</div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="x_slider_form_input_wrapper float_left">
							<h3>Total Km</h3>
							<input type="text" placeholder="2300 Km" value="<?php echo $dist." km"; ?>" disabled>
						</div>
					</div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="x_slider_form_input_wrapper float_left">
							<h3>Duration</h3>
							<input type="text" placeholder="1 day 2 hours" value="<?php echo $duration; ?>" disabled>
						</div>
					</div>
                   
					
					
					<div class="col-md-4">
						<div class="form-sec-header">
							<h3>Drop-Off Date</h3>
							<label class="cal-icon">
								<input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker" value="<?php echo $rd; ?>" disabled>
							</label>
						</div>
					</div>
                    <div class="col-md-4">
						<div class="form-sec-header">
                            <h3>Pick-up Time</h3>
                            
                            <input type="time" value="<?php echo $rt; ?>" disabled>
                        </div>
					</div>
				
				
					<div class="col-md-12">
						<div class="x_slider_checkbox_bottom float_left">
						
							<div class="x_slider_checout_right">
								<ul>
									<li><a href="javascript:history.back()">Update <i class="fa fa-arrow-right"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- hs Slider Start -->

	<div class="x_offer_car_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12">
					<!-- <div class="x_offer_tabs_wrapper">
						<ul class="nav nav-tabs">
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home"> ONEWAY TRIP</a>
							</li>
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#menu1"> ROUND TRIP</a>
							</li> 
						</ul>
					</div> -->
					<div class="tab-content">
						<div id="home" class="tab-pane active">

						<?php if(isset($_POST['oneway'])){ 
        $cabs = array(
            array('car_name' => 'SWIFT DZIRE', 'rating' => '5.0', 'review' => 1425, 'text1' => '4+1', 'text2' => '3', 'text3' => 'Minimum 200km charges need to pay.', 'image' => 'images/c1.png','pkm' => 14),
            array('car_name' => 'ERTIGA', 'rating' => '5.0', 'review' => 1425, 'text1' => '4+1', 'text2' => '3', 'text3' => 'Minimum 200km charges need to pay.', 'image' => 'images/c2.png','pkm' => 21),
            array('car_name' => 'INNOVA', 'rating' => '5.0', 'review' => 1425, 'text1' => '6+1', 'text2' => '6', 'text3' => 'Minimum 200km charges need to pay.', 'image' => 'images/c4.png','pkm' => 23),
            array('car_name' => 'INNOVA CRYSTA', 'rating' => '5.0', 'review' => 1425, 'text1' => '7+1', 'text2' => '+9', 'text3' => 'Minimum 200km charges need to pay.', 'image' => 'images/c5.png','pkm' => 28)
        );
        
        $t_type = 'oneway';
    }
    
    if(isset($_POST['round'])){
        $cabs = array(
            array('car_name' => 'SWIFT DZIRE', 'rating' => '5.0', 'review' => 1425, 'text1' => '4+1', 'text2' => '3', 'text3' => 'Minimum 300km charges need to pay.', 'image' => 'images/c1.png','pkm' => 13),
            array('car_name' => 'ERTIGA', 'rating' => '5.0', 'review' => 1425, 'text1' => '4+1', 'text2' => '3', 'text3' => 'Minimum 300km charges need to pay.', 'image' => 'images/c2.png','pkm' => 18),
            array('car_name' => 'INNOVA', 'rating' => '5.0', 'review' => 1425, 'text1' => '6+1', 'text2' => '6', 'text3' => 'Minimum 300km charges need to pay.', 'image' => 'images/c4.png','pkm' => 20),
            array('car_name' => 'INNOVA CRYSTA', 'rating' => '5.0', 'review' => 1425, 'text1' => '7+1', 'text2' => '+9', 'text3' => 'Minimum 300km charges need to pay.', 'image' => 'images/c5.png','pkm' => 22)
        );
        
        $t_type = 'round';
    }
        $cabs = json_encode($cabs);
        $cabs = json_decode($cabs);
    ?>

							<div class="row">

							<?php foreach($cabs as $row){ ?>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="x_car_offer_img float_left">
											<img src="<?php echo $row->image; ?>" alt="img">
										</div>
										<?php 
											if(isset($_POST['oneway'])){
												if(floatval(intval($dist)) >= 200){ 
													$tamt = round(($dist*$row->pkm)+400); 
												} else{
													$tamt = round((200*$row->pkm)+400); 
												}
											}else{
												if(floatval(intval($dist)) >= 300){ 
													$tamt = round(($dist*$numOfDays*$row->pkm)+(400*$numOfDays)); 
												} else{
													$tamt = round((300*$numOfDays*$row->pkm)+(400*$numOfDays)); 
												}
											}
											?>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>
												<h3>₹<?php echo $tamt; ?></h3>
												
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#"><?php echo $row->car_name; ?></a></h2>
											<p><?php echo $row->text3; ?></p>
										</div>
										<div class="x_car_offer_heading float_left">
											<ul>
												<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;<?php echo $row->text1; ?></a>
												</li>
												<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;AC</a>
												</li>
												<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;<?php echo $row->text2; ?></a>
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
												<li>
							<form action="thankyou.php" method="post">
								<input type="hidden" value="<?php echo $_POST['name']; ?>"  name="name" required />
								<input type="hidden" value="<?php echo $_POST['email']; ?>" name="email" required />
								<input type="hidden" value="<?php echo $_POST['number']; ?>" name="number" required />
								<input type="hidden" value="<?php echo $_POST['fromlocation']; ?>" name="fromlocation" required /> 
								<input type="hidden" value="<?php echo $_POST['tolocation']; ?>" size="50" name="tolocation" required /> 
								<input type="hidden" value="<?php echo $tamt; ?>" name="amount" required />
								<input type="hidden" value="<?php echo $row->car_name; ?>" name="cab" required />
								<input type="hidden" value="&#8377; <?php echo $row->pkm; ?>/km"  name="ext" required />
								<input type="hidden" name="reservation_date" value="<?php echo $_POST['reservation_date']; ?>" required>
								<input type="hidden" name="reservation_time" value="<?php echo $_POST['reservation_time']; ?>" required>
								<input type="hidden" placeholder="Name" value="<?php echo $result; ?>" required name="km" />
								<input type="hidden" placeholder="Name" value="<?php echo $duration; ?>" required name="duration" />
								<input type="hidden" placeholder="Name" value="<?php if(isset($_POST['numOfDays'])){echo $_POST['numOfDays']; }else{ echo "";} ?>" required name="numOfDays" />
								<button type="submit" name="<?php echo $t_type; ?>">
									Book Now </button>
							</form>	
												<!-- <button href="#">Book now</button> -->
												</li>
												<li><a href="#">Contact US</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- xs offer car tabs End -->
	<?php } ?>
	<?php include ('includes/footer.php');?>
