<!doctype html>
<html lang="en">
<head>

  <?php include 'inc/head.php'; ?>
  
  <?php title("Awarno | Contact"); ?>

</head>
<body>

<?php 
  
  include 'inc/preloader.php';

  include 'inc/nav.php';
  
  
  ?>

  <!-- end page-transition -->

<header class="page-header">
  <div class="container">
    <div class="inner"> <small>Customers see, hear and feel the power of energy.</small>
      <h1>Contact</h1>
    </div>
    <!-- end inner -->
    <?php include 'inc/header-social.php'; ?>
    <!-- end social-media --> 
  </div>
  <!-- end containe --> 
</header>
<!-- end page-header -->
<section class="content-block text-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-4 wow fadeIn">
        <address>
        <i class="fas fa-map-marker-alt"></i>House No. 314, Shyam Colony, Sehatpur, Faridabad, Delhi NCR, 121003
        </address>
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-4 wow fadeIn">
        <address>
        <i class="fas fa-phone-square"></i> Call Us <br>
        8595966321, 9818604426 & 9773958145
        </address>
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-4 wow fadeIn">
        <address>
        <i class="fas fa-envelope-open"></i> Send e-mail<br>
        <a href="mailto:awarnodigital@gmail.com">awarnodigital@gmail.com</a><br>
        <a href="mailto:info@awarno.com">info@awarno.com</a>
        </address>
      </div>
      <!-- end col-3 -->
      <div class="col-lg-10 wow fadeIn">
        <div class="map-holder">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3511.530112428049!2d77.32040971451615!3d28.342818503885976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdb6a8073cb89%3A0x4c49db13bbccfc89!2sAwarno%20-%20Website%20Designing%20Company%20in%20Faridabad!5e0!3m2!1sen!2sin!4v1615963143538!5m2!1sen!2sin"allowfullscreen></iframe>

        </div>
        <!-- end map-holder --> 
      </div>
      <!-- end col-10 -->
      <div class="col-lg-10 wow fadeIn">
        <div class="contact-form">
          <div class="title-block"> <img src="images/title-icon.png" alt="Image">
            <h6>DON'T HESITATE PLEASE</h6>
            <h2>Contact us for your idea or <br>
              your new projects</h2>
          </div>
          <!-- end title-block -->
          <form id="contact" name="contact" method="post">
            <div class="form-group">
              <input type="text" name="name" id="name" autocomplete="off" required>
              <span>Your name</span> </div>
            <!-- end form-group -->
            <div class="form-group">
              <input type="text" name="phone" id="phone" autocomplete="off" required>
              <span>Your Phone Number</span> </div>
            <!-- end form-group -->
            <div class="form-group">
              <input type="text" name="email" id="email" autocomplete="off" required>
              <span>Your e-mail</span> </div>
            <!-- end form-group -->
            <!--<div class="form-group">-->
            <!--  <input type="text" name="subject" id="subject" autocomplete="off" required>-->
            <!--  <span>Subject</span> </div>-->
            <!-- end form-group -->
            <div class="form-group">
              <textarea name="message" id="message" autocomplete="off" required></textarea>
              <span>Your message</span> </div>
            <!-- end form-group -->
            <div class="form-group">
              <button id="submit" type="submit" name="submit"> Submit </button>
            </div>
            <!-- end form-group -->
          </form>
          
        <?php

            if(isset($_POST['submit'])){

              $name = $_POST['name'];
              $mobile = $_POST['phone'];
              $email = $_POST['email'];
            //   $subject = $_POST['subject'];
              $message = $_POST['message'];
              
              
              
              
              $servername = "localhost";
                $username = "awarnodb_awarno";   
                $password = "Md]2x~kPg$*A"; 
                $dbname = "awarnodb_web_awarno";    

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                
                
                

                date_default_timezone_set('Asia/Kolkata');
                $currentTime = date( 'd-m-Y h:i:s A', time () );
               
                $sql = "INSERT INTO inquiry(name, phone, email,website_type,message,i_time)VALUES('$name', '$mobile', '$email','contact form','$message','$currentTime')";
                mysqli_query($conn,$sql);
                
                mysqli_close($conn);
  
              $to = "awarnodigital@gmail.com";
              $txt = "Name :" . $name . "\r\n" . "Email :" . $email . "\r\n" . "Message :" . $message ;
              $subject = "Website Needed" . $subject;
              $headers = "From: ". $email;

              $sent = mail($to,$subject,$txt,$headers);

              if(!$sent){
                die ("Message Not Sent");
              }else{
                echo "Thank You! Message Sent Successfully";
              }


            }

        ?>
          
          <!-- end form -->
        </div>
        <!-- end contact-form --> 
      </div>
      <!-- end col-7 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-block -->
<section class="subscription-block">
  <div class="container">
    <div class="subscribe-box">
      <div class="inner wow fadeIn">
        <h2>Subscribe for Members</h2>
        <form>
          <input type="email" placeholder="Type your e-mail address">
          <input type="submit" value="SUBSCRIBE NOW">
        </form>
      </div>
      <!-- end inner --> 
    </div>
    <!-- end subscribe-box --> 
  </div>
  <!-- end container --> 
</section>
<!-- end subscription-block -->

<?php
  include "inc/whatsappSticky.php";
  include "inc/mobileSticky.php";
?>

<?php

  include "inc/footer.php";

?>

</body>
</html>