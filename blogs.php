<?php

include 'server.php';

if(isset($_GET['delete'])){
   $id = $_GET['id'];
   mysqli_query($conn,"delete from blog_post where id = {$id}") ;
};
?>


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
            </div>
         </nav>
            <nav class="text-white btn drop-down-menu active-drop-down bg-danger">Blogs <i class="fas fa-sort-down ps-5"></i></nav>
            <div class="panel bg-dark">
            <nav><a href="blogs.php" class="text-danger btn">Manage Blog Posts</a></nav>
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
               <h2 class="text-dark col-6 fw-lighter">Manage Posts</h2>
               <div class="col-6 text-right">
                  <button class="me-auto btn btn-info">Save</button>
               <button class="ms-atuo btn btn-success">Publish</button>
               </div>
            </div>
            <table class="w-100 mt-4 mx-auto text-center">
            <thead>
            <td>ID</td>
            <td>IMAGES</td>
            <td>TOPIC</td>
            <td>DATE</td>
            <td>STATUS</td>
            <td>ACTIONS</td>
            </thead>
            <tbody>
            <?php
     $sel_blogs = "select * from blog_post";
     $fire = mysqli_query($conn,$sel_blogs);

         while($fetch_blogs = mysqli_fetch_array($fire)){
?>
           <tr>
           <td><?php echo $fetch_blogs['id']  ;?></td>
           <td><img src="<?php echo $fetch_blogs['image'] ;?>" alt="" width="80px" height="80px"></td>
           <td><?php echo $fetch_blogs['topic'];?></td>
           <td><?php echo $fetch_blogs['date'];?></td>
           <td><?php echo $fetch_blogs['status'];?></td>
           <td>
           
           <a href="addpost.php?id=<?php echo $fetch_blogs['id']; ?>&edit=true"><i
               class="fas bg-info rounded fa-edit text-white p-2" title="update"></i> </a>
         <a href="blogs.php?id=<?php echo $fetch_blogs['id'];?>&delete=true"><i
               class="fa fa-trash bg-danger p-2 rounded text-white" aria-hidden="true"
               title="delete"></i></a>
           </td>
           </tr>
  
         <?php }
            ?>
            </tbody>


            </table>
         </div>
      </section>
   </main>

   <script src="admin.js"></script>
</body>

</html>