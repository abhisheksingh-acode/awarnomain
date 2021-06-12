<?php
session_start();

include 'server.php';



// set session for edit execution 

if (isset($_GET['edit'])) {
 $id = $_GET['id'];
 $fs = $_GET['fs'];

 $_SESSION['id'] = $id ;
 $_SESSION['fs'] = $fs ;
};


// update changes handling

if (isset($_POST['edit-home'])) {

   if ($_SESSION['fs'] == 'services') {
      // add service section 

   $serviceHeading = $_POST['serviceHeading'];
   $serviceDescription = $_POST['serviceDescription'];
   $serviceIcon = $_FILES['serviceIcon'];

   $servicePath = 'uploads/'. $serviceIcon['name'];

   $_SESSION['servicePath'] = $servicePath ; 

     move_uploaded_file($serviceIcon['tmp_name'], $servicePath);


   //   update image only if changes 
     $sel = "select * from services where id = {$_SESSION['id']} " ;
     $fetchImages = mysqli_fetch_array(mysqli_query($conn,$sel));
      $imgPath = (strlen($servicePath)>14)?$servicePath:$fetchImages['image'];


   $updateService = " update services set 
   title = '$serviceHeading',
   description = '$serviceDescription',
   image = '$imgPath'
    where id = {$_SESSION['id']}" ;

 $service =  mysqli_query($conn,$updateService);

   // echo ($service) ? 'done3':'faild3';
   }elseif ($_SESSION['fs'] == 'testimonials') {
      // testimonial section 

   $testimonialAuthor = $_POST['testimonialAuthor'];
   $testimonialRef = $_POST['testimonialRef'];
   $testimonialDescription = $_POST['testimonialDescription'];
   $authorProfile = $_FILES['authorProfile'];

   $testimonialPath = 'uploads/'.$authorProfile['name'];

   move_uploaded_file($authorProfile['tmp_name'],$testimonialPath);

   
//   update image only if changes 
$sel = "select * from testimonials where id = {$_SESSION['id']} " ;
$fetchImages = mysqli_fetch_array(mysqli_query($conn,$sel));
 $imgPath = (strlen($servicePath)>14)? $servicePath:$fetchImages['image'];


   $insertTestimonial = "update testimonials set
    author = '$testimonialAuthor',
    refrence ='$testimonialRef',
    description ='$testimonialDescription',
    image ='$imgPath' where id = {$_SESSION['id']}";

 $testimonial =  mysqli_query($conn,$insertTestimonial);

   }elseif ($_SESSION['fs'] == 'faqs') {

      //   FAQs section 

   $faqQuestion = $_POST['faqQuestion'];
   $faqAnswer = $_POST['faqAnswer'];

   $insertFAQ = "update faqs set question = '$faqQuestion',
   answer ='$faqAnswer' where id = {$_SESSION['id']} ";
   $faqs =  mysqli_query($conn,$insertFAQ) ;


   }elseif($_SESSION['fs'] == 'industry_served') {
      // add industry served section 

      $industryTitle = $_POST['industryTitle'];
      $insdustryDescription = $_POST['insdustryDescription'];
      $industryImage = $_FILES['industryImage'];

      $industryPath = 'uploads/'. $industryImage['name'];
 
        move_uploaded_file($industryImage['tmp_name'], $industryPath);

   //   update image only if changes 
     $sel = "select * from industry_served where id = {$_SESSION['id']} " ;
     $fetchImages = mysqli_fetch_array(mysqli_query($conn,$sel));
      $imgPath = (strlen($servicePath)>14)?$servicePath:$fetchImages['image'];


   $updateIndustry = " update industry_served set 
   title = '$industryTitle',
   description = '$insdustryDescription',
   image = '$imgPath'
    where id = {$_SESSION['id']}" ;
 $industry =  mysqli_query($conn,$updateIndustry);

   }elseif($_SESSION['fs'] == 'hiring_grid') {
      // add hiring grid section 

      $hireTitle = $_POST['hireTitle'];
       $hireDescription = $_POST['hireDescription'];
 
   //   update image only if changes 
   $updateHire = " update hiring_grid set 
   title = '$hireTitle',
   description = '$hireDescription'
    where id = {$_SESSION['id']}" ;
 $hire =  mysqli_query($conn,$updateHire);
   }
   else{
      ?>
<script>alert('retry please')</script>
<?php
   };
   };
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include './inc/head.php';?>
   <?php title('awarno | dashboard'); ?>
   <?php include 'dashboardstyle.php'; ?>
   <link rel="stylesheet" href="./texteditor/rte_theme_default.css">
