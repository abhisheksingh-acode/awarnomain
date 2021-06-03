<!doctype html>
<html lang="en">
<head>

  <?php include 'inc/head.php'; ?>
  
  <?php title("Awarno | Careers"); ?>

</head>
<body>
<?php 
  
    include 'inc/preloader.php';

    include 'inc/nav.php';
  
  
?>
<!-- end navbar -->
<header class="page-header">
  <div class="container">
    <div class="inner"> <small>Customers see, hear and feel the power of energy.</small>
      <h1>CAREERS</h1>
    </div>
    <!-- end inner -->
    <?php include 'inc/header-social.php'; ?>
    <!-- end social-media --> 
  </div>
  <!-- end containe --> 
</header>
<!-- end page-header -->
<section class="content-block">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="job-positions">
          <li class="wow fadeIn"><span>Position</span><span>Location</span><span> </span></li>
          <li class="wow fadeIn"><span>UI-UX Designer & Front-End Dev</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
          <li class="wow fadeIn"><span> WordPress Developer</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
           <li class="wow fadeIn"><span>Back-End Developer</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
           <li class="wow fadeIn"><span>Project Manager</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
          <li class="wow fadeIn"><span>Social Media Manager</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
          <li class="wow fadeIn"><span>SEO Specialist</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
          <li class="wow fadeIn"><span>Web Product Manager</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
          <li class="wow fadeIn"><span>PHP Developer</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
          <li class="wow fadeIn"><span> Laravel Developer</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
          <li class="wow fadeIn"><span>Sales Executive</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
          <li class="wow fadeIn"><span>Business Development Manager</span><span>India</span><span><a href="#career">APPLY</a> </span></li>
          
        </ul>
      </div>
      <!-- end col-12 -->
     
      </div>
      <!-- end col-12 -->
      <div class="col-12">
        <form class="resume-form" id='career' method="POST" action="">
          <div class="title-block text-center wow fadeIn"> <img src="images/title-icon.png" alt="Image">
            <h6>LET'S WORK TOGETHER</h6>
            <h2>We always hire talented and <br>
              new people</h2>
          </div>
          <!-- end title-block -->
          <div class="form-group wow fadeIn">
            <label>Your Name</label>
            <input type="text" name='name' placeholder="Type your name">
          </div>
          <!-- end form-group -->
          <div class="form-group wow fadeIn">
            <label>Your E-mail</label>
            <input type="text" name='email' placeholder="Type your e-mail">
          </div>
          <div class="form-group wow fadeIn">
            <label>Your Phone Number</label>
            <input type="text" name='phone' placeholder="Type your Phone Number">
          </div>
          <!-- end form-group -->
          <!--<div class="form-group wow fadeIn">-->
          <!--  <label>Your Resume</label>-->
          <!--  <div class="file"><i class="far fa-file-pdf"></i>-->
          <!--    <input type="file" id="FileAttachment">-->
          <!--    <input type="text" id="fileuploadurl" readonly placeholder="Maximum file size is 1GB">-->
          <!--    <span class="button">SELECT FILE</span></div>-->
            <!-- end file --> 
          <!--</div>-->
          <!-- end form-group -->
          <div class="form-group wow fadeIn">
            <label>Your Message</label>
            <textarea placeholder="Type your message" name='message'></textarea>
          </div>
          <!-- end form-group -->
          <div class="form-group wow fadeIn">
            <input type="submit" name='careerSubmit' value="APPLY NOW">
          </div>
          <!-- end form-group -->
        </form>
      </div>
      <!-- end col-12 --> 
      
      <?php
    
            if (isset($_POST['careerSubmit'])){
                                            
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                // $select = $_POST['select'];
                $message = $_POST['message'];
                
                // echo "enter";
                
                
                $servername = "localhost";
                $username = "awarnodb_awarno";   
                $password = "Md]2x~kPg$*A"; 
                $dbname = "awarnodb_web_awarno";     

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                
                
                

                date_default_timezone_set('Asia/Kolkata');
                $currentTime = date( 'd-m-Y h:i:s A', time () );
               
                $sql = "INSERT INTO career(name, phone, email,message,i_time)VALUES('$name', '$phone', '$email','$message','$currentTime')";
                
                
                
                // $sql = "INSERT INTO inquiry(name, phone, email,website_type,message,i_time)VALUES('$name', '$mobile', '$email','$select','$message','$currentTime')";
                // mysqli_query($conn,$sql);
                
                // mysqli_close($conn);
                
                
                mysqli_query($conn,$sql);
                
                // if (mysqli_query($conn, $sql)) {
                //     echo "New record created successfully";
                // } else {
                //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                // }

    


                mysqli_close($conn);


//----------------------- Sending Mails ----------------------------

                // $to = "awarnodigital@gmail.com";

                // $msg = "<h4>Name : $name</h4><h4>Email : $email</h4><h4>Phone : $phone</h4><h4>Type Of Website : $select</h4><h4>Message : $message</h4>";
                        
                
                // $subject = "Message From Awarno Landing Page";
                // $headers = "From: $email " . "\r\n";
                // $headers .= "MIME-Version: 1.0" . "\r\n";
                // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // $sent = mail($to,$subject,$msg,$headers);

                                            
                // if($sent){ echo '<div class="text-success text-center">
                //                     <strong>Thank You!</strong>
                //                 </div>';
                    
                // }
    }

    ?>
      
      
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

<?php
  include "inc/whatsappSticky.php";
  include "inc/mobileSticky.php";
?>

<?php

  include "inc/footer.php";

?>

</body>
</html>