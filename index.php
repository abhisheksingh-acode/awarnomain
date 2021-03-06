<?php

include 'server.php'; 
?>
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


        <!-- insert dynamic data into landing page  -->
        <?php  
    $select = "select * from web_template";
    $sel_fire = mysqli_query($conn,$select);

    $fetch = mysqli_fetch_array($sel_fire);

?>

        <div class="col-lg-7 col-md-11 col-sm-4 flex-column mt-4">
          <p id="typed-static">
            <?php echo $fetch['heading'] ;?>
          </p>
          <div id="typed-strings">
            <strong>
              <?php echo $fetch['typingtext1'] ;?>
            </strong>
            <strong>
              <?php echo $fetch['typingtext2'] ;?>
            </strong>
            <strong>
              <?php echo $fetch['typingtext3'] ;?>
            </strong>
          </div>

          <span id="typed"></span>

          <p class="typed-bottom">
          <?php echo $fetch['description'] ;?>
          </p>

          <a href="tel:+918595966321" class="callNowTop">Let's Discuss Your Project</a>

          <div class="certification-grid d-flex justify-content-center pt-5" style="clear: left;">
            <img src="<?php echo $fetch['cert1'] ; ?>" alt="" class="cert-img cert-img1 " width="100px" height="70px">
            <img src="<?php echo $fetch['cert2'] ; ?>" alt="" class="cert-img cert-img2 mx-3" width="100px"
              height="70px">
            <img src="<?php echo $fetch['cert3'] ; ?>" alt="" class="cert-img cert-img3" width="100px" height="70px">
            <img src="<?php echo $fetch['cert4'] ; ?>" alt="" class="cert-img cert-img4 mx-3" width="100px"
              height="70px">
          </div>
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
      <!-- insert dynamic data into landing page  -->
      <?php  
    $selectCollab = "select * from collabration";
    $collab_fire = mysqli_query($conn,$selectCollab);

    $fetchCollab = mysqli_fetch_array($collab_fire);

?>
      <div class="row align-items-center interactive">
        <div class="col-lg-6 wow fadeIn">
          <div class="text-content-block">
            <h6>COLLABRATION WITH US</h6>
            <h2>
              <?php echo $fetchCollab['heading']; ?>
            </h2>
            <p>
              <?php echo $fetchCollab['description']; ?>
            </p>


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
  <!-- end content block  -->




  <!-- our services section rebuild  -->
  <section class="text-center py-5 px-3 px-lg-4 container-fluid mx-auto" id="our-service">
    <div class="row mb-4">
      <div class="col-lg-12 text-center">
        <div class="title-block2">
          <img src="images/title-icon.png" lt="Image">
          <h6>SOLUTIONS WE PROVIDE</h6>
          <h2>Our Services</h2>
        </div>
      </div>
    </div>

    <!-- our services card container  -->
    <div class="container-fluid mx-auto d-flex justify-content-start service-card-container row">


      <?php
  $selectServices = "select * from services";
  $service_fire = mysqli_query($conn,$selectServices);

while($fetchServices = mysqli_fetch_array($service_fire)){
 ?>
      <div class="service-cards col-12 col-md-12 col-lg-4 mx-0 ">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <img src="<?php echo $fetchServices['image'] ;?>" alt="" class="service-card-png">
            </div>
            <h3>
              <?php echo $fetchServices['title'] ;?>
            </h3>
            <div class="card-text">
              <p>
                <?php echo $fetchServices['description'] ;?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <?php
;}?>
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


  <!-- technology section   -->
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
  <!-- page specific section  -->

  <section class="container mx-auto mt-3 py-lg-5">
  <?php  
    $selectSpecific = "select * from page_specific";
    $specific_fire = mysqli_query($conn,$selectSpecific);

    $fetchSpecific = mysqli_fetch_array($specific_fire);

