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
            <nav class="text-white btn drop-down-menu bg-dark">Pages <i class="fas fa-sort-down ps-5"></i></nav>
            <div class="panel bg-dark ">
            <nav><a href="pages.php" class="text-white btn">Manage Pages</a></nav>
         <nav><a href="add_pages.php" class="text-white btn ">Add Pages</a></nav>
         <nav><a href="manage_footer.php" class="text-white btn ">Manage Footer</a></nav>
            </div>
         </nav>
            <nav class="text-white btn drop-down-menu bg-dark">Blogs <i class="fas fa-sort-down ps-5"></i></nav>
            <div class="panel bg-dark">
            <nav><a href="blogs.php" class="text-white btn">Manage Blog Posts</a></nav>
         <nav><a href="addpost.php" class="text-white btn ">Add Post</a></nav>
            </div>
         </nav>
         <nav class='bg-danger'>
            <a href="forms.php" class="text-white btn">Forms</a>
         </nav>
      </aside>
      <section class="w-75 mx-auto h-100 pb-5">
         <div class="container mx-auto">
            <div class="row align-items-center d-flex justify-content-between">
               <h2 class="text-dark col-6 fw-lighter">Forms</h2>
               <div class="col-6 text-right">
                  <button class="me-auto btn btn-info">Save</button>
               <button class="ms-atuo btn btn-success">Publish</button>
               </div>
            </div>
            <select class="form-select w-25 mt-5" aria-label=" example" id="pageSelect">
            <option selected>Select Form</option>
            <option value="home">Career</option>
            <option value="about">Feedback</option>
            <option value="contact">Contact</option>
            </select>
            <table class="w-100 mt-4 mx-auto text-center">
            <td>ID</td>
            <td>NAMES</td>
            <td>EMAIL</td>
            <td>MOBILE</td>
            <td>DATE</td>
            <td>STATUS</td>
            <td>ACTIONS</td>
            </table>
         </div>
      </section>
   </main>

   <script src="admin.js"></script>
</body>

</html>