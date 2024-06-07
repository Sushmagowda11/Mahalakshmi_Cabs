<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$datePart = date('dmy');
$randomNumber = mt_rand(100000, 999999);
$bookingId = "ML-".$datePart . $randomNumber;

$dt = date("Y-m-d");
    if(isset($_POST['oneway']))
    {
        $fl = $_POST['fromlocation'];
        $tl = $_POST['tolocation'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['number'];
        $amt = $_POST['amount'];
        $rd = $_POST['reservation_date'];
        $rt = $_POST['reservation_time'];
        $cab = $_POST['cab'];
        $km = $_POST['km'];
        $tm = date('h:i a');
        $ext = $_POST['ext'];
        $duration = $_POST['duration'];
        
        // TELEGRAM MESSAGE(ONE WAY) STARTS
			$pickup = $fl;
			$drop = $tl;
			$fname = $nm;
			$email = $em;
			$phone = $num;
			$date = $rd;
			$time = $rt;
			$distance = $km;
			
			$botToken = '6951028317:AAEQiD6IvECPTgruYVVrnN1STjfG49LmAO4'; // 6951028317:AAEQiD6IvECPTgruYVVrnN1STjfG49LmAO4
			$apiUrl = "https://api.telegram.org/bot{$botToken}/";
			
			$chatId = '6640190869'; // 6640190869
			
			$message = "*Booking* \r\n \r\n BookingId: $bookingId \r\n Name : $nm \r\n Phone : +91$num \r\n Pickup : $fl \r\n Drop : $tl \r\n Pickup Date : $rd \r\n Pickup Time  : $rt \r\n Cab  : $cab \r\n Trip Type : One Way \r\n Km : $km \r\n Fare  : Rs. $amt \r\n Extra Km  : $ext \r\n Email: $email";
			
			$httpClient = new GuzzleHttp\Client();
			
			$response = $httpClient->post($apiUrl . 'sendMessage', [
				'json' => [
					'chat_id' => $chatId,
					'text' => $message,
				],
			]);
			
			$telegram_result = json_decode($response->getBody(), true);
			
			if ($telegram_result['ok']) {
				// echo 'Message sent successfully! ';
			} else {
				// echo 'Error sending message: ' . $telegram_result['description'];
			}

		// TELEGRAM MESSAGE(ONE WAY) ENDS

        // SMTP MAILER(ONE WAY) STARTS

        $mail = new PHPMailer(true);

        try {
           //Server settings
           $mail->isSMTP();
           $mail->Host       = 'mail.mahalakshmicab.com';  // Specify your SMTP server
           $mail->SMTPAuth   = true;
           $mail->Username   = 'no-reply@mahalakshmicab.com';     // SMTP username
           $mail->Password   = '_hwgMpltCnn8';     // SMTP password
           $mail->SMTPSecure = 'ssl';
           $mail->Port       = 465;

           //Recipients
           $mail->setFrom('no-reply@mahalakshmicab.com', 'Mahalakshmi Cabs');
           $mail->addAddress($em, $nm);  // Add a recipient

           // Content
           $mail->isHTML(true);
           $mail->Subject = 'Booking Confirmation';
           $mail->Body    = '
           <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Mahalakshmi Cabs</title>
        
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            html,body{
                width: 100%;
                height: 100%;
                background: #e5f8ff;
                padding: 7px;
            }
            
            p{
                margin-bottom: 3px !important;
            }
            
            .mail_box{
                 background: #e5f8ff;
                color: #000;
                    /*padding: 20px;*/
            }
            
            .head{
                font-size: 1.2rem;
                font-family: "Roboto", sans-serif;
            }
            
            .fa.fa-check{
                color: green;
                background-color: rgb(37, 35, 35);
                padding: 4px;
                border-radius: 500px;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }
            
            .fa.fa-times{
                color: red;
                background-color: rgb(37, 35, 35);
                padding: 4px 6px;
                border-radius: 500px;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }
            
            .pad-50{
               padding: 20px;
                   background: #ffffff;
            }
            
            .pad-l{
                padding-left: 200px;
            }
            
            
            .logo_area{
                width: 100%;
                background: #ffffff;
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
                padding:20px 0 0 20px;
            }
            
            .btn{
                border-radius: 0 !important;
                margin-left: 10px !important;
            }
            
            table tr td,table tr th{
                 font-size: larger;
                 text-align:left;
                 color: #fff;
            }
            
            table tr th{
                text-align:left;
                padding-left: 0px !important;
                
            }
            
            @media only screen and (max-width: 650px) {
           
            }
            .prow {
                font-family: "Roboto", sans-serif;
            }
        </style>
        
        </head>
        
        <body>
        <div style="background: #de1818;padding: 10px;">    
        <div class="mail_box">
            
            <div class="logo_area ">
                 <img width="165px" src="https://mahalakshmicab.com/images/logo.png" alt="">
            </div>
            <div class="pad-50 pb-0">
                <p class="head mb-0" style="font-size:16px">Welcome To <b>Mahalakshmi Cabs</b></p>
                <p class="head mb-0" style="font-size:16px">Booking Details</p>
                <hr>
            </div> 
            <div class="pad-50" style="padding-top:0px">
                <div class="prow">
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Booking ID &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$bookingId.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Name &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$nm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Email ID &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$em.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Contact No &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px; font-weight:600">
                        <b>'.$num.'</b>
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        PickUp Location &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$fl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Drop Location &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$tl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Vehicle Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$cab.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Journey Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        Oneway Trip
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Travel Date & Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$rd.' '.$rt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Distance &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$km.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Duration &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$duration.'(Approx)
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Estimation &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        Rs.'.$amt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Extra per KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$ext.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Driver Allowance &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        Included
                    </div>
                    <br>
                </div>
                
                <br>
                
                <p>For Customer Intimation: Toll Gate, Permit, Parking ,Hill Station Charges extra</p>
                <p class="" style="color:#000"><b>Happy Journey</b></p>
                <p>Contact: <a href="#">+919297000555</a> Please visit Our Website</p>
                <p class="">https://mahalakshmicab.com</p>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>';
        //    $mail->SMTPDebug = 2;  // Enable verbose debug output

           // Send the email
           $mail->send();
        //    echo 'Mail has been sent ';
        } catch (Exception $e) {
        //    echo "Mail could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        // SMTP MAILER(ONE WAY) ENDS
        
}


    if(isset($_POST['round']))
    {
        $fl = $_POST['fromlocation'];
        $tl = $_POST['tolocation'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['number'];
        $amt = $_POST['amount'];
        $rd = $_POST['reservation_date'];
        $rt = $_POST['reservation_time'];
        $cab = $_POST['cab'];
        $km = $_POST['km'];
        $tm = date('h:i a');
        $days = $_POST['numOfDays'];
        $duration = $_POST['duration'];
        $ext = $_POST['ext'];
        
        // TELEGRAM MESSAGE(ROUND TRIP) STARTS
			$pickup = $fl;
			$drop = $tl;
			$fname = $nm;
			$email = $em;
			$phone = $num;
			$date = $rd;
			$time = $rt;
			$distance = $km;
			
			$botToken = '6951028317:AAEQiD6IvECPTgruYVVrnN1STjfG49LmAO4'; // 6951028317:AAEQiD6IvECPTgruYVVrnN1STjfG49LmAO4
			$apiUrl = "https://api.telegram.org/bot{$botToken}/";
			
			$chatId = '6640190869'; // 6640190869
			
			$message = "*Booking* \r\n \r\n Round Trip($days days) \r\n BookingId: $bookingId \r\n Name : $nm \r\n Phone : +91$num \r\n Pickup : $fl \r\n Drop : $tl \r\n Pickup Date : $rd \r\n Pickup Time : $rt \r\n Cab : $cab \r\n Trip Type : Round Trip \r\n Km : $km \r\n Fare : Rs. $amt \r\n Extra Km  : $ext \r\n Email : $email";
			
			$httpClient = new GuzzleHttp\Client();
			
			$response = $httpClient->post($apiUrl . 'sendMessage', [
				'json' => [
					'chat_id' => $chatId,
					'text' => $message,
				],
			]);
			
			$telegram_result = json_decode($response->getBody(), true);
			
			if ($telegram_result['ok']) {
				// echo 'Message sent successfully! ';
			} else {
				// echo 'Error sending message: ' . $telegram_result['description'];
			}

		// TELEGRAM MESSAGE(ROUND TRIP) ENDS

        // SMTP MAILER(ROUND TRIP) STARTS

        $mail = new PHPMailer(true);

        try {
           //Server settings
           $mail->isSMTP();
           $mail->Host       = 'mail.mahalakshmicab.com';  // Specify your SMTP server
           $mail->SMTPAuth   = true;
           $mail->Username   = 'no-reply@mahalakshmicab.com';     // SMTP username
           $mail->Password   = '_hwgMpltCnn8';     // SMTP password
           $mail->SMTPSecure = 'ssl';
           $mail->Port       = 465;

           //Recipients
           $mail->setFrom('no-reply@mahalakshmicab.com', 'Mahalakshmi Cabs');
           $mail->addAddress($em, $nm);  // Add a recipient

           // Content
           $mail->isHTML(true);
           $mail->Subject = 'Booking Confirmation';
           $mail->Body    = '
           <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Mahalakshmi Cabs</title>
        
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            html,body{
                width: 100%;
                height: 100%;
                background: #e5f8ff;
                padding: 7px;
            }
            
            p{
                margin-bottom: 3px !important;
            }
            
            .mail_box{
                 background: #e5f8ff;
                color: #000;
                    /*padding: 20px;*/
            }
            
            .head{
                font-size: 1.2rem;
                font-family: "Roboto", sans-serif;
            }
            
            .fa.fa-check{
                color: green;
                background-color: rgb(37, 35, 35);
                padding: 4px;
                border-radius: 500px;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }
            
            .fa.fa-times{
                color: red;
                background-color: rgb(37, 35, 35);
                padding: 4px 6px;
                border-radius: 500px;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }
            
            .pad-50{
               padding: 20px;
                   background: #ffffff;
            }
            
            .pad-l{
                padding-left: 200px;
            }
            
            
            .logo_area{
                width: 100%;
                background: #ffffff;
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
                padding:20px 0 0 20px;
            }
            
            .btn{
                border-radius: 0 !important;
                margin-left: 10px !important;
            }
            
            table tr td,table tr th{
                 font-size: larger;
                 text-align:left;
                 color: #fff;
            }
            
            table tr th{
                text-align:left;
                padding-left: 0px !important;
                
            }
            
            @media only screen and (max-width: 650px) {
           
            }
            .prow {
                font-family: "Roboto", sans-serif;
            }
        </style>
        
        </head>
        
        <body>
        <div style="background: #de1818;padding: 10px;">    
        <div class="mail_box">
            
            <div class="logo_area ">
                 <img width="165px" src="https://mahalakshmicab.com/images/logo.png" alt="">
            </div>
            <div class="pad-50 pb-0">
                <p class="head mb-0" style="font-size:16px">Welcome To <b>Mahalakshmi Cabs</b></p>
                <p class="head mb-0" style="font-size:16px">Booking Details</p>
                <hr>
            </div> 
            <div class="pad-50" style="padding-top:0px">
                <div class="prow">
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Booking ID &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$bookingId.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Name &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$nm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Email ID &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$em.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Contact No &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px; font-weight:600">
                        <b>'.$num.'</b>
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        PickUp Location &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$fl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Drop Location &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$tl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Vehicle Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$cab.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Journey Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        Round Trip
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        No of Days &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$days.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Travel Date & Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$rd.' '.$rt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Distance &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$km.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Duration &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$duration.'(Approx)
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Estimation &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$amt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Extra per KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$ext.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Driver Allowance &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        INCLUDED
                    </div>
                    <br>
                </div>
                
                <br>
                
                <p>For Customer Intimation: Toll Gate, Permit, Parking ,Hill Station Charges extra</p>
                <p class="" style="color:#000"><b>Happy Journey</b></p>
                <p>Contact: <a href="#">+919297000555</a> Please visit Our Website</p>
                <p class="">https://mahalakshmicab.com/</p>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>';
        //    $mail->SMTPDebug = 2;  // Enable verbose debug output

           // Send the email
           $mail->send();
        //    echo 'Mail has been sent ';
        } catch (Exception $e) {
        //    echo "Mail could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        // SMTP MAILER(ROUND TRIP) ENDS

        
}
?>

<!DOCTYPE html>

<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8" />
	<title>New Car</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Xpedia" />
	<meta name="keywords" content="Xpedia" />
	<meta name="author" content="" />
	<meta name="MobileOptimized" content="320" />
	<!--Template style -->
	<link rel="stylesheet" type="text/css" href="css/xpedia.css" />
	<!--favicon-->
	<link rel="shortcut icon" type="image/png" href="images/fevicon.png" />
    <style>*{
        box-sizing:border-box;
       /* outline:1px solid ;*/
      }
      body{
      background: #ffffff;
      background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
          height: 100%;
              margin: 0;
              background-repeat: no-repeat;
              background-attachment: fixed;
        
      }
      
      .wrapper-1{
        width:100%;
        height:100vh;
        display: flex;
      flex-direction: column;
      }
      .wrapper-2{
        padding :30px;
        text-align:center;
      }
      h1{
          font-family: 'Kaushan Script', cursive;
        font-size:4em;
        letter-spacing:3px;
        color:#5892FF ;
        margin:0;
        margin-bottom:20px;
      }
      .wrapper-2 p{
        margin:0;
        font-size:1.3em;
        color:#aaa;
        font-family: 'Source Sans Pro', sans-serif;
        letter-spacing:1px;
      }
      .go-home{
        color:#fff;
        background:#5892FF;
        border:none;
        padding:10px 50px;
        margin:30px 0;
        border-radius:30px;
        text-transform:capitalize;
        box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
      }
      .footer-like{
        margin-top: auto; 
        background:#D7E6FE;
        padding:6px;
        text-align:center;
      }
      .footer-like p{
        margin:0;
        padding:4px;
        color:#5892FF;
        font-family: 'Source Sans Pro', sans-serif;
        letter-spacing:1px;
      }
      .footer-like p a{
        text-decoration:none;
        color:#5892FF;
        font-weight:600;
      }
      
      @media (min-width:360px){
        h1{
          font-size:4.5em;
        }
        .go-home{
          margin-bottom:20px;
        }
      }
      
      @media (min-width:600px){
        .content{
        max-width:1000px;
        margin:0 auto;
      }
        .wrapper-1{
        height: initial;
        max-width:620px;
        margin:0 auto;
        margin-top:50px;
        box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
      }
        
      }</style>
</head>

<body>
	<!-- preloader Start -->
	<div id="preloader">
		<div id="status">
			<img src="images/loader.gif" id="preloader_image" alt="loader">
		</div>
	</div>

    <div class=content>
        <div class="wrapper-1">
          <div class="wrapper-2">
            <h1>Thank you !</h1>
            <p>Thanks for Booking   </p>
            <p>you should receive a confirmation email soon  </p>
            <a href="/"><button class="go-home">
            Go Home
            </button></a>
          </div>
          <div class="footer-like">
            <p>Email not received?
             <a href="javascript:window.location.reload(true)">Click here to send again</a>
            </p>
          </div>
      </div>
      </div>
      
      
      
      <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/modernizr.js"></script>
      <script src="js/select2.min.js"></script>
      <script src="js/jquery.menu-aim.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/jquery.nice-select.min.js"></script>
      <script src="js/owl.carousel.js"></script>
      <script src="js/own-menu.js"></script>
      <script src="js/jquery.bxslider.min.js"></script>
      <script src="js/jquery.magnific-popup.js"></script>
      <script src="js/xpedia.js"></script>
      <!-- custom js-->
    </body>
    </html>