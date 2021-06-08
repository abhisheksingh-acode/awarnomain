<!DOCTYPE html>
<html lang="en">

<head>
   <?php include './inc/head.php';?>
   <?php title('awarno | dashboard'); ?>
   <?php include 'dashboardstyle.php'; ?>
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
            <span class="navbar-toggler-icon"></span>
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
                  <button class="me-auto btn btn-info">Save</button>
                  <button class="ms-atuo btn btn-success">Publish</button>
               </div>

            </div>
            <br><br>
            <select class="form-select" aria-label="example" id="pageSelect">
               <option selected>Select Templates</option>
               <option value="web">Web Development</option>
               <option value="mobile">Mobile Development</option>
               <option value="other">Other</option>
            </select>
            <br>
            <!-- <select class="form-select" aria-label=" example" >
               <option selected>Select Page</option>
               <option value="home">Home</option>
               <option value="about">About Company</option>
               <option value="portfolio">Portfolio</option>
               <option value="career">Career</option>
               <option value="contact">Contact</option>
            </select>
            <br> -->
            <div class="d-flex">
               <select class="form-select m-2" aria-label=" example" id="select_state">
                  <option selected>Select Country</option>
                  <option value="india">India</option>
               </select>
               <select class="form-select m-2" aria-label=" example">
                  <option value="select">Select State</option>
                  <?php 
             $states = array("Andhra Pradesh",
            "Arunachal Pradesh",
            "Assam",
            "Bihar",
            "Chhattisgarh",
            "Goa",
            "Gujarat",
            "Haryana",
            "Himachal Pradesh",
            "Jammu and Kashmir",
            "Jharkhand",
            "Karnataka",
            "Kerala",
            "Madhya Pradesh",
            "Maharashtra",
            "Manipur",
            "Meghalaya",
            "Mizoram",
            "Nagaland",
            "Odisha",
            "Punjab",
            "Rajasthan",
            "Sikkim",
            "Tamil Nadu",
            "Telangana",
            "Tripura",
            "Uttarakhand",
            "Uttar Pradesh",
            "West Bengal",
            "Andaman and Nicobar Islands",
            "Chandigarh",
            "Dadra and Nagar Haveli",
            "Daman and Diu",
            "Delhi",
            "Lakshadweep",
            "Puducherry");

  if(isset($_GET['country'])){
     if ($_GET['country'] == 'india') {
         foreach($states  as $sub){
 
               ?>
                  <option value="<?php echo $sub ;?>">
                     <?php echo $sub ;?>
                  </option>
                  <?php  }        
     }
      }