</head>

<body style="width: 100vw; height: 100vh;">

   <!-- dashboard nav  -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2">
      <div class="container-lg container-fluid ">
         <a class="navbar-brand" href="#">
            <img src="./images/awarno-logo.png" alt="" width="100px">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./index.php" target="_blank">Visit Page</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Help</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">SignOut</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <main class=" w-100 h-100 d-flex mt-5 pt-3">
      <aside class="bg-dark h-100 text-left d-flex flex-column justify-content-start pt-0 fw-bolder"
         id="blog-dashboard-left">
         <nav class="bg-success"><a class="text-white btn">Dashboard</a></nav>
         <nav>
            <nav class="text-white btn drop-down-menu active-drop-down bg-danger">Pages <i
                  class="fas fa-sort-down ps-5"></i></nav>
            <div class="panel bg-dark ">
               <nav><a href="pages.php" class="text-white btn">Manage Pages</a></nav>
               <nav><a href="add_pages.php" class="text-danger btn ">Add Pages</a></nav>
            </div>
         </nav>
         <nav class="text-white btn drop-down-menu bg-dark">Blogs <i class="fas fa-sort-down ps-5"></i></nav>
         <div class="panel bg-dark">
            <nav><a href="blogs.php" class="text-white btn">Manage Blog Posts</a></nav>
            <nav><a href="addpost.php" class="text-white btn ">Add Post</a></nav>
         </div>
         </nav>
         <nav>
            <nav><a href="forms.php" class="text-white btn">Forms</a></nav>
         </nav>
      </aside>

      <section class="w-75 mx-auto h-100 pb-5">
         <div class="container mx-auto">
            <div class="row align-items-center d-flex justify-content-between">
               <h2 class="text-dark col-6 fw-lighter">ADD PAGE</h2>
               <div class="col-6 text-right">
                  <button class="me-auto btn" name="<?php echo (isset($_GET['edit']))?'edit-home':'submit-home';?>"
                     type="submit" form="web-template"
                     style="width:fit-content; height:fit-content;padding:10px 20px;">Save</button>
               </div>

               <?php 
include 'server.php' ;
?>



            </div>
            <br><br>
            <select class="form-select" aria-label="example" id="pageSelect">
               <option selected>Select Templates</option>
               <option value="web">Web Development</option>
               <option value="mobile">Mobile Development</option>
               <option value="other">Other</option>
            </select>
            <br>

            <div class="d-flex">
               <select class="form-select m-2" aria-label=" example" id="selectState">
                  <option selected>Select Country</option>
                  <option value="india">India</option>
               </select>
               <select class="form-select m-2" aria-label=" example" id="stateList">
                  <option value="select">Select State</option>

               </select>
            </div>

            <br>

            <div class="web-template selectWeb">

               <form action="<?php echo (isset($_GET['edit']))?'add_pages.php':'action.php';?>" id="web-template"
                  method="POST" enctype="multipart/form-data">
                  <?php 

      //   select web_template to insert pre value in blanks 
      $select = "select * from web_template";
      $sel_fire = mysqli_query($conn,$select);
      $fetch = mysqli_fetch_array($sel_fire);

      ?>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Header Title
                     </label>
                     <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Title for header" name="heading" value="<?php echo $fetch['heading']; ?>">
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Typing Text 1
                     </label>
                     <input type="text" name="typingtext1" class="form-control" id="exampleFormControlInput1"
                        placeholder="Type..." value="<?php echo $fetch['typingtext1']; ?>">
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Typing Text 2
                     </label>
                     <input type="text" name="typingtext2" class="form-control" id="exampleFormControlInput1"
                        placeholder="Type..." value="<?php echo $fetch['typingtext2']; ?>">
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Typing Text 3
                     </label>
                     <input type="text" name="typingtext3" class="form-control" id="exampleFormControlInput1"
                        placeholder="Type..." value="<?php echo $fetch['typingtext3']; ?>">
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Descrtiption For Your Header
                     </label>
                     <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                        rows="4"><?php echo $fetch['description']; ?></textarea>
                  </div>


                  <br>
                  <div class="certifications-img-grid">
                     <h4 for="exampleFormControlInput1" class="form-label fw-bold">Certification Thumbnails</h4>
                     <br>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Certification 1</label>
                        <input type="file" name="cert1" class="form-control cert1" id="exampleFormControlInput1"
                           accept=".png,.jpg,.jpeg">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Certification 2</label>
                        <input type="file" name="cert2" class="form-control" id="exampleFormControlInput1"
                           accept=".png,.jpg,.jpeg" value="<?php echo $fetch['cert1'] ?>">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Certification 3</label>
                        <input type="file" name="cert3" class="form-control" id="exampleFormControlInput1"
                           accept=".png,.jpg,.jpeg" value="<?php echo $fetch['cert1'] ?>">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Certification 4</label>
                        <input type="file" name="cert4" class="form-control" id="exampleFormControlInput1"
                           accept=".png,.jpg,.jpeg" value="<?php echo $fetch['cert1'] ?>">
                     </div>
                  </div>
                  <!-- </form> -->



                  <!-- first section ends  -->
                  <div class="container mx-auto">

                     <?php
