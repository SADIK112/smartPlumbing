<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $number = $_POST['number'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "smartplumbinghea";
  $headers = "From: ".$mailFrom;
  $txt = "You just received an email ".$name.".\n\n".$number.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact.php?mailsend");
  
}

?>




<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <title>Smart Plumbing, gas & healting Service</title>
    <!-- Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/strock-icon.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- owl-carousel-->
    <link rel="stylesheet" href="vendors/owl.carousel/owl.carousel.css">
    <!-- css-->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
   <header class="row main-header3">
      <div class="row this-inner">
        <div class="container"><a class="main-logo"><img src="images/homepage/mainlogo.png" alt="mainlogo"></a>
          <div class="header-right-info pull-right">
            <ul>
              <li>
                <div class="single-header-right-info">
                  <div class="icon-box"><i class="icon icon-Pointer"></i></div>
                  <div class="text-box">
                  <p>Bristol and around Southwest 24/7 <br> <a href="mailto:Info@smartplumbingheating.co.uk">Info@smartplumbingheating.co.uk</a></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="single-header-right-info">
                  <div class="icon-box"><i class="icon icon-Phone2"></i></div>
                  <div class="text-box">
                    <p><a href="tel:+440 7507 932938">+440 7507 932938</a></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="single-header-right-info">
                  <div class="icon-box"><i class="icon icon-Timer"></i></div>
                  <div class="text-box">
                    <p>Available 24/7</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <button type="button" data-toggle="collapse" data-target="#plumber-nav" aria-expanded="false" class="navbar-toggle collapsed"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
      </div>
    </header>
    <div id="home">
      
      <div class="porltv navhere navhere3">
        <div class="container">
          <nav class="navbar navbar-default plumber-navbar3">
            <div class="container">
              <div class="row navbar-container3">
                <div id="plumber-nav" class="collapse navbar-collapse">
                  <div class="plumber-nav-left">
                    <ul class="nav navbar-nav">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About Us</a></li><!-- 
                      <li class="dropdown"><a href="about.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">About Us</a>
                        <ul class="dropdown-menu">
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="our-plumbers.html">Our Plumbers</a></li>
                          <li><a href="job-details.html">Career</a></li>
                          <li><a href="faq.html">FAQ's</a></li>
                          <li><a href="testimonials.html">Testimonials</a></li>
                          <li><a href="coupons.html">Coupons & Offers</a></li>
                        </ul>
                      </li> -->
                      <li class="dropdown"><a href="service.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">services</a>
                        <ul class="dropdown-menu services">
                          <li><a href="services.php">All Services</a></li><!-- 
                          <li><a href="single-serviced3aa.html?service=serviceNo-1">Plumbing Services</a></li>
                          <li><a href="single-service84c2.html?service=serviceNo-2">Drain Cleaning & Repairs</a></li>
                          <li><a href="single-service9c6c.html?service=serviceNo-3">Facuet & Leak Repairs</a></li>
                          <li><a href="single-service7eff.html?service=serviceNo-4">Sever Repair & Cleaning</a></li>
                          <li><a href="single-service3187.html?service=serviceNo-5">Gas Line Services</a></li>
                          <li><a href="single-service25cb.html?service=serviceNo-6">Water Treatment System</a></li>
                          <li><a href="single-serviceb8c6.html?service=serviceNo-7">Remodeling Service</a></li>
                          <li><a href="single-service039a.html?service=serviceNo-8">Heating & Cooling</a></li>
                          <li><a href="single-service2ee6.html?service=serviceNo-9">Commercial Plumbing</a></li> -->
                        </ul>
                      </li>

                      <li><a href="testimonials.php">Testimonials</a></li>
                      <!-- <li class="dropdown"><a href="price.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Price</a>
                        <ul class="dropdown-menu">
                          <li><a href="price.html">Price Listing</a></li>
                          <li><a href="payment-method.html">Payment Method</a></li>
                          <li><a href="transparency.html">Transparency</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a href="gallery.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Gallery</a>
                        <ul class="dropdown-menu">
                          <li><a href="gallery.html">Gallery Classic</a></li>
                          <li><a href="gallery2.html">Full Width</a></li>
                          <li><a href="gallery3.html">Lightbox</a></li>
                          <li><a href="gallery4.html">No Filter</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a href="blog.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">blogs</a>
                        <ul class="dropdown-menu">
                          <li><a href="blog.html">Blogs</a></li>
                          <li><a href="single.html">Single Blog</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a href="shop.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Shop</a>
                        <ul class="dropdown-menu">
                          <li><a href="shop.html">Shop Home</a></li>
                          <li><a href="single-product.html">Product Details</a></li>
                          <li><a href="cart.html">Cart</a></li>
                          <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                      </li> -->
                   
                    </ul>
                  </div>
                  <div class="plumber-nav-right">
                    <div class="get-appointment-btn3"><a href="contact.php"><span>Contact Us</span></a></div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    <section class="row page-cover3">
      <div class="container">
        <h2 class="page-title">Contact Us</h2>
        <h4 class="page-subtitle">The Plumbing has been in business since 1978</h4>
      </div>
    </section>
    <section class="row breadcrumb-row">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Contact Us</li>
        </ol>
      </div>
    </section>
    <section class="row contact-form-area site-contents">
      <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <p>Book an Appointment with East Smart Plumbing & Heating.</p>
        <div class="row">
          <div class="col-md-8">
            <form id="contactForm" action="contact.php" method="post" class="row contact-form">
              <input id="name" type="text" name="name" placeholder="Name" class="form-control">
              <input id="email" type="email" name="email" placeholder="Email" class="form-control">
              <input id="number" type="text" name="number" placeholder="Phone Number" class="form-control">
              <input id="subject" type="text" name="subject" placeholder="Subject" class="form-control">
              <textarea id="message" name="message" placeholder="Message" class="form-control"></textarea>
              <input type="submit" name="submit" value="Submit Now" class="btn btn-primary contact-submit">
            </form>
      
          </div>
        </div>
      </div>
    </section>
