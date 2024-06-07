<?php include ('includes/header.php');?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkZ5uIR0UKffQOmfPbIR6j0iEPe1BrOSA&libraries=places"></script>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>

        <style>
            .x_why_main_wrapper {
                float: left;
                width: 100%;
                padding-top: 50px;
                padding-bottom: 16px;

                background-position: center 0;
                background-size: cover;
                position: relative;
            }
            .x_why_main_wrapper li a {
                display: inline-block;
                position: relative;
                width: 170px;
                height: 50px;
                line-height: 45px;
                text-align: center;
                background: #db2121;
                color: #ffffff;
                border: 1px solid transparent;
                text-transform: uppercase;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
            }
            .call-box {
                /* background: url(../img/footer-bg.jpg)no-repeat scroll 0 0/cover; */
                text-align: center;
                border-radius: 5px;
                position: relative;
                padding: 20px 0;
                z-index: 1;
            }

            .call-box-inner {
                width: 100% !important;
                margin: 0 auto;
                padding: 10px !important;
            }

            .call-box h2 {
                font-size: 33px;
                color: #fff;
                letter-spacing: 1px;
                margin-bottom: 15px;
                -webkit-transition: all 0.4s ease 0s;
                transition: all 0.4s ease 0s;
                display: inline-block;
                font-family: "Poppins", sans-serif;
                font-weight: 500;
                line-height: 50px;
            }
            .call-box:after {
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
                z-index: -1;
                border-radius: 5px;
            }
            .call-box-inner p {
                color: #b6b6b6;
            }

            .call-icon {
                font-size: 50px;
                margin-right: 30px;
                color: #fff;
            }
            .call-text {
                text-align: left;
            }
            .call-text h4 {
                color: #eee;
                font-size: 20px;
                letter-spacing: 2px;
            }

            .call-text p {
                text-transform: capitalize;
                color: #f6ad24;
                font-size: 17px;
                margin-bottom: 5px;
            }
            .call-number {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: left;
                -ms-flex-pack: left;
                justify-content: left;
                padding-left: 20px;
                margin-top: 30px;
                -ms-flex-line-pack: center;
                align-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
            .x_car_offer_bottom_btn ul {
    padding-top: 20px;
    padding-bottom: 20px;
    width: 30%;
    line-height: 0.428571;
    position: absolute;
    z-index: 1;
    letter-spacing: -0.2px;
    left: 50%;
    transform: translate(-50%, -50%);
    float: left;
}
.x_car_offer_bottom_btn li:first-child a {
    float: left;
    width: 100%;
    height: 40px;
    line-height: 40px;
    text-align: center;
    font-size: 12px;
    text-transform: uppercase;
    background: #db2121;
    color: #ffffff;
    -webkit-border-top-left-radius: 5px;
    -moz-border-top-left-radius: 5px;
    border-top-left-radius: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -moz-border-bottom-left-radius: 5px;
    border-bottom-left-radius: 5px;
}
.x_car_offer_bottom_btn li:last-child a {
    float: left;
    width: 100%;
    height: 40px;
    font-size: 12px;
    line-height: 40px;
    text-transform: uppercase;
    text-align: center;
    background: #083c75;
    color: #ffffff;
    -webkit-border-top-right-radius: 5px;
    -moz-border-top-right-radius: 5px;
    border-top-right-radius: 5px;
    -webkit-border-bottom-right-radius: 5px;
    -moz-border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

        </style>
    </head>
    <body></body>
</html>

<div class="x_counter_main_wrapper">
    <div class="x_counter_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_counter_car_heading_wrapper float_left">
                    <h4>Mahalaxmi Cabs</h4>
                    <h3 style="text-transform: none;">Airport Taxi Bangalore</h3>
                  
                    <p style="padding: 45px;">
                        In an era defined by innovation, we stay ahead of the curve by integrating cutting-edge technology into every aspect of our cab services. Our user-friendly Cab services provides a convenient platform for easy
                        bookings, real-time tracking, and transparent fare details. The integration of GPS technology ensures accurate and efficient navigation, minimizing travel times and optimizing routes. We understand that a seamless
                        blend of technology and transportation is essential for modern travelers, and our commitment to staying at the forefront of these advancements makes choosing us synonymous with choosing a technologically advanced and
                        user-centric transportation solution.
                    </p>
              <div class="buttons">
                        <div class="col-md-12">
                    <div class="x_car_offer_bottom_btn float_left" style="width:30%; align-items:center;">
                        <ul>
                            <li><a href="#">Book now</a></li>
                            <li><a href="#">Call Now</a></li>
                        </ul>
                    </div>
                 </div>
                 </div>
       
                </div>
            </div>
        </div>
    </div>
</div>

<!-- btc team Wrapper Start -->
<div class="x_why_main_wrapper_two" id="about">
    <div class="x_why_img_overlay"></div>
    <div class="container-fluid">
        <!-- <div class="x_why_main_wrapper" style="background: white; color: black;"> -->
        <div class="col-md-12">
                <div class="x_counter_car_heading_wrapper float_left" style="margin-top: 49px;">
            <h4>Mahalaxmi Cabs</h4>
            <h3 style="color: #17a2b8;text-transform: none;">Airport Taxi Bangalore</h3>
            <p style="padding: 45px; background: white; color: black;">
                In the realm of innovation, Mahalakshmi Cabs takes the lead, infusing cutting-edge technology across all facets of our services. Our user-friendly platform simplifies bookings, provides real-time tracking, and transparent
                fare details for a seamless experience. With the integration of GPS technology, we ensure precise navigation, reducing travel times and optimizing routes for efficiency. Recognizing the modern traveler's needs, Mahalakshmi
                Cabs pledges a seamless blend of technology and transportation. Staying at the forefront of advancements, choosing us means opting for a technologically advanced and user-centric transportation solution. Embark on a journey
                where innovation meets convenience, as Mahalakshmi Cabs sets new standards in the cab services industry.
            </p>
        </div>
    </div>
</div>

<!-- btc team Wrapper End -->

<!-- x footer Wrapper Start -->
<?php include ('includes/footer.php');?>

<script>
    function initAutocomplete() {
        var searchlocation1 = document.getElementById("searchlocation1");
        var searchlocation2 = document.getElementById("searchlocation2");
        var searchlocation3 = document.getElementById("searchlocation3");
        var searchlocation4 = document.getElementById("searchlocation4");

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