//   select collab to insert pre value in blanks 
$selectCollab = "select * from collabration";
$collabFire = mysqli_query($conn,$selectCollab);
$fetchCollab = mysqli_fetch_array($collabFire);
   ?>
                     <!-- <form action="#"> -->
                     <div class="row align-items-center d-flex justify-content-between">
                        <h2 class="text-dark col-6 fw-lighter">Collabration With Us</h2>
                     </div>
                     <br><br>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title
                        </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                           placeholder="Title for header" name="collabHeading"
                           value="<?php echo $fetchCollab['heading']; ?>">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrtiption
                        </label>
                        <textarea class="form-control" name="collabDescription" id="exampleFormControlTextarea1"
                           rows="4"><?php echo $fetchCollab['description']; ?></textarea>
                     </div>


                     <br>
                     <!-- </form> -->
                  </div>
                  <!-- collab section ends  -->

                  <div class="container mx-auto mb-5">
                     <?php
      if(isset($_GET['edit'])){
         $id = $_GET['id'];
        $fs = $_GET['fs'] ;
           $editServices = "select * from {$fs} where id = {$id} ";
           $fireIdRow = mysqli_query($conn,$editServices);
           $fetchIdRow = mysqli_fetch_array($fireIdRow);
      };
?>
                     <div class="row align-items-center d-flex justify-content-between">
                        <h2 class="text-dark col-6 fw-lighter">Add Services</h2>
                     </div>

                     <div class="row mt-3">
                        <div class="col-6">
                           <!-- add service section  -->
                           <div class="mb-3">
                              <label for="exampleFormControlInput9" class="form-label">Title
                              </label>
                              <input type="text" name="serviceHeading" class="form-control"
                                 id="exampleFormControlInput9" placeholder="Title for header" value="<?php
                      if (isset($_GET['fs'])) {
         echo ($_GET['fs'] == 'services') ? $fetchIdRow['title'] : '';} ; ?>" />
                           </div>
                           <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Descrtiption
                              </label>
                              <textarea class="form-control" name="serviceDescription" id="exampleFormControlTextarea1"
                                 rows="4"> <?php if (isset($_GET['fs'])) {
         echo ($_GET['fs'] == 'services') ? $fetchIdRow['description'] : '';} ; ?></textarea>
                           </div>

                           <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Icon</label>
                              <input type="file" name="serviceIcon" class="form-control" id="exampleFormControlInput1"
                                 placeholder="Title for header">
                           </div>
                        </div>
                        <div class="col-6 border p-0">
                           <!-- list of services  -->
                           <table class="w-100 mx-auto text-center table-bordered table-striped">
                              <tr>
                                 <th>No</th>
                                 <th>Image</th>
                                 <th>Title</th>
                                 <th>Actions</th>
                              </tr>
                              <?php 
               //   select services to insert pre value in blanks 
            $selectServices = "select * from services";
            $servicesFire = mysqli_query($conn,$selectServices);
            

            while($fetchServices = mysqli_fetch_array($servicesFire)){
               ?>
                              <tr>
                                 <td>
                                    <?php echo $fetchServices['id'] ;?>
                                 </td>
                                 <td><img src="<?php echo $fetchServices['image'] ;?>" alt="" width="80px"
                                       height="80px"></td>
                                 <td>
                                    <?php echo $fetchServices['title'] ;?>
                                 </td>

                                 <td>
                                    <a
                                       href="add_pages.php?id=<?php echo $fetchServices['id']; ?>&edit=true&fs=services"><i
                                          class="fas bg-info rounded fa-edit text-white p-2" title="update"></i> </a>
                                    <a href="action.php?id=<?php echo $fetchServices['id'];?>&delete=true&fs=services"><i
                                          class="fa fa-trash bg-danger p-2 rounded text-white" aria-hidden="true"
                                          title="delete"></i></a>
                                 </td>
                              </tr>
                              <?php 
            }
               ?>
                           </table>
                        </div>
                     </div>
                     <!-- </form> -->
                  </div>
                  <!-- service section ends  -->
                  <div class="container mx-auto ">

                     <?php
   //   select about to insert pre value in blanks 
   $selectAbout = "select * from about";
   $aboutFire = mysqli_query($conn,$selectAbout);
   $fetchAbout = mysqli_fetch_array($aboutFire);
   ?>

                     <!-- <form action=""> -->
                     <div class="row align-items-center d-flex justify-content-between">
                        <h2 class="text-dark col-6 fw-lighter">About Section</h2>
                     </div>
                     <br><br>
                     <div class="mb-3">
                        <label for="exampleFormControlInput8" class="form-label">Heading
                        </label>
                        <input type="text" name="aboutHeading" class="form-control" id="exampleFormControlInput8"
                           placeholder="Title for header" value="<?php echo $fetchAbout['heading'] ; ?>">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrtiption
                        </label>
                        <textarea class="form-control" name="aboutDescription" id="exampleFormControlTextarea1"
                           rows="4"><?php echo $fetchAbout['description'] ; ?></textarea>
                     </div>
                     <!-- </form> -->

                     <br>
                  </div>
                  <!-- about section ends  -->

                  <div class="container mx-auto">

                     <?php
      //   select support to insert pre value in blanks 

      $selectSupport = "select * from support";
      $supportFire = mysqli_query($conn,$selectSupport);
      $fetchSupport = mysqli_fetch_array($supportFire);
      ?>
                     <!-- <form action=""> -->
                     <div class="row align-items-center d-flex justify-content-between">
                        <h2 class="text-dark col-6 fw-lighter">Support Section</h2>
                     </div>
                     <br><br>
                     <div class="mb-3">
                        <label for="exampleFormControlInput7" class="form-label">Heading
                        </label>
                        <input type="text" name="supportHeading" class="form-control" id="exampleFormControlInput7"
                           placeholder="Title for header" value="<?php echo $fetchSupport['heading'] ;?>">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlTextarea6" class="form-label">Descrtiption
                        </label>
                        <textarea class="form-control" name="supportDescription" id="exampleFormControlTextarea6"
                           rows="4"><?php echo $fetchSupport['description'] ;?></textarea>
                     </div>

                     <br>
                  </div>
                  <!-- support section ends  -->


                  <div class="container mx-auto">
                     <?php

      //   select page specific to insert pre value in blanks 
      $selectSpecific = "select * from page_specific";
      $specificFire = mysqli_query($conn,$selectSpecific) or die(mysqli_err());
      $fetchSpecific = mysqli_fetch_array($specificFire);
      ?>
                     <div class="row align-items-center d-flex justify-content-between">
                        <h2 class="text-dark col-6 fw-lighter">Page Specific Section</h2>
                     </div>
                     <br><br>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Heading
                        </label>
                        <input type="text" name="specificPageHeading" class="form-control" id="exampleFormControlInput1"
                           placeholder="Title for header" value="<?php echo $fetchSpecific['heading'] ;?>">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrtiption
                        </label>
                        <textarea class="form-control" name="specificPageDescription"
                           id="exampleFormControlTextarea1"
                           rows="4"><?php echo $fetchSpecific['description'] ;?></textarea>
                     </div>
                     <!-- </form> -->

                     <br>
                  </div>
                  <!-- page specific section ends  -->

                  <!-- hiring section  -->
                  <div class="container mx-auto mt-5 mb-5">
                     <?php
         //   select hiring to insert pre value in blanks 
         $selectHire = "select * from hiring_grid";
         $hireFire = mysqli_query($conn,$selectHire);

         ?>
                     <div class="row align-items-center d-flex justify-content-between">
                        <h2 class="text-dark col-6 fw-lighter">Hiring section Cards</h2>
                     </div>

                     <div class="row mt-3">
                        <div class="col-6">

                           <div class="mb-3">
                              <label for="exampleFormControlInput2" class="form-label">Title
                              </label>
                              <input type="text" name="hireTitle" class="form-control" id="exampleFormControlInput2"
                                 placeholder="Title for header" value="<?php
                   if (isset($_GET['fs'])) {
      echo ($_GET['fs'] == 'hiring_grid') ? $fetchIdRow['title'] : '';} ; ?>">
                           </div>
                           <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Description
                              </label>
                              <textarea class="form-control" name="hireDescription" id="exampleFormControlTextarea1"
                                 rows="4"><?php
                   if (isset($_GET['fs'])) {
      echo ($_GET['fs'] == 'hiring_grid') ? $fetchIdRow['description'] : '';} ; ?></textarea>
                           </div>
                        </div>
                        <div class="col-6 border p-0">
                           <!-- list of services  -->
                           <table class="w-100 mx-auto text-center table-bordered table-striped">
                              <tr>
                                 <th>No</th>
                                 <th>Title</th>
                                 <th>Actions</th>
                              </tr>

                              <?php