?>
    <div class="title-block text-center wow fadeIn my-0 pb-lg-2"> <img src="images/title-icon.png" alt="Image">
      <h6>HONEST REVIEWS</h6>
      <h2><?php echo $fetchSpecific['heading'] ;?></h2>
    </div>
    <!-- end title-block -->
    <div class=" wow fadeIn">

      <div class="page-specific-content mx-auto w-75">
        <blockquote class="fw-light">
          <?php echo $fetchSpecific['description']  ;?>
        </blockquote>
      </div>
    </div>
  </section>

  <!-- section ends  -->

  <!-- hire section awarno  -->

  <section class="container mx-auto p-0 mb-5">
  

    <h2 class="text-center mt-5 mb-4">Why Hire Software Developers In India?</h2>
    <br>
    <p class="text-center fw-light fs-5 mb-5 pb-3 d-block">
    Are you looking to hire Indian software programmers? We deliver robust software solutions in a timely manner and offer a number of benefits to start-ups, enterprises, and entrepreneurs.
    </p>

    <!-- grid of cards  -->

    <div class="row p-0 gx-4">

      <!-- left poster div  -->
      <div class="col-lg-4 ">
        <div class="side-poster">
          <img src="./images/p2.jpg" alt="">
        </div>
      </div>

      <!-- right content cards div  -->
      <div class="col-lg-8 row gx-3 right-hire-content-section ">
    <?php  
    $selectHire = "select * from hiring_grid";
    $hire_fire = mysqli_query($conn,$selectHire);

   while ($fetchHire = mysqli_fetch_array($hire_fire)){
     ?>
        <div class="col-lg-6 mb-3">
          <div class="hire-content-card border p-3 ">
            <h3 class="text-nowrap"><?php  echo $fetchHire['title'] ;?></h3> <br>
            <p class="fw-light">
            <?php echo $fetchHire['description'] ;?>
            </p>
          </div>
        </div>
   <?php ;}
   ?>
       
      </div>
    </div>

  </section>
  <!-- section ends  -->


  <!-- industries we served section -->
  <section class="container mx-auto mt-5">
    <h2 class="text-center mb-4">Industries We Served</h2>
    <br>

    <!-- industry card grid div  -->
    <div class="row mx-auto gx-3 gy-4">
    <?php  
    $selectIndustry = "select * from industry_served";
    $industry_fire = mysqli_query($conn,$selectIndustry);

   while ($fetchIndustry = mysqli_fetch_array($industry_fire)){
     ?>
       <div class="col-lg-3 card-insdutry">
        <div class="card-item border text-center">
          <img src="<?php echo fetchIndustry['image']  ;?>" alt="" class="card-bg">
          <h4 class="card-title"><?php  echo fetchIndustry['title']  ;?></h4>
          <p class="card-text">
          <?php echo fetchIndustry['description'] ;?>
          </p>
        </div>
      </div>
   <?php ;}
   ?>
    </div>


  </section>







  <!-- section end  -->
  <section class="content-block">
    <div class="title-block text-center wow fadeIn"> <img src="images/title-icon.png" alt="Image">
      <h6>HONEST REVIEWS</h6>
      <h2>Amazing Awarno Customers and<br> Users Testimonials</h2>
    </div>

    <!-- end title-block -->
    <div class="testimonials-slider wow fadeIn">
      <div class="swiper-wrapper">

      <?php  
    $selectTestimonials = "select * from testimonials";
    $fire_testimonials = mysqli_query($conn,$selectTestimonials);

   while ($fetchTestimonials = mysqli_fetch_array($fire_testimonials)){
     ?>
        <div class="swiper-slide">

          <div class="testimonial">
            <blockquote>
            <?php echo $fetchTestimonials['description']  ;?>
            </blockquote>

            <figure>
            <img src="<?php echo $fetchTestimonials['image']  ;?>" alt="" class="rounded-circle border border-dark p-0" width="60px" height="20px">
              <figcaption>
                <h6><?php echo $fetchTestimonials['refrence']  ;?></h6>
                <small><?php echo $fetchTestimonials['author']  ;?></small>
              </figcaption>
            </figure>

          </div>
          <!-- end testimonial-->
        </div>
        <!-- end swiper-slide -->
  <?php ;}?>

       </div>
      <!-- end swiper-wrapper -->
    </div>
    <!-- end carousel-slider -->
  </section>

  <!-- end content-block -->
  <!-- faq section -->
  <div class="mt-2 py-3 mb-4 container" style="height: fit-content;">
    <div class="mx-auto text-center">
      <h2 class="mb-4">FAQs</h2>
    </div>
    <div class="accordion" id="accordionExample">
      <!-- change ids index in series to add more items (collapseOne, collapseTwo ...)  -->
      <?php  
    $selectFaqs = "select * from faqs";
    $fire_faqs = mysqli_query($conn,$selectFaqs);

   while ($fetchFaqs = mysqli_fetch_array($fire_faqs)){
     ?>
      
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading1">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
            aria-expanded="true" aria-controls="collapse1">
            <?php echo $fetchFaqs['question']   ;?>
          </button>
        </h2>
        <div id="collapse1" class="accordion-collapse collapse " aria-labelledby="heading1"
          data-bs-parent="#accordionExample">
          <div class="accordion-body ">
          <?php echo $fetchFaqs['answer']   ;?>
          </div>
        </div>
      </div>


  <?php ;} ?>
    </div>

  </div>

  <!-- end faq section  -->

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
                    <h3 class="card-title"><a href="#">Visitors learn about Iceland???s glaciers their effect on the land
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

                    <h3 class="card-title"><a href="#">Visitors learn about Iceland???s glaciers their effect on the land
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
              };
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