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
         <nav class="bg-danger"><a class="text-white btn">Dashboard</a></nav>
         <nav><a href="template.php" class="text-white btn">Template</a></nav>
         <nav><a href="menus.php" class="text-white btn">Menus</a></nav>
         <nav><a href="clients.php" class="text-danger btn ">Clients</a></nav>
         <nav><a href="services.php" class="text-white btn ">Services</a></nav>
         <nav><a href="about.php" class="text-white btn ">About</a></nav>
         <nav><a href="support.php" class="text-white btn ">Support</a></nav>
         <nav><a href="testimonial.php" class="text-white btn ">Testimonials</a></nav>
         <nav><a href="faqs.php" class="text-white btn ">FAQs</a></nav>
         <nav>
            <nav class="text-white btn drop-down-menu bg-dark">Blogs <i class="fas fa-sort-down ps-5"></i></nav>
            <div class="panel bg-dark">
            <nav><a href="blogs.php" class="text-white btn">Manage Blog Posts</a></nav>
         <nav><a href="addpost.php" class="text-white btn ">Add Post</a></nav>
            </div>
         </nav>
      </aside>

      <section class="w-75 mx-auto h-100 pb-5">
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
               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title for header"
                  required>
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
               <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Title for header">
            </div>
            <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label">Image 2</label>
               <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Title for header">
            </div>
         </div>
      </section>
   </main>
   <script src="admin.js"></script>
</body>

</html>