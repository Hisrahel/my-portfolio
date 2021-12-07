<?php
session_start();
$link = mysqli_connect('localhost', 'root', 'Olambeass1', 'israel');

if(isset($_POST['sub_message'])){

  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message_text = $_POST['message'];

  date_default_timezone_set("Africa/Lagos");
  $from_date = date("F d, Y");

  $time_stamp1 = ltrim(date('h:i a'), 0);
  $from_time = $time_stamp1;

  $to = "olayemisrael5@gmail.com";
  
  $message = "
  <html>
  <head>
  <title>Feed Back</title>
  </head>
  <body>
  <p>Message from Website</p>
  <table>
  <tr>
  <th></th>
  <th></th>
  </tr>
  <tr>
  <td>Email:</td>
  <td>".$from_email."</td>
  </tr>
  <tr>
  <td>Name:</td>
  <td>".$from_name."</td>
  </tr>
  <tr>
  <td>Sent:</td>
  <td>".$from_date."</td>
  </tr>
  <tr>
  <td>Time:</td>
  <td>".$from_time."</td>
  </tr>
  <tr>
  <td>Message:</td>
  <td>".$message_text."</td>
  </tr>
  </table>
  </body>
  </html>
  ";
  
  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
  // More headers
  $headers .= 'From: <'.$from_email.'>' . "\r\n";
  $headers .= 'Cc: ' . "\r\n";
  
  $mailsent = mail($to,$subject,$message,$headers);

  if($mailsent == true){

    echo "<script>alert('Dear $from_name, Your message has been delivered successfully!!')</script>";
  } else{
    echo "<script>alert('Dear $from_name, Your message was not sent, Please try again later... Thank you!!')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/letter-i-.jpg" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v4.7.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    /*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info {
  width: 100%;
  background: #fff;
}
.contact .info i {
  font-size: 20px;
  color: #34b7a7;
  float: left;
  width: 44px;
  height: 44px;
  background: #effbf9;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}
.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #222222;
}
.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #555555;
}
.contact .info .email, .contact .info .phone {
  margin-top: 40px;
}
.contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i {
  background: #34b7a7;
  color: #fff;
}
 .contact .php-email-form {
  width: 100%;
  background: #fff;
}
.contact .php-email-form .form-group {
  padding-bottom: 8px;
}
.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}
.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}
.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
}
.contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
  border-color: #34b7a7;
}
.contact .php-email-form input {
  height: 44px;
}
.contact .php-email-form textarea {
  padding: 10px 12px;
}
.contact .php-email-form button[type=submit] {
  background: #34b7a7;
  border: 0;
  padding: 10px 30px 12px 30px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}
.contact .php-email-form button[type=submit]:hover {
  background: #3dc8b7;
}
@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Portfolio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
          <li><a class="active" href="contac.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://wa.me/+2348180980419" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="https://web.facebook.com/people/Olayemi-Israel/100071970150067/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://github.com/Hisrahel" class="instagram"><i class="bi bi-github"></i></a>
        <a href="https://linkedin.com/in/olayemi-israel-201a01223" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>You can contact me through any of the following means below.</p>

          <div class="header-social-links mt-2">
            <a href="https://wa.me/+2348180980419" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            <a href="https://web.facebook.com/people/Olayemi-Israel/100071970150067/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://github.com/Hisrahel" class="instagram"><i class="bi bi-github"></i></a>
            <a href="https://linkedin.com/in/olayemi-israel-201a01223" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63416.744766738695!2d3.2624479!3d6.5787647!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b921dc69af115%3A0xde2e5394d45bba65!2sSam%20Ethnan%20Airforce%20Base!5e0!3m2!1sen!2sng!4v1637770463073!5m2!1sen!2sng" frameborder="0" allowfullscreen></iframe>
        </div>
       
        <!-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->

        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Nigeria Airforce Base Ikeja, Lagos State. Nigeria.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>olayemisrael5@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(234) 81 809 804 19</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="contact.php" method="POST" class="form-controls" enctype="multipart/form-data" name="send_meassage">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>  -->
              <div class="row justify-content-center">
              <div class="col-md-3">
                <!-- <a href="#" class="form-control btn btn-primary " style="font-size: 23px; font-weight: 600;">Log In</a>   -->
                <input type="submit" value="Send message"  name="sub_message" class="form-control btn btn-success my-4">
                </div>
                </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Israel</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href="about.php">Hisrahel</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>