<!--     <div data-lat="23.8932752" data-lon="90.3822415" data-zoom="15" class="row google-map"></div>
 -->    
    </section>
    <section class="row footer-contacts">
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-contact">
            <div class="media">
              <div class="media-left"><i class="fa fa-map-marker"></i></div>
              <div class="media-body"><strong>visit Us:</strong>            Bristol and around Southwest 24/7</div>
            </div>
          </div>
          <div class="col-md-4 footer-contact">
            <div class="media">
              <div class="media-left"><i class="fa fa-envelope"></i></div>
              <div class="media-body"><strong>email us:</strong>            Info@smartplumbingheating.co.uk</div>
            </div>
          </div>
          <div class="col-md-4 footer-contact">
            <div class="media">
              <div class="media-left"><i class="fa fa-phone"></i></div>
              <div class="media-body"><strong>24/7 Emergency call</strong>            +440 7507 932938</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="row site-footer">
      <div class="container">
        <div class="row footer-sidebar">
          <div class="col-md-4 col-sm-6 widget widget-footer">
            <h4 class="widget-title">About Us</h4>
            <div class="text-widget">
              <p>Smart Plumbing & Heating (SPH) are a professional Gas Safe Registered company based in Fishponds, Bristol. We provide efficient, reliable plumbing and heating services to domestic properties throughout Bristol and the surrounding areas.</p>
              <ul class="nav nav-pills footer-social">
              <div><img src="images/homepage/visa1.png"></div>
                  <li><a href="https://www.facebook.com/smartplumbingheatingltd/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 col-sm-3 widget widget-footer">
              <h4 class="widget-title">We Provide</h4>
              <ul class="menu">
                <li><a>Domestic work</a></li>
                <li><a>Commercial work</a></li>
                <li><a>Free estimates</a></li>
                <li><a>Insurance undertaken</a></li>
                <li><a>Cards accepted</a></li>
              </ul>
            </div>
          <div class="col-md-2 col-sm-3 widget widget-footer">
            <h4 class="widget-title">Services</h4>
            <ul class="menu">
                <li><a href="#">Boiler Installation</a></li>
                <li><a href="#">Bathroom Fitting</a></li>
                <li><a href="#">Gas Installers</a></li>
                <li><a href="#">Heating & Cooling</a></li>
                <li><a href="#">Gas Cookers</a></li>
                <li><a href="#">Power Flushing</a></li>
                <li><a href="#">Emergency Plumber</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-4 widget widget-footer">
              <h4 class="widget-title">Ratings</h4>
              <ul class="menu">
                  <li><a href="#">Reliability & timekeeping-(9.68)</a></li>
                  <li><a href="#">Tidiness-(9.86)</a></li>
                  <li><a href="#">Courtesy-(9.98)</a></li>
                  <li><a href="#">Workmanship-(9.85)</a></li>
              </ul>
            </div>
          <div class="col-md-4 widget widget-footer">
          </div>
        </div>
        <div class="row copyright-row">
          <div class="copyright-texts">Copyright 2019. All rights reserved.</div>
          <div class="credit-texts">Created by: <a href="#">SadikRahman</a></div>
        </div>
      </div>
    </footer>
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTI1BZJKFCeJ8g9O01CMZ4QvVCfdPYkrE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/isotope/isotope.min.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/owl.carousel/owl.carousel.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>