?>
               </select>
            </div>

            <br>


            <div class="web-template" id="homePageSectionData">

               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Header Title<span
                        class="star">*</span></label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title for header"
                     required value="Most trusted Digital Partner for your">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Descrtiption For Your Header<span
                        class="star">*</span></label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                     required>Awarno is an ambitious web designing company which makes industry level website from cutting edge technologies. Our websites will help you in establishing your business online and drive sales exponentially with the coordination from our digital marketing team.</textarea>
               </div>


               <br>
               <div class="certifications-img-grid">
                  <h4 for="exampleFormControlInput1" class="form-label fw-bold">Certification Thumbnails</h4>
                  <br>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Certification 1</label>
                     <input type="file" class="form-control" id="exampleFormControlInput1"
                        placeholder="Title for header">
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Certification 2</label>
                     <input type="file" class="form-control" id="exampleFormControlInput1"
                        placeholder="Title for header">
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Certification 3</label>
                     <input type="file" class="form-control" id="exampleFormControlInput1"
                        placeholder="Title for header">
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Certification 4</label>
                     <input type="file" class="form-control" id="exampleFormControlInput1"
                        placeholder="Title for header">
                  </div>
               </div>

               <!-- first section ends  -->
               <div class="container mx-auto">
                  <div class="row align-items-center d-flex justify-content-between">
                     <h2 class="text-dark col-6 fw-lighter">Collabration With Us</h2>
                     <div class="col-6 text-right">
                        <button class="me-auto btn btn-info">Save</button>
                        <button class="ms-atuo btn btn-success">Publish</button>
                     </div>
                  </div>
                  <br><br>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Title<span class="star">*</span></label>
                     <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Title for header" required>
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Descrtiption <span
                           class="star">*</span></label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
                  </div>


                  <br>
                  <div class="certifications-img-grid">
                     <h4 for="exampleFormControlInput1" class="form-label fw-bold">Images</h4>
                     <br>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image 1</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1"
                           placeholder="Title for header">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image 2</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1"
                           placeholder="Title for header">
                     </div>
                  </div>
               </div>
               <!-- collab section ends  -->
               <div class="container mx-auto">
                  <div class="row align-items-center d-flex justify-content-between">
                     <h2 class="text-dark col-6 fw-lighter">Add Services</h2>
                     <div class="col-6 text-right">
                        <button class="me-auto btn btn-info">Save</button>
                        <button class="ms-atuo btn btn-success">Publish</button>
                     </div>
                  </div>

                  <div class="row mt-3">
                     <div class="col-6">
                        <!-- add service section  -->
                        <div class="mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Title<span
                                 class="star">*</span></label>
                           <input type="text" class="form-control" id="exampleFormControlInput1"
                              placeholder="Title for header" required>
                        </div>
                        <div class="mb-3">
                           <label for="exampleFormControlTextarea1" class="form-label">Descrtiption<span
                                 class="star">*</span></label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Icon</label>
                           <input type="file" class="form-control" id="exampleFormControlInput1"
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
                        </table>
                     </div>
                  </div>
               </div>
               <!-- service section ends  -->
               <div class="container mx-auto">
                  <div class="row align-items-center d-flex justify-content-between">
                     <h2 class="text-dark col-6 fw-lighter">About Section</h2>
                     <div class="col-6 text-right">
                        <button class="me-auto btn btn-info">Save</button>
                        <button class="ms-atuo btn btn-success">Publish</button>
                     </div>
                  </div>
                  <br><br>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Heading<span class="star">*</span></label>
                     <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Title for header" required>
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Descrtiption <span
                           class="star">*</span></label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
                  </div>


                  <br>
               </div>
               <!-- about section ends  -->
               <div class="container mx-auto">
                  <div class="row align-items-center d-flex justify-content-between">
                     <h2 class="text-dark col-6 fw-lighter">Support Section</h2>
                     <div class="col-6 text-right">
                        <button class="me-auto btn btn-info">Save</button>
                        <button class="ms-atuo btn btn-success">Publish</button>
                     </div>
                  </div>
                  <br><br>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Heading<span class="star">*</span></label>
                     <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Title for header" required>
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Descrtiption <span
                           class="star">*</span></label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
                  </div>


                  <br>
               </div>
               <!-- support section ends  -->
               <div class="container mx-auto">
                  <div class="row align-items-center d-flex justify-content-between">
                     <h2 class="text-dark col-6 fw-lighter">Add Testimonial</h2>
                     <div class="col-6 text-right">
                        <button class="me-auto btn btn-info">Save</button>
                        <button class="ms-atuo btn btn-success">Publish</button>
                     </div>
                  </div>

                  <div class="row mt-3">
                     <div class="col-6">
                        <!-- add service section  -->
                        <div class="mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Author<span
                                 class="star">*</span></label>
                           <input type="text" class="form-control" id="exampleFormControlInput1"
                              placeholder="Title for header" required>
                        </div>
                        <div class="mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Reference<span
                                 class="star">*</span></label>
                           <input type="text" class="form-control" id="exampleFormControlInput1"
                              placeholder="Title for header" required>
                        </div>
                        <div class="mb-3">
                           <label for="exampleFormControlTextarea1" class="form-label">Description<span
                                 class="star">*</span></label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Profile</label>
                           <input type="file" class="form-control" id="exampleFormControlInput1"
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
                        </table>
                     </div>
                  </div>
                  <!-- finish  -->
                  <div class="container mx-auto mt-5 mb-3">
                     <div class="row align-items-center d-flex justify-content-between">
                        <h2 class="text-dark col-6 fw-lighter">Add FAQs</h2>
                        <div class="col-6 text-right">
                           <button class="me-auto btn btn-info">Save</button>
                           <button class="ms-atuo btn btn-success">Publish</button>
                        </div>
                     </div>

                     <div class="row mt-3">
                        <div class="col-6">
                           <!-- add service section  -->
                           <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Question<span
                                    class="star">*</span></label>
                              <input type="text" class="form-control" id="exampleFormControlInput1"
                                 placeholder="Title for header" required>
                           </div>
                           <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Answer<span
                                    class="star">*</span></label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                 required></textarea>
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
                           </table>
                        </div>
                     </div>
                  </div>
               </div>

            </div>


      </section>
   </main>

   <script src="admin.js">
   </script>
</body>

</html>