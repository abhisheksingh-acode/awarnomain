<?php
session_start();

include 'server.php';
 if(isset($_GET['edit'])){
   $id = $_GET['id'];
   $_SESSION['blog_id'] = $id ;

   $editBlog = "select * from blog_post where id = {$id} ";
   $fireIdRow = mysqli_query($conn,$editBlog);
   $fetchIdRow = mysqli_fetch_array($fireIdRow);
};

if (isset($_POST['update'])) {

   $topic = $_POST['blogName'] ;
   $description = $_POST['shortDescription'] ;
   $content = $_POST['content'] ;
   $author = $_POST['author'] ;
   $status = $_POST['status'] ; 
   $image = $_FILES['blogImage'] ;
   

   $imgPath = 'uploads/'. $image['name'];

  move_uploaded_file($image['tmp_name'],$imgPath);

   $updateSQL = "update blog_post set
   img = '$imgPath',
   topic = '$topic',
   description = '$description',
   content = '$content',
   author = '$author',
   status = '$status',
   where id = {$_SESSION['blog_id']}";

   mysqli_query($conn,$updateSQL);
};
if (isset($_POST['save'])) {

   $topic = $_POST['blogName'] ;
   $description = $_POST['shortDescription'] ;
   $content = $_POST['content'] ;
   $author = $_POST['author'] ;
   $status = $_POST['status'] ; 
   $image = $_FILES['blogImage'] ;

   $imgPath = 'uploads/'. $image['name'];

   move_uploaded_file($image['tmp_name'],$imgPath);

   $insertSQL = "insert into blog_post (image,topic,author,description,content,status) values ('$imgPath','$topic', '$author','$description','$content','$status') ";

   mysqli_query($conn,$insertSQL);

   header('location:addpost.php');
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
         <nav class="text-white btn drop-down-menu active-drop-down bg-danger">Blogs <i
               class="fas fa-sort-down ps-5"></i></nav>
         <div class="panel bg-dark">
            <nav><a href="blogs.php" class="text-white btn">Manage Blog Posts</a></nav>
            <nav><a href="addpost.php" class="text-danger btn ">Add Post</a></nav>
         </div>
         </nav>
         <nav>
            <nav><a href="forms.php" class="text-white btn">Forms</a></nav>
         </nav>
      </aside>

      <section class="w-75 mx-auto h-100 pb-5">
         <div class="container mx-auto">
            <div class="row align-items-center d-flex justify-content-between">
               <h2 class="text-dark col-6 fw-lighter">Add Post</h2>
               <div class="col-6 text-right">
                  <button class="me-auto btn btn-info" type="submit" form="blog" name="<?php echo (isset($_GET['edit']))?'update':'save';?>">Save</button>
               </div>
            </div>
            <form class="container mx-auto p-0 d-flex justify-content-between" id="blog" method="POST" action="addpost.php"
               enctype="multipart/form-data">
               <div class="left-section-form w-50">
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label fw-bold">Blog Name</label>
                     <input type="text" placeholder="Blog Name" name="blogName" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" required value="
                        <?php echo (isset($_GET['edit']))? $fetchIdRow['topic']:''  ;?>">
                  </div>
                  <div class="mb-3 ">
                     <label for="exampleFormControlTextarea1" name="shortDescription"
                        class="form-label fw-bold">Description</label>
                     <textarea class="form-control" placeholder="Short Description:" id="exampleFormControlTextarea1"
                   name="shortDescription" rows="3">
                   <?php echo (isset($_GET['edit']))? $fetchIdRow['description']:''  ;?>
                  </textarea>
                  </div>
                  <div class="mb-3 ">
                     <label for="exampleFormControlTextarea1" class="form-label fw-bold">Content</label>
                     <textarea class="form-control" name="content" id="postEditor" rows="2">
                     <?php echo (isset($_GET['edit']))? $fetchIdRow['content']:''  ;?>
                  </textarea>
                  </div>
               </div>
               <div class="right-section-form w-50 px-4">
                  <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label fw-bold">Featured Image</label>
                     <input type="file" class="form-control" name="blogImage" id="fileinput1" />

                  </div>
                  <div class="mb-3 ">
                     <label for="exampleFormControlTextarea1" class="form-label fw-bold">Status</label>
                     <select name="status" class="form-select" id="" value="<?php echo (isset($_GET['edit']))? $fetchIdRow['status']:''  ;?>">
                        <option value="draft">draft</option>
                        <option value="publish">publish</option>
                     </select>
                  </div>
               </div>
            </form>
         </div>
      </section>
   </main>
   <script src="admin.js"></script>
   <script src="./texteditor/rte.js"></script>
   <script>
      var editor1cfg = {}
      editor1cfg.toolbar = "basic";
      var postEditor = new RichTextEditor('#postEditor', editor1cfg)
   </script>
</body>

</html>