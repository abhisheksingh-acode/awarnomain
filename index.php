<!doctype html>
<html lang="en">

<head>

  <?php include 'inc/head.php'; ?>
  <?php title("Awarno | Home"); ?>

</head>



<body>

  <?php 
    include 'inc/preloader.php';
    include 'inc/nav.php';
  ?>

  <!-- end page-transition -->


  <header class="header">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-7 col-md-11 col-sm-4">
          <p id="typed-static">Most trusted Digital Partner for your </p>
          <div id="typed-strings">
            <strong>Website Development</strong>
            <strong>App Development</strong>
            <strong>Digital Marketing</strong>
          </div>

          <span id="typed"></span>

          <p class="typed-bottom">
            Awarno is an ambitious web designing company which makes industry level website from cutting edge
            technologies. Our websites will help you in establishing your business online and drive sales exponentially
            with the coordination from our digital marketing team.
          </p>

          <a href="tel:+918595966321" class="callNowTop">Let's Discuss Your Project</a>

        </div>

        <div class="col-lg-4 col-md-1 col-sm-4 phoneHide tabHide">
          <form action="" method="post" class="headerForm tabHide">
            <h4 class="text-center">Sign Up & Get 1 Year Free Hosting</h4>
            <div class="form-group">
              <!-- <label for="contact" >Mobile</label> -->
              <input type="name" name="name" class="form-control" autocomplete="off" placeholder="Name">
            </div>
            <div class="form-group">
              <!-- <label for="contact" >Mobile</label> -->
              <input type="mobile" name="mobile" class="form-control" autocomplete="off" placeholder="Mobile">
            </div>

            <div class="form-group">
              <!-- <label for="contact" >Mobile</label> -->
              <input type="mail" name="email" class="form-control" autocomplete="off" placeholder="Email">
            </div>

            <div class="form-group">
              <!-- <label for="lang">lang</label> -->
              <select class="form-control" name="select" id="lang">
                <option value="#">Business Display Website</option>
                <option value="php">E-Commerce Website</option>
                <option value="php">PHP Website Development</option>
                <option value="php">Static Website Development</option>
                <option value="php">Dynamic Website Development</option>
                <option value="php">Custom Website Development</option>
              </select>
            </div>
            <div class="form-group">
              <!-- <label for="message" >message</label> -->
              <textarea class="form-control" name="textarea" placeholder="Message" rows="3"></textarea>

            </div>

            <input type="submit" name="submit" value="Let's Discuss" class="form-buttonn">

          </form>
          <?php

            if(isset($_POST['submit'])){

              $name = $_POST['name'];
              $mobile = $_POST['mobile'];
              $email = $_POST['email'];
              $select = $_POST['select'];
              $message = $_POST['textarea'];
              
              
              
              $servername = "localhost";
                $username = "awarnodb_awarno";   
                $password = "Md]2x~kPg$*A"; 
                $dbname = "awarnodb_web_awarno";    

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                
                
                

                date_default_timezone_set('Asia/Kolkata');
                $currentTime = date( 'd-m-Y h:i:s A', time () );
               
                $sql = "INSERT INTO inquiry(name, phone, email,website_type,message,i_time)VALUES('$name', '$mobile', '$email','$select','$message','$currentTime')";
                mysqli_query($conn,$sql);
                
                mysqli_close($conn);

                
                
                
                
                
  
              $to = "awarnodigital@gmail.com";
              $txt = "Name :" . $name . "\r\n" . "Mobile :" . $mobile . "\r\n" . "Type Of Website :" . $select . "\r\n" . "Message :" . $message ;
              $subject = "Website Needed" . $select;
              $headers = "From: ". $email;

              $sent = mail($to,$subject,$txt,$headers);

              if(!$sent){
                echo "<p style='color:#fff;'>Message Not Sent</p>";
              }else{
                echo "<p style='color:#fff;'>Thank You! Message Sent Successfully</p>";
              }


            }
            
            

            ?>





        </div>

        <!-- end inner -->

        <div class="col-md-1 col-sm-3">

          <?php include 'inc/header-social.php'; ?>

        </div>

        <!-- end social-media -->

      </div>

    </div>

    <!-- end containe -->

    <a class="calling phoneHide" href="tel:+919773958145"><i class="fa fa-phone"></i></a>

  </header>

  <!-- end header -->

  <section class="desktopHide tabShow">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form class="headerForm">
            <h4 class="text-center">Sign Up & Get 1 Year Free Hosting</h4>
            <div class="form-group">
              <!-- <label for="contact" >Mobile</label> -->
              <input type="name" name="name" class="form-control" autocomplete="off" placeholder="Name">
            </div>
            <div class="form-group">
              <!-- <label for="contact" >Mobile</label> -->
              <input type="mobile" name="mobile" class="form-control" autocomplete="off" placeholder="Mobile">
            </div>

            <div class="form-group">
              <!-- <label for="contact" >Mobile</label> -->
              <input type="mail" name="email" class="form-control" autocomplete="off" placeholder="Email">
            </div>

            <div class="form-group">
              <!-- <label for="lang">lang</label> -->
              <select class="form-control" id="lang">
                <option value="#">---</option>
                <option value="php">E-Commerce Website</option>
                <option value="php">PHP Website Development</option>
                <option value="php">Static Website Development</option>
                <option value="php">.Dynamic Website Development</option>
                <option value="php">.Custom Website Development</option>
              </select>
            </div>
            <div class="form-group">
              <!-- <label for="message" >message</label> -->
              <textarea class="form-control" placeholder="Message" rows="3"></textarea>

            </div>

            <input type="submit" value="Let's Discuss" class="form-buttonn">

          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- our partner sections  -->

  <section class="partner2">

    <div class="container-fluid bg-white shad hidd">
      <div class="row">
        <div class="col-lg-2 col-3">
          <div class="inner2">
            <h6>CLIENT</h6>
          </div>
        </div>
        <div class="col-lg-10 col-7">
          <!-- <div class="row"> -->
          <!-- <div class="col-12"> -->
          <div class="outerWrapper">
            <div class="animatedBox">
              <div class="imgBox">
                <img src="images/partnerv1.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/partnerv2.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/partnerv3.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/motiMahalLogo.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/SWATI-Reiki-Master.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/mudy.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/ujjawal solar.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/lakefront-krafts.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/shopmall.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/partnerv4.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/ZOOM-LEATHER-FURNITURE-.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/yummyworld.jpeg" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/taasur.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/theplantsworld.png" class="img-fluid" alt="" />
              </div>





              <!-- REPETED FIRST 5 IMAGES -->

              <div class="imgBox">
                <img src="images/partnerv1.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/partnerv2.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/partnerv3.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/partnerv4.png" class="img-fluid" alt="" />
              </div>

              <div class="imgBox">
                <img src="images/partnerv3.png" class="img-fluid" alt="" />
              </div>

            </div>

          </div>

        </div>

        <!-- </div> -->

        <!-- </div> -->



      </div>

      <!-- end row -->

    </div>



    <!-- end container -->

  </section>

  <!-- end content-block -->





  <section class="content-block">
    <div class="container">
      <div class="row align-items-center interactive">
        <div class="col-lg-6 wow fadeIn">
          <div class="text-content-block">
            <h6>COLLABRATION WITH US</h6>
            <h2>How we stand out</h2>
            <p>Awarno is a team of young and experienced developers who solely believes on the principle of 3Ds Design,
              Develop &amp; Deliver robust website, mobile app and custom software solutions which ignite innovation
              and deliver digital success. We believe that every project is an important milestone in our journey of
              becoming India's best digital company.</p>


            <div class="row">
              <div class="col-6">
                <div class="custom-widgets-item">
                  <div class="widget-img">
                    <img src="images/project-delivered.png" alt="Image">
                  </div>
                  <div class="widget-content">
                    <h4>200+</h4>
                    <p>PROJECTS DELIVERED</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-widgets-item">
                  <div class="widget-img">
                    <img src="images/happy-client.png" alt="Image">
                  </div>
                  <div class="widget-content">
                    <h4>350+</h4>
                    <p>Happy Clients</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-widgets-item">
                  <div class="widget-img">
                    <img src="images/awwards.png" alt="Image">
                  </div>
                  <div class="widget-content">
                    <h4>5+</h4>
                    <p>Awards Received</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-widgets-item">
                  <div class="widget-img">
                    <img src="images/industries-served.png" alt="Image">
                  </div>
                  <div class="widget-content">
                    <h4>20+</h4>
                    <p>Industries Served</p>
                  </div>
                </div>
              </div>
            </div>




            <a href="tel:+918595966321">GET QUOTED</a>

          </div>

          <!-- end text-content-block -->

        </div>

        <!-- end col-6 -->

        <div class="col-lg-3 col-md-6 wow fadeIn tabHide">

          <figure class="image-box imghide" data-stellar-ratio="1.3"> <img src="images/p4.jpg" alt="Image"
              class="img-fluid">
          </figure>

        </div>

        <!-- end col-3 -->

        <div class="col-lg-3 col-md-6 wow fadeIn tabHide">

          <figure class="image-box imghide" data-stellar-ratio="1.1"> <img src="images/p1n.jpg" alt="Image"
              class="img-fluid"> </figure>

        </div>

        <!-- end col-3 -->

      </div>

      <!-- end row -->

    </div>

    <!-- end container -->

  </section>

  <!-- technology section hide temp  -->
  <!-- end content-block -->
  <section class="d-none">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="techno-tit">Technologies We Rely On</h2>
        </div>
      </div>

      <div class="row no-gutters">
        <div class="col-12 wow fadeIn">
          <div class="carousel-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure> <img src="images/bt.png" alt="Image" class="img-fluid">
                  <figcaption> <small> TECHNOLOGY</small>
                    <h3><a href="#">Backend Development</a></h3>
                  </figcaption>
                </figure>
              </div>


              <div class="swiper-slide">
                <figure> <img src="images/app1.png" alt="Image" class="img-fluid">
                  <figcaption> <small>TECHNOLOGY</small>
                    <h3><a href="#">App Development</a></h3>
                  </figcaption>
                </figure>
              </div>


              <div class="swiper-slide">
                <figure> <img src="images/fd.png" alt="Image" class="img-fluid">
                  <figcaption> <small>TECHNOLOGY</small>
                    <h3><a href="#">Frontend Development</a></h3>
                  </figcaption>
                </figure>
              </div>


              <div class="swiper-slide">
                <figure> <img src="images/uiux2.png" alt="Image">
                  <figcaption> <small>TECHNOLOGY</small>
                    <h3><a href="#">UI-UX Designer</a></h3>
                  </figcaption>
                </figure>
              </div>



            </div>

            <div class="swiper-button-prev top-swiper"><i class="fas fa-chevron-left"></i></div>
            <div class="swiper-button-next bottom-swiper"><i class="fas fa-chevron-right"></i></div>
          </div>
        </div>

        <!-- end col-12 -->

      </div>

      <!-- end row -->

    </div>

  </section>
  <!-- end content-block -->

  <!-- our services section rebuild  -->
  <section class="text-center py-5 container-fluid mx-auto" id="our-service">
    <h2>Our Services</h2>

    <!-- our services card container  -->
    <div class="container-md-fluid container-lg container-fluid mx-auto d-flex justify-content-around service-card-container row ">

      <div class="service-cards col-12 col-md-12 col-lg-4 mx-auto ">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <img src="./images/awarno-favicon.png" alt="" class="service-card-png">
              <h3>Web <br> Development</h3> 
            </div>
            <div class="card-text">
                  <p>We’ve mastered the top web technologies to deliver projects that have raked in
                  investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="service-cards col-12 col-md-12 col-lg-4 mx-auto ">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <img src="./images/awarno-favicon.png" alt="" class="service-card-png">
              <h3>Web <br> Development</h3>
            </div>
            <div class="card-text">
                  <p>We’ve mastered the top web technologies to deliver projects that have raked in
                  investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="service-cards col-12 col-md-12 col-lg-4 mx-auto ">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <img src="./images/awarno-favicon.png" alt="" class="service-card-png">
              <h3>Web <br> Development</h3>
            </div>
            <div class="card-text">
                  <p>We’ve mastered the top web technologies to deliver projects that have raked in
                  investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="service-cards col-12 col-md-12 col-lg-4 mx-auto ">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <img src="./images/awarno-favicon.png" alt="" class="service-card-png">
              <h3>Web <br> Development</h3>
            </div>
            <div class="card-text">
                  <p>We’ve mastered the top web technologies to deliver projects that have raked in
                  investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="service-cards col-12 col-md-12 col-lg-4 mx-auto ">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <img src="./images/awarno-favicon.png" alt="" class="service-card-png">
              <h3>Web <br> Development</h3>
            </div>
            <div class="card-text">
                  <p>We’ve mastered the top web technologies to deliver projects that have raked in
                  investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="service-cards col-12 col-md-12 col-lg-4 mx-auto ">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <img src="./images/awarno-favicon.png" alt="" class="service-card-png">
              <h3>Web <br> Development</h3>
            </div>
            <div class="card-text">
                  <p>We’ve mastered the top web technologies to deliver projects that have raked in
                  investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="service-cards col-12 col-md-12 col-lg-4 mx-auto ">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <img src="./images/awarno-favicon.png" alt="" class="service-card-png">
              <h3>Web <br> Development</h3>
            </div>
            <div class="card-text">
                  <p>We’ve mastered the top web technologies to deliver projects that have raked in
                  investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="service-cards col-12 col-md-12 col-lg-4 mx-auto ">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <img src="./images/awarno-favicon.png" alt="" class="service-card-png">
              <h3>Web <br> Development</h3>
            </div>
            <div class="card-text">
                  <p>We’ve mastered the top web technologies to deliver projects that have raked in
                  investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="service-cards col-12 col-md-12 col-lg-4 mx-auto ">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <img src="./images/awarno-favicon.png" alt="" class="service-card-png">
              <h3>Web <br> Development</h3>
            </div>
            <div class="card-text">
                  <p>We’ve mastered the top web technologies to deliver projects that have raked in
                  investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- end content block  -->




  <!-- circle -->
  <section class="scrubSec text-center">
    <h2>Our Workflow</h2>
    <div class="container">
      <div class="row yooy">
        <div class="col-md-4 col-sm-4 col-7 rel appear text-white">
          <p>Firstly we design whole project on PSD and Figma and get it approved from our clients.</p>


          <p class="align-middle desktopHide">After confirming, about UI/UX our developing team works on Backend and
            Frontend.</p>

          <p>Finally we debug and deploy on our server.</p>

          <img src="images/development.png" class="img-fluid phoneHide" alt="">

        </div>

        <div class="col-md-4 col-sm-4 col-5 mt-5 pt-4">
          <div class="outerDiv">
            <div class="fillLine1">
              <div class="fillBox1">
                <div class="c1">
                  <p>UI/UX</p>
                </div>

                <div class="c2">
                  <p>Develop</p>
                </div>

                <div class="c3">
                  <p>Deploy</p>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-4 rel text-white appear2">
          <p class="align-middle phoneHide">After confirming, about UI/UX our developing team works on Backend and
            Frontend.</p>

          <img src="images/ux-design.png" class="img-fluid phoneHide" alt="">
          <img src="images/deploy.png" class="img-fluid phoneHide" alt="">
        </div>

      </div>
    </div>

  </section>
  <!-- circle end -->



  <!-- Pin screen Content  -->

  <!-- <section class="section100 triggerPin">
    <div class="container">
      <div class="row section100 justify-content-center align-items-center">
        <div class="col-lg-4 text-center">
          <div class="no1">
            <h2>Hello</h2>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="no2">
            <h2>HOw Are YOu ??</h2>
          </div>
        </div>

        <div class="col-lg-4 text-center">
          <div class="no3">
            <h2>What Are You Doing ???</h2>
          </div>

        </div>
      </div>
    </div>
  </section> -->

  <!-- <div id="fullpage">
    <div class="fullSectionA">A</div>
    <div class="fullSectionB">B</div>
    <div class="fullSectionC">C</div>
    <div class="fullSectionD">D</div>
  </div> -->

  <!-- tab panels start -->


  <!-- <section>
    <div class="container h111">
      <div class="row">
        <div class="col-lg-3 col-3 text-center">
          <button class="tabBtn boxW" tab-id="boxW"></button>
        </div>
        <div class="col-lg-3 col-3 text-center">
          <button class="tabBtn boxA" tab-id="boxA"></button>
        </div>
        <div class="col-lg-3 col-3 text-center">
          <button class="tabBtn boxD" tab-id="boxD"></button>
        </div>
        <div class="col-lg-3 col-3 text-center">
          <button class="tabBtn boxC" tab-id="boxC"></button>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="content-box" id="boxW">
            <div class="row p-3">
              <div class="col-lg-4">
                <div class="contentImg">
                  <img src="images/app.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <h2>Website Development</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s. </p>
                <i class="fas fa-mobile-alt fa-2x"></i>
                <i class="fas fa-laptop-code fa-2x ml-2"></i>
                <i class="fas fa-mobile-alt fa-2x ml-2"></i>
              </div>
            </div>
          </div>

          <div class="content-box" id="boxA">
            <div class="row p-3">
              <div class="col-lg-4">
                <div class="contentImg">
                  <img src="images/app.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <h2>Android Development</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s. </p>
                <i class="fas fa-mobile-alt fa-2x"></i>
                <i class="fas fa-laptop-code fa-2x ml-2"></i>
                <i class="fas fa-mobile-alt fa-2x ml-2"></i>
              </div>
            </div>
          </div>

          <div class="content-box" id="boxD">
            <div class="row p-3">
              <div class="col-lg-4">
                <div class="contentImg">
                  <img src="images/app.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <h2>Linux Development</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s. </p>
                <i class="fas fa-mobile-alt fa-2x"></i>
                <i class="fas fa-laptop-code fa-2x ml-2"></i>
                <i class="fas fa-mobile-alt fa-2x ml-2"></i>
              </div>
            </div>
          </div>

          <div class="content-box" id="boxC">
            <div class="row p-3">
              <div class="col-lg-4">
                <div class="contentImg">
                  <img src="images/app.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <h2>Aws Hosting</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s. </p>
                <i class="fas fa-mobile-alt fa-2x"></i>
                <i class="fas fa-laptop-code fa-2x ml-2"></i>
                <i class="fas fa-mobile-alt fa-2x ml-2"></i>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section> -->


  <!-- <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <img src="images/onePLus.png" class="img-fluid" alt="">

        </div>
        <div class="col-lg-9">
          <h2>Hello World</h2>
          <p>Entrepreneurs, artist, athletes and other individuals who have Customer Based Digital Solutions <br>
            for Your Company.</p>
        </div>
        <p>
          
        </p>
      </div>
    </div>
  </section> -->

  <section class="phoneHide d-none">
    <div class="container-fluid bg-core p-5">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="title-block2">
            <img src="images/title-icon.png" lt="Image">
            <h6>SOLUTIONS WE PROVIDE</h6>
            <h2>Our Core Services</h2>
          </div>
        </div>
      </div>
      <div class="row mt-lg-5 mt-md-0 mt-5">
        <div class="col-lg-4 bg-core">
          <div class="core-services">
            <div class="service-icon">
              <img src="images/icon04.png" class="img-fluid" alt="">
            </div>
            <h3>Web <br> Development</h3>
            <p>We’ve mastered the top web technologies to deliver projects that have raked in
              investments. A trusted market leader in developing high performing web fronts for every business. Our
              Mobile Friendly websites are suitable for every device.</p>

          </div>
        </div>
        <div class="col-lg-4">
          <div class="core-services">
            <div class="service-icon">
              <img src="images/mobile-development.png" class="img-fluid" alt="">
            </div>
            <h3>Mobile <br> Development</h3>
            <p>Our talented experts promise to turn client’s ideas into living and running mobile apps, be it for
              Android or IOS. We focus on an interactive user interface that needs to be coupled with flawless
              functionality to make any app a success in the industry.</p>

          </div>
        </div>
        <div class="col-lg-4">
          <div class="core-services">
            <div class="service-icon">
              <img src="images/digital-marketing.png" class="img-fluid" alt="">
            </div>
            <h3>Digital <br>Marketing</h3>
            <p>With our passionate and dedicated digital marketing geeks, we help businesses reach their full online
              potential and keep them updated with the latest trends to create innovative solutions to drive desired
              results. </p>

          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="desktopHide d-none">
    <div class="container-fluid bg-core py-5">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="title-block"> <img src="images/title-icon.png" lt="Image">
            <h6>SOLUTIONS WE PROVIDE</h6>
            <h2>Our Core Services</h2>
          </div>
        </div>
      </div>
      <div class="row mt-md-5 mt-0">
        <div class="col-lg-3 bg-core">
          <div class="core-services">
            <div class="service-icon">
              <img src="images/icon04.png" class="img-fluid" alt="">
            </div>
            <h3>Web <br> Development</h3>
            <p>We’ve mastered the top web technologies to deliver projects that have raked in
              investments. A trusted market leader in developing high performing web fronts for every business.</p>


          </div>
        </div>
        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="core-services">
            <div class="service-icon">
              <img src="images/mobile-development.png" class="img-fluid" alt="">
            </div>
            <h3>Mobile App <br> Development</h3>
            <p>Our talented experts promise to turn client’s ideas into living and running mobile apps, be it for
              Android or IOS. We focus on an interactive user interface that needs to be coupled with flawless
              functionality to make any app a success in the industry.</p>


          </div>
        </div>
        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="core-services">
            <div class="service-icon">
              <img src="images/icon04.png" class="img-fluid" alt="">
            </div>
            <h3>Digital <br> Marketing</h3>
            <p>With our passionate and dedicated digital marketing geeks, we help businesses reach their full online
              potential and keep them update with the latest trends to create innovative solutions to drive desired
              results.</p>


          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="core-services">
            <div class="service-icon">
              <img src="images/digital-marketing.png" class="img-fluid" alt="">
            </div>
            <h3>Social Media <br> Marketing</h3>
            <p>Our social media advertising services have been tested and proven to accelerate growth with high-quality
              content, daily activity, monitoring-engagement, and increased followers. It will help you stay top of mind
              and speed up your sales cycle. We try our best to give our clients more results at the minimum cost
              possible.</p>


          </div>
        </div>

      </div>
    </div>
    </div>
    </div>
  </section>



  <!-- <section class="content-block">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-12 wow fadeIn">
          <div class="title-block"> <img src="images/title-icon.png" lt="Image">
            <h6>SOLUTIONS WE PROVIDE</h6>
            <h2>Customer Based Digital Solutions <br>
              for Your Company</h2>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 wow fadeIn">
          <div class="icon-content-box">
            <figure> <img src="images/icon01.png" alt="Image"> </figure>
            <h5>IT Hardware</h5>
            <p>Entrepreneurs, artist, athletes and other individuals who have </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 wow fadeIn">
          <div class="icon-content-box">
            <figure> <img src="images/icon02.png" alt="Image"> </figure>
            <h5>Support Desk</h5>
            <p>Entrepreneurs, artist, athletes and other individuals who have </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 wow fadeIn">
          <div class="icon-content-box">
            <figure> <img src="images/icon03.png" alt="Image"> </figure>
            <h5>Data Storage</h5>
            <p>Entrepreneurs, artist, athletes and other individuals who have </p>
          </div>
        </div>

        <div class="inner-spacing"></div>
        <div class="col-lg-3 col-md-4 wow fadeIn">
          <div class="icon-content-box">
            <figure> <img src="images/icon04.png" alt="Image"> </figure>
            <h5>Software Dev</h5>
            <p>Entrepreneurs, artist, athletes and other individuals who have </p>
          </div>
        </div>


        <div class="col-lg-3 col-md-4 wow fadeIn">
          <div class="icon-content-box">
            <figure> <img src="images/icon05.png" alt="Image"> </figure>
            <h5>Digital Security</h5>
            <p>Entrepreneurs, artist, athletes and other individuals who have </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end content-block -->



  <section>

    <div class="container-fluid p-5">
      <h6 class="project-title text-center">Our Portfolio</h6>
      <h3 class="project-title2 text-center">More Portfolio</h3>
      <div class="row justify-content-around mt-4">

        <div class="col-lg-3 col-md-5 col-sm-12 mt-4">
          <div class="outerWrap">
            <div class="abb">
              <img src="images/hover6.png" class="img-fluid" />
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-sm-12 mt-4">
          <div class="outerWrap">
            <div class="abb">
              <img src="images/hover10.png" class="img-fluid" />
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-sm-12 mt-4 mt-lg-4 mt-md-5">
          <div class="outerWrap">
            <div class="abb">
              <img src="images/hover12.png" class="img-fluid" />
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-sm-12 mt-4 mt-lg-4 mt-md-5 phoneHide">
          <div class="outerWrap">
            <div class="abb">
              <img src="images/hover2.png" class="img-fluid" />
            </div>
          </div>
        </div>

      </div>

      <a class="btn btn-primary portfolio_button" href="portfolio.php" role="button">MORE PORTFOLIO</a>
    </div>
  </section>


  <!-- CAse Studies -->

  <section>
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-6 py-3 text-right text-white bg-blue">
          <h2 class="mb-0">CASE</h2>
        </div>
        <div class="col-6 py-3 col-blue">
          <h2 class="mb-0"><b>STUDIES</b></h2>
        </div>
      </div>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="row">
              <div class="col-lg-6">
                <img src="images/moti-mahal.jpg" alt="">
              </div>
              <div class="col-lg-6 px-lg-2 px-md-5 d-flex align-items-center">
                <div class="text-content-block">

                  <h6>CASE STUDY 1</h6>

                  <h3>Moti Mahal Group</h3>

                  <p>Moti Mahal is a global chain of restaurants with 150 franchises. Inventor of Tandoori Chicken and
                    Dal Makhni. Our development team helped motimahalgroup.com to expand their business online.</p>

                  <div class="row">
                    <div class="col-lg-10">
                      <img src="images/moti-mahal-case.png" alt="">
                    </div>
                  </div>

                  <a class="support" href="https://motimahalgroup.com">VISIT WEBSITE</a>

                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row">
              <div class="col-lg-6">
                <img src="images/healthyments.jpg" alt="">
              </div>
              <div class="col-lg-6 px-lg-2 px-md-5 d-flex align-items-center">
                <div class="text-content-block">

                  <h6>CASE STUDY 2</h6>

                  <h3>Healthyments</h3>

                  <p>Healthyments is one of the India's very few gummies supplement brand. Their products are being
                    loved by many of instagram influencers. Combined efforts of our developing and branding team helped
                    healthyments to grow as a brand on instagram and google both. </p>

                  <div class="row">
                    <div class="col-lg-10">
                      <img src="images/healthyments-case.png" alt="">
                    </div>
                  </div>

                  <a class="support" href="https://healthyments.com">VISIT WEBSITE</a>

                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row">
              <div class="col-lg-6">
                <img src="images/ujjawal-solar.jpg" alt="">
              </div>
              <div class="col-lg-6 px-lg-2 px-md-5 d-flex align-items-center">
                <div class="text-content-block">

                  <h6>CASE STUDY 3</h6>

                  <h3>Ujjawal Solar</h3>

                  <p>Ujjawal Solar is the India's largest mono perc solar manufacturers at Pan India level. We have
                    provided them the most powerful ecommerce website to establish their store online.</p>

                  <div class="row">
                    <div class="col-lg-10">
                      <img src="images/ujjawal-solar-case.png" alt="">
                    </div>
                  </div>

                  <a class="support" href="https://ujjawalsolar.com">VISIT WEBSITE</a>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next">
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="swiper-button-prev">
          <i class="fas fa-chevron-left"></i>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination">
          <i class="far fa-circle"></i>
        </div>
      </div>
    </div>
  </section>


  <!-- CAse Studies Ending -->


  <!-- technology section hide temp  -->
  <!-- end content-block -->
  <section class="mt-4">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="techno-tit">Technologies We Rely On</h2>
        </div>
      </div>

      <div class="row no-gutters">
        <div class="col-12 wow fadeIn">
          <div class="carousel-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure> <img src="images/bt.png" alt="Image" class="img-fluid">
                  <figcaption> <small> TECHNOLOGY</small>
                    <h3><a href="#">Backend Development</a></h3>
                  </figcaption>
                </figure>
              </div>


              <div class="swiper-slide">
                <figure> <img src="images/app1.png" alt="Image" class="img-fluid">
                  <figcaption> <small>TECHNOLOGY</small>
                    <h3><a href="#">App Development</a></h3>
                  </figcaption>
                </figure>
              </div>


              <div class="swiper-slide">
                <figure> <img src="images/fd.png" alt="Image" class="img-fluid">
                  <figcaption> <small>TECHNOLOGY</small>
                    <h3><a href="#">Frontend Development</a></h3>
                  </figcaption>
                </figure>
              </div>


              <div class="swiper-slide">
                <figure> <img src="images/uiux2.png" alt="Image">
                  <figcaption> <small>TECHNOLOGY</small>
                    <h3><a href="#">UI-UX Designer</a></h3>
                  </figcaption>
                </figure>
              </div>



            </div>

            <div class="swiper-button-prev top-swiper"><i class="fas fa-chevron-left"></i></div>
            <div class="swiper-button-next bottom-swiper"><i class="fas fa-chevron-right"></i></div>
          </div>
        </div>

        <!-- end col-12 -->

      </div>

      <!-- end row -->

    </div>

  </section>
  <!-- end content-block -->


  <section class="content-block no-spacing">
    <div class="container">
      <div class="row no-gutters align-items-center">
        <div class="col-lg-6 wow fadeIn">
          <img src="images/novosmm.png" alt="image">
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6 wow fadeIn">
          <div class="text-content-block">
            <h6>Awarno IT & DIGITAL SOLUTIONS</h6>
            <h2>Vision Base of Awarno About<br> High Quality Solutions </h2>

            <p>Our Websites are beautifully designed in a very smart way to bring the best user experience that you will
              love. Our Websites have Sales Boosting features that brings you 5X sales compare to offline market.</p>


            <a href="#">ABOUT AWARNO</a>

          </div>
          <!-- end text-content-block -->
        </div>
        <!-- end col-6 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container-fluid -->
  </section>

  <!-- end content-block -->

  <section class="content-block no-bottom-spacing">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-6 order-12 order-md-1 wow fadeIn">
          <div class="text-content-block">

            <h6>INTERACTIVE SUPPORT</h6>

            <h2>Quickest Support Desk for<br> All Awarno User</h2>

            <p>We come up with the best customer support when it comes to solving our clients' indecision over what to
              do next. Our well-skilled team members provide you with 24x7 help desk support for daily on-site issues.
              The best about us is that we don't charge additional fees, it helps our customers to ask various questions
              about our company or their on-going projects. </p>

            <figure> <img src="images/iconset02.png" alt="Image"> </figure>

            <a class="support" href="#">GET SUPPORT</a>

          </div>
        </div>

        <div class="col-sm-6 order-1 order-md-12 wow fadeIn">
          <figure class="image"> <img src="images/p3.png" alt="Image"> </figure>
        </div>

      </div>
    </div>

    <!-- end container -->
  </section>

  <!-- end content-block -->

  <!-- <section class="content-block custom-block bg-image bg-blue">
    <div class="container wow fadeIn">
      <h6>DIRECT CONSULTATION</h6>
      <h2>The Bank of Iceland reaches <br> a new crowd with </h2>
      <a href="#">GET A QUOTE</a>
    </div>
  </section> -->

  <!-- end content-block -->

  <!-- <-----hover slider section--------------------->




  <!------------------ End Content Section ------------->

  <section class="content-block">
    <div class="title-block text-center wow fadeIn"> <img src="images/title-icon.png" alt="Image">
      <h6>HONEST REVIEWS</h6>
      <h2>Amazing Awarno Customers and<br> Users Testimonials</h2>
    </div>

    <!-- end title-block -->
    <div class="testimonials-slider wow fadeIn">
      <div class="swiper-wrapper">
        <div class="swiper-slide">

          <div class="testimonial">
            <blockquote>Putting together a website is a task, finding the right individual or company is even more
              complex. I did my search around looking for this particular company that has the ability to create, design
              and optimized my web site. Thank God I met Awarno, not only they have great taste in design but they can
              guide you through the process and beyond
            </blockquote>

            <figure>
              <figcaption>
                <h6> Motimahal Group</h6>
                <small>kuvam gujral</small>
              </figcaption>
            </figure>

          </div>
          <!-- end testimonial-->
        </div>
        <!-- end swiper-slide -->

        <div class="swiper-slide">
          <div class="testimonial">
            <blockquote>Excellent, working with web designers of Awarno was great. Thanks to their knowledge and
              determination our website looks great and functions really good. I recommend anyone that is looking for a
              custom website to give them a call and speak to Awarno, They will guide you to the right direction.
            </blockquote>

            <figure>
              <figcaption>
                <h6> UjjawalSolar </h6>
                <small>Devender</small>
              </figcaption>
            </figure>

          </div>
          <!-- end testimonial-->
        </div>

        <!-- end swiper-slide -->

        <div class="swiper-slide">
          <div class="testimonial">
            <blockquote>Great design team and quick turn around on all projects and request. With their help we have
              improved our google search results. My company Healthyments has depended on them for quite sometime now
              and we have been doing business with them for over an year. Their web designing team is very knowledgeable
              and they always let us know when a new Google update is coming up before anyone even knows. If you want a
              reliable Web Design Company in Delhi I recommend them 100%
            </blockquote>

            <figure>
              <figcaption>
                <h6>Healthyments</h6>
                <small>Ishan</small>
              </figcaption>
            </figure>

          </div>
          <!-- end testimonial-->
        </div>

        <!-- end swiper-slide -->

        <div class="swiper-slide">
          <div class="testimonial">
            <blockquote>Honestly, very rarely I write a review with my opinion or experience but now I have the
              intention to help people who want to be successful in the online business. After searching and dealing
              with different designers and developers without success, I finally found Awarno web development and they
              put color, flavor and efficiency to my project, we are working together for more than a year in various
              designs such as logos, labels, web pages and we are currently optimizing our main website, implementing
              new strategies to make more attractive our products to the market and increase conversion. If you need a
              team working with you from A to Z, Awarno is the company. Thanks to all the team for the support.
            </blockquote>

            <figure>
              <figcaption>
                <h6>Taassur</h6>
                <small>Priyam</small>
              </figcaption>
            </figure>

          </div>
          <!-- end testimonial-->
        </div>

        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
    </div>
    <!-- end carousel-slider -->
  </section>

  <!-- end content-block -->

  <section class="content-block bg-pattern no-bottom-spacing imghide">
    <div class="container">
      <div class="row">
        <div class="col-12 wow fadeIn">
          <div class="text-content-block">
            <h6>AUTHORS ARTICLES</h6>
            <h2>Awarno Team Posts Amazing<br> Articles About IT</h2>
          </div>
          <!-- end text-content-block -->
        </div>

        <!-- end col-12 -->
        <div class="col-lg-4 col-md-6 wow fadeIn ">
          <div class="news-box head-news">
            <figure class="news-image"><img src="images/blog1.jpg" alt="Image"></figure>
            <!--<figure class="news-image"><img src="https://cdn.logojoy.com/wp-content/uploads/20190423164609/Asset-22%404x.png" alt="Image"></figure>-->

            <div class="news-content"> <b>01, Sepmteber 2019</b>
              <h4><a href="blog2.php">
                  15 Ways A Website Will Grow Your Business.</a> </h4>

              <figure>
                <figcaption>

                </figcaption>
              </figure>

            </div>
            <!-- end news-content -->
          </div>
          <!-- end news-box -->
        </div>

        <!-- end col-6 -->

        <div class="col-lg-4 col-md-6 wow fadeIn">
          <div class="news-box">
            <figure class="news-image" style="height: 223px;"><img src="images/social-media-marketing-3.jpg" alt="Image"
                class="img-fluid" style="background-color: #490eea;"></figure>
            <div class="news-content"> <b>01, Sepmteber 2019</b>
              <h4><a href="blog2.php">14 Important Benefits of Social Media Marketing Every Business Should Know. </a>
              </h4>
              <figure>
                <figcaption>

                </figcaption>
              </figure>
            </div>
            <!-- end news-content -->
          </div>
          <!-- end news-box -->
        </div>
        <!-- end col-3 -->

        <div class="col-lg-4 col-md-6 wow fadeIn tabHide">
          <div class="news-box">
            <!--<figure class="news-image"><img src="images/news01.jpg" alt="Image" class="img-fluid"></figure>-->
            <figure class="news-image"><img src="images/blog3.png" alt="Image" class="img-fluid"></figure>
            <div class="news-content"> <b>01, Sepmteber 2019</b>
              <h4><a href="blog3.php">How Do Online Businesses Make Money? 5 Types of Revenue for an Online
                  Business.</a></h4>
              <figure>
                <figcaption>

                </figcaption>
              </figure>
            </div>
            <!-- end news-content -->
          </div>

          <!-- end news-box -->
        </div>
        <!-- end col-3 -->
      </div>
      <!-- end row -->
    </div>

    <!-- end container -->



  </section>

  <!-- end content-block -->



  <!-- blog slider  -->

  <section class="bg-pattern no-bottom-spacing blog-show">
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-12 wow fadeIn">
          <div class="text-content-block">
            <h6>AUTHORS ARTICLES</h6>
            <h2>Awarno Team Posts Amazing<br>
              Articles About IT</h2>
          </div>
        </div>
        <div class="col-12 wow fadeIn">
          <div class="carousel-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card">




                  <img class="card-img-top" src="images/blog1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-subtitle"><b>01, Sepmteber 2019</b></h6>
                    <h3 class="card-title"><a href="#">15 ways A website will grow your Business.</a></h3>


                  </div>
                </div>
              </div>
              <!-- end swiper-slide -->

              <div class="swiper-slide">
                <div class="card">
                  <img class="img-card-top" src="images/social-media-marketing-3.jpg" alt="">
                  <div class="card-body">
                    <h6 class="card-subtitle"><b>01, Sepmteber 2019</b></h6>
                    <h3 class="card-title"><a href="#">Visitors learn about Iceland’s glaciers their effect on the land
                        of homeland.</a></h3>

                  </div>
                </div>
              </div>

              <!-- end swiper-slide -->

              <div class="swiper-slide">

                <div class="card">

                  <img class="img-card-top" src="images/blog3.png" alt="">

                  <div class="card-body">

                    <h6 class="card-subtitle"><b>01, Sepmteber 2019</b></h6>

                    <h3 class="card-title"><a href="#">Visitors learn about Iceland’s glaciers their effect on the land
                        of homeland.</a></h3>



                  </div>

                </div>

              </div>

              <!-- end swiper-slide -->





            </div>

            <!-- end swiper-wrapper -->

            <div class="swiper-pagination"></div>

            <!-- end swiper-pagination -->

            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>

            <!-- end button-prev -->

            <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>

            <!-- end button-next -->

          </div>

          <!-- end carousel-slider -->

        </div>

        <!-- end col-12 -->

      </div>

      <!-- end row -->

    </div>

  </section>

  <!-- blog slider end -->


  <!-- <section class="content-block pricing-block">

    <div class="container">

      <div class="row align-items-center">

        <div class="col-lg-5 wow fadeIn">

          <div class="text-content-block">

            <h6>JOIN OUR COMMUNITY</h6>

            <h2> Most Reasonable Price <br>

              Unique Provides</h2>

            <div class="switcher">

              <div class="holder">

                <div class="button"></div>

              </div>

              YEARLY

            </div>

            <a href="#">SEE ALL PLANS</a>

          </div>

        </div>

        <div class="col-lg-7 wow fadeIn">

          <div class="row inner monthly">

            <div class="col-md-6">

              <div class="price-box">

                <figure> <img src="images/icon06.png" alt="Image"> </figure>

                <h6>STARTER</h6>

                <b><span>$</span> 69.90 <small>/ Monthly</small></b>

                <p>Individuals who have excelled in their field share fun and inspiring stories from their journey to

                  success.</p>

                <a href="#">SELECT NOW</a>

              </div>

            </div>

            <div class="col-md-6">

              <div class="price-box">

                <figure> <img src="images/icon07.png" alt="Image"> </figure>

                <h6>ADVANCED</h6>

                <b><span>$</span> 99.90 <small>/ Monthly</small></b>

                <p>Individuals who have excelled in their field share fun and inspiring stories from their journey to

                  success.</p>

                <a href="#">SELECT NOW</a>

              </div>

            </div>

          </div>

          <div class="row inner yearly">

            <div class="col-md-6">

              <div class="price-box">

                <figure> <img src="images/icon04.png" alt="Image"> </figure>

                <h6>STARTER</h6>

                <b><span>$</span> 169.90 <small>/ Yearly</small></b>

                <p>Globally incubate standards compliant channels before scalable benefits field share fun inspiring

                  stories.</p>

                <a href="#">SELECT NOW</a>

              </div>

            </div>

            <div class="col-md-6">

              <div class="price-box">

                <figure> <img src="images/icon05.png" alt="Image"> </figure>

                <h6>ADVANCED</h6>

                <b><span>$</span> 199.90 <small>/ Yearly</small></b>

                <p>Globally incubate standards compliant channels before scalable benefits field share fun inspiring

                  stories.</p>

                <a href="#">SELECT NOW</a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section> -->


  <section class="mb-80">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 p-0">
          <figure class="image wow fadeIn"><img src="images/pf.png" alt="Image" class="img-fluid"> </figure>
        </div>
      </div>
    </div>



  </section>

  <section class="subscription-block">
    <div class="container">
      <div class="subscribe-box">
        <div class="inner wow fadeIn">
          <h2>Subscribe for Members</h2>
          <form>
            <input type="email" name='semail' placeholder="Type your e-mail address">
            <input type="submit" name='sub' value="SUBSCRIBE NOW">
          </form>
        </div>
        <?php

            if(isset($_POST['sub'])){

              $email = $_POST['semail'];
          
              
              
              
             

                
                
                
                
                
  
              $to = "awarnodigital@gmail.com";
              $txt = "The new Subscribe for Members : ".$email;
              $subject = "Website Needed" . $select;
              $headers = "From: ". $email;

              $sent = mail($to,$subject,$txt,$headers);

              if(!$sent){
                echo "<p style='color:#fff;'>Message Not Sent</p>";
              }else{
                echo "<p style='color:#fff;'>Thank You! Message Sent Successfully</p>";
              }


            }
            
            

            ?>

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