while ($fetchHire = mysqli_fetch_array($hireFire)){
   ?>
                              <tr>
                                 <td>
                                    <?php echo $fetchHire['id'] ;?>
                                 </td>
                                 <td>
                                    <?php echo $fetchHire['title'] ;?>
                                 </td>
                                 <td>
                                    <a href="add_pages.php?id=<?php echo $fetchHire['id']; ?>&edit=true&fs=hiring_grid"><i
                                          class="fas bg-info rounded fa-edit text-white p-2" title="update"></i> </a>
                                    <a href="action.php?id=<?php echo $fetchHire['id'];?>&delete=true&fs=hiring_grid"><i
                                          class="fa fa-trash bg-danger p-2 rounded text-white" aria-hidden="true"
                                          title="delete"></i></a>
                                 </td>
                              </tr>

                              <?php };

?>
                           </table>
                        </div>
                     </div>
                  </div>

                  <!-- hiring section ends  -->

                  <div class="row align-items-center d-flex justify-content-between mt-4 mb-5">
                     <h2 class="text-dark col-6 fw-lighter">Add Industry Cards</h2>
                  </div>

                  <div class="row mt-3">
                     <div class="col-6">
                        <!-- add service section  -->
                        <div class="mb-3">
                           <label for="exampleFormControlInput9" class="form-label">Title
                           </label>
                           <input type="text" name="industryTitle" class="form-control" id="exampleFormControlInput9"
                              placeholder="Title for header" value="<?php
                      if (isset($_GET['fs'])) {
         echo ($_GET['fs'] == 'industry_served') ? $fetchIdRow['title'] : '';} ; ?>" />
                        </div>
                        <div class="mb-3">
                           <label for="exampleFormControlTextarea1" class="form-label">Descrtiption
                           </label>
                           <textarea class="form-control" name="insdustryDescription" id="exampleFormControlTextarea1"
                              rows="4"> <?php if (isset($_GET['fs'])) {
         echo ($_GET['fs'] == 'industry_served') ? $fetchIdRow['description'] : '';} ; ?></textarea>
                        </div>

                        <div class="mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Icon</label>
                           <input type="file" name="industryImage" class="form-control" id="exampleFormControlInput1"
                              placeholder="Title for header">
                        </div>
                     </div>
                     <div class="col-6 border p-0">
                        <!-- list of services  -->
                        <table class="w-100 mx-auto text-center table-bordered table-striped">
                           <tr>
                              <th>No</th>
                              <th>Image</th>
                              <th>Title</th>
                              <th>Actions</th>
                           </tr>
                           <?php 
               //   select services to insert pre value in blanks 
            $industry_sql = "select * from industry_served";
            $industry_query = mysqli_query($conn,$industry_sql);
            

            while($fetchIndustry = mysqli_fetch_array($industry_query)){
               ?>
                           <tr>
                              <td>
                                 <?php echo $fetchIndustry['id'] ;?>
                              </td>
                              <td><img src="<?php echo $fetchIndustry['image'] ;?>" alt="" width="80px" height="80px">
                              </td>
                              <td>
                                 <?php echo $fetchIndustry['title'] ;?>
                              </td>

                              <td>
                                 <a
                                    href="add_pages.php?id=<?php echo $fetchIndustry['id']; ?>&edit=true&fs=industry_served"><i
                                       class="fas bg-info rounded fa-edit text-white p-2" title="update"></i> </a>
                                 <a
                                    href="action.php?id=<?php echo $fetchIndustry['id'];?>&delete=true&fs=industry_served"><i
                                       class="fa fa-trash bg-danger p-2 rounded text-white" aria-hidden="true"
                                       title="delete"></i></a>
                              </td>
                           </tr>
                           <?php 
            }
               ?>
                        </table>
                     </div>
                  </div>
                  <!-- </form> -->




                  <!-- industries we served end -->


                  <div class="container mx-auto mt-5 mb-4">
                     <?php
      //   select testimonials to insert pre value in blanks 
      $selectTestimonials = "select * from testimonials";
      $testimonialsFire = mysqli_query($conn,$selectTestimonials);
      $fetchTestimonials = mysqli_fetch_array($testimonialsFire);
      ?>
                     <!-- <form action=""> -->
                     <div class="row align-items-center d-flex justify-content-between">
                        <h2 class="text-dark col-6 fw-lighter">Add Testimonial</h2>
                     </div>

                     <div class="row mt-3">
                        <div class="col-6">
                           <!-- add service section -->
                           <div class="mb-3">
                              <label for="exampleFormControlInput5" class="form-label">Author</label>
                              <input type="text" name="testimonialAuthor" class="form-control"
                                 id="exampleFormControlInput5" placeholder="Author" value="<?php
                      if (isset($_GET['fs'])) {
         echo ($_GET['fs'] == 'testimonials') ? $fetchIdRow['author'] : '';} ; ?>">
                           </div>
                           <div class="mb-3">
                              <label for="exampleFormControlInput5" class="form-label">Reference</label>
                              <input type="text" name="testimonialRef" class="form-control"
                                 id="exampleFormControlInput5" placeholder="Company name" value="<?php
                      if (isset($_GET['fs'])) {
         echo ($_GET['fs'] == 'testimonials') ? $fetchIdRow['refrence'] : '';} ; ?>">
                           </div>
                           <div class="mb-3">
                              <label for="exampleFormControlTextarea4" class="form-label">
                                 Description
                              </label>
                              <textarea class="form-control" name="testimonialDescription"
                                 id="exampleFormControlTextarea4" rows="4"><?php
                      if (isset($_GET['fs'])) {
         echo ($_GET['fs'] == 'testimonials') ? $fetchIdRow['description'] : '';} ; ?></textarea>
                           </div>
                           <div class="mb-3">
                              <label for="exampleFormControlInput3" class="form-label">Profile</label>
                              <input type="file" name="authorProfile" class="form-control" id="exampleFormControlInput3"
                                 placeholder="Title for header">
                           </div>
                        </div>
                        <div class="col-6 border p-0">
                           <!-- list of services  -->
                           <table class="w-100 mx-auto text-center table-bordered table-striped">
                              <tr>
                                 <th>No</th>
                                 <th>Image</th>
                                 <th>Author</th>
                                 <th>Actions</th>
                              </tr>
                              <?php
               while($fetchTestimonials = mysqli_fetch_array($testimonialsFire)){
                  ?>
                              <tr>
                                 <td>
                                    <?php echo $fetchTestimonials['id']   ;?>
                                 </td>
                                 <td><img src="<?php echo $fetchTestimonials['image'];?>" alt="" width="80px"
                                       height="80px"></td>
                                 <td>
                                    <?php echo $fetchTestimonials['author']   ;?>
                                 </td>
                                 <td>
                                    <a
                                       href="add_pages.php?id=<?php echo $fetchTestimonials['id']; ?>&edit=true&fs=testimonials"><i
                                          class="fas bg-info rounded fa-edit text-white p-2" title="update"></i> </a>
                                    <a
                                       href="action.php?id=<?php echo $fetchTestimonials['id'];?>&delete=true&fs=testimonials"><i
                                          class="fa fa-trash bg-danger p-2 rounded text-white" aria-hidden="true"
                                          title="delete"></i></a>
                                 </td>
                              </tr>
                              <?php } ?>
                           </table>
                        </div>
                     </div>
                     <!-- finish  -->

                     <div class="container mx-auto mt-5 mb-3">
                        <?php
            //   select faqs to insert pre value in blanks 
            $selectFaqs = "select * from faqs";
            $faqsFire = mysqli_query($conn,$selectFaqs);

            ?>
                        <div class="row align-items-center d-flex justify-content-between">
                           <h2 class="text-dark col-6 fw-lighter">Add FAQs</h2>
                        </div>

                        <div class="row mt-3">
                           <div class="col-6">

                              <div class="mb-3">
                                 <label for="exampleFormControlInput2" class="form-label">Question
                                 </label>
                                 <input type="text" name="faqQuestion" class="form-control"
                                    id="exampleFormControlInput2" placeholder="Title for header" value="<?php
                      if (isset($_GET['fs'])) {
         echo ($_GET['fs'] == 'faqs') ? $fetchIdRow['question'] : '';} ; ?>">
                              </div>
                              <div class="mb-3">
                                 <label for="exampleFormControlTextarea1" class="form-label">Answer
                                 </label>
                                 <textarea class="form-control" name="faqAnswer" id="exampleFormControlTextarea1"
                                    rows="4"><?php
                      if (isset($_GET['fs'])) {
         echo ($_GET['fs'] == 'faqs') ? $fetchIdRow['answer'] : '';} ; ?></textarea>
                              </div>
                           </div>
                           <div class="col-6 border p-0">
                              <!-- list of services  -->
                              <table class="w-100 mx-auto text-center table-bordered table-striped">
                                 <tr>
                                    <th>No</th>
                                    <th>Question</th>
                                    <th>Actions</th>
                                 </tr>

                                 <?php
   while ($fetchFaqs = mysqli_fetch_array($faqsFire)){
      ?>
                                 <tr>
                                    <td>
                                       <?php echo $fetchFaqs['id'] ;?>
                                    </td>
                                    <td>
                                       <?php echo $fetchFaqs['question'] ;?>
                                    </td>
                                    <td>
                                       <a href="add_pages.php?id=<?php echo $fetchFaqs['id']; ?>&edit=true&fs=faqs"><i
                                             class="fas bg-info rounded fa-edit text-white p-2" title="update"></i> </a>
                                       <a href="action.php?id=<?php echo $fetchFaqs['id'];?>&delete=true&fs=faqs"><i
                                             class="fa fa-trash bg-danger p-2 rounded text-white" aria-hidden="true"
                                             title="delete"></i></a>
                                    </td>
                                 </tr>

                                 <?php };

?>
                              </table>
                           </div>
                        </div>
                     </div>
               </form>
            </div>

         </div>


      </section>
   </main>
   <script src="admin.js"></script>
   <script src="./texteditor/rte.js"></script>
   <script src="./texteditor/all_plugins.js"></script>
   <script>
      var editor1cfg = {};
      editor1cfg.toolbar = "basic";
      var RTE = new RichTextEditor(".postEditor", editor1cfg);</script>
</body>

</html>