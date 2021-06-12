<?php 
      session_start();
      include 'server.php' ;

      // $_SESSION['cert1'] = $fetch['cert1'];
      // $_SESSION['cert2'] = $fetch['cert2'];
      // $_SESSION['cert3'] = $fetch['cert3'];
      // $_SESSION['cert4'] = $fetch['cert4'];


      // update web home section 

      if (isset($_POST['submit-home'])) {

      // web section query 

      $heading = $_POST['heading'];
      $typingtext1 = $_POST['typingtext1'];
      $typingtext2 = $_POST['typingtext2'];
      $typingtext3 = $_POST['typingtext3'];
      $description = $_POST['description'];

      $cert1 = $_FILES['cert1'];
      $cert2 = $_FILES['cert2'];
      $cert3 = $_FILES['cert3'];
      $cert4 = $_FILES['cert4'];

      $path1 = 'uploads/'.$cert1['name'];
      $path2 = 'uploads/'.$cert2['name'];
      $path3 = 'uploads/'.$cert3['name'];
      $path4 = 'uploads/'.$cert4['name'];

      move_uploaded_file($cert1['tmp_name'],$path1) ;
      move_uploaded_file($cert2['tmp_name'],$path2) ;
      move_uploaded_file($cert3['tmp_name'],$path3) ;
      move_uploaded_file($cert4['tmp_name'],$path4) ;

     

     $sel = "select * from web_template where id = 1 " ;

     $fetchImages = mysqli_fetch_array(mysqli_query($conn,$sel));
     
      $imgCheck1 = (strlen($path1)>14)?$path1:$fetchImages['cert1'];
      $imgCheck2 = (strlen($path2)>14)?$path2:$fetchImages['cert2'];
      $imgCheck3 = (strlen($path3)>14)?$path3:$fetchImages['cert3'];
      $imgCheck4 = (strlen($path4)>14)?$path4:$fetchImages['cert4'];


      $update = "update web_template set
      heading ='$heading',
      typingtext1 = '$typingtext1',
      typingtext2 ='$typingtext2',
      typingtext3 ='$typingtext3',
      description ='$description',
      cert1 = '$imgCheck1',
      cert2 = '$imgCheck1',
      cert3 = '$imgCheck3',
      cert4 = '$imgCheck4'
      where id = 1" ;

      $web = mysqli_query($conn,$update) ;

         // echo ($update_fire)? 'done':'faild';

      // collabration section 

      $collabHeading = $_POST['collabHeading'];
      $collabDescription = $_POST['collabDescription'];

      $updateCollab = "update collabration set 
      heading = '$collabHeading',
      description = '$collabDescription'
      where id = 1";

    $collab =  mysqli_query($conn,$updateCollab);
      echo ($collab)? 'done1':'faild1';

      // add service section 

      $serviceHeading = $_POST['serviceHeading'];
      $serviceDescription = $_POST['serviceDescription'];
      $serviceIcon = $_FILES['serviceIcon'];

      $servicePath = 'uploads/'. $serviceIcon['name'];

      $_SESSION['servicePath'] = $servicePath ; 

        // move_uploaded_file($serviceIcon['tmp_name'], $servicePath);

      echo (move_uploaded_file($serviceIcon['tmp_name'], $servicePath)) ? 'do3':'fai3';

      $insertService = " insert into services (title,description,image) values ('$serviceHeading' , '$serviceDescription','$servicePath') " ;

     if (strlen($serviceHeading)>0) {
       $service =  mysqli_query($conn,$insertService);
     };


      // echo ($service) ? 'done3':'faild3';
      
      //   about section 

      $aboutHeading = $_POST['aboutHeading'];
      $aboutDescription = $_POST['aboutDescription'];

      $updateAbout = "update about set 
      heading = '$aboutHeading',
      description = '$aboutDescription'
      where id = 1";

     $about = mysqli_query($conn,$updateAbout);

      // support section 
      $supportHeading = $_POST['supportHeading'];
      $supportDescription = $_POST['supportDescription'];
      $updateSupport = "update support set 
      heading = '$supportHeading',
      description = '$supportDescription'
      where id = 1";

    $support =  mysqli_query($conn,$updateSupport);
      // echo (mysqli_query($conn,$updateSupport)) ? 'done4':'faild4';


      // page specific section 

      $specificPageHeading = $_POST['specificPageHeading'];
      $specificPageDescription = $_POST['specificPageDescription'];
      $updatePageSpecific = "update page_specific set 
      heading = '$specificPageHeading',
      description = '$specificPageDescription'
      where id = 1";

    $specific =  mysqli_query($conn,$updatePageSpecific);
      // echo (mysqli_query($conn,$updatePageSpecific)) ? 'done5':'faild5';


      

      // hiring section 

       $hireTitle = $_POST['hireTitle'];
       $hireDescription = $_POST['hireDescription'];
 
       $insertHire = " insert into hiring_grid (title,description) values ('$hireTitle' , '$hireDescription') " ;
 
      if (strlen($hireTitle)>0) {
        $hire =  mysqli_query($conn,$insertHire);
       echo ($hire)?'success':'failed';
      };


      // industries section 

       $industryTitle = $_POST['industryTitle'];
       $insdustryDescription = $_POST['insdustryDescription'];
       $industryImage = $_FILES['industryImage'];
 
       $industryPath = 'uploads/'. $industryImage['name'];
  
         move_uploaded_file($industryImage['tmp_name'], $industryPath);
 
       $insertHire = " insert into industry_served (title,description,image) values ('$industryTitle' , '$insdustryDescription','$industryPath') " ;
 
      if (strlen($industryTitle)>0) {
        $hire =  mysqli_query($conn,$insertHire);
      };
 
 





      // testimonial section 

      $testimonialAuthor = $_POST['testimonialAuthor'];
      $testimonialRef = $_POST['testimonialRef'];
      $testimonialDescription = $_POST['testimonialDescription'];
      $authorProfile = $_FILES['authorProfile'];

      $testimonialPath = 'uploads/'.$authorProfile['name'];
      move_uploaded_file($authorProfile['tmp_name'],$testimonialPath);

      $insertTestimonial = "insert into testimonials (author,refrence,description,image) values 
      ('$testimonialAuthor','$testimonialRef','$testimonialDescription','$testimonialPath') ";
    
      if (strlen($testimonialAuthor)>0) {
        $testimonial =  mysqli_query($conn,$insertTestimonial);
      };
      // echo (mysqli_query($conn,$insertTestimonial)) ? 'done6':'faild6' ;




      //   FAQs section 

      $faqQuestion = $_POST['faqQuestion'];
      $faqAnswer = $_POST['faqAnswer'];

      $insertFAQ = "insert into faqs (question,answer) values ('$faqQuestion','$faqAnswer') ";
      
      if (strlen($faqQuestion) > 0) {
        $faqs =  mysqli_query($conn,$insertFAQ) ;
      };


header('location:add_pages.php');

// if($web && $collab && $about && $service && $support && $testimonial && $faqs && $specific){
//       
//        };
      };   


  //  delete query for all


      if(isset($_GET['fs'])) {
        // echo 'first';
        $id = $_GET['id'];
        
      // echo $id;

        $fs = $_GET['fs'];

        // echo $fs ;

        // echo ($conn)? 'okay':'not okay';
    
         $delSQL = "delete from {$fs} where id = {$id}";
    
         $delQuery = mysqli_query($conn,$delSQL) ;
    
        //  echo ($delQuery) ? 'delete':'unsuccessfull';

         header('location:add_pages.php');

      };      
      
      #end statement
      ?>