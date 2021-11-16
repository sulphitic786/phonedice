<?php
session_start();
      if(isset($_SESSION['uid']))
      {
        
      }else{
        header('location:../login.php');
      }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashbord</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/Logo2.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

  
</head>

<body>
   
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages col-2 h-100">
    <div class="container d-flex align-items-center">

      <h1 class="logo fixed-top pl-2 pt-3"><a href="index.html">Phonedice</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu udash d-none d-lg-block ">
        <ul class="flex-column pt-5">
          <li><a href="../index.html">Home</a></li>
          <li class="active"><a href="userdash.php">Dashbord</a></li>
          <li><a href="#about">Add Category</a></li>
          <li><a href="#services">View Categories</a></li>
          <li><a href="#portfolio">Add Contact</a></li>
          <li><a href="#team">View Contact</a></li>
          <li><a href="upgradeAccount.php">Upgrade Account</a></li>
          <li><a href="profile.php">View Profile</a></li>
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

 <!-- ======= Registration ======= -->
    <section id="breadcrumbs" class="registration">
      <div class="container pl-5 data">
            <div class="row pt-3">
              <artical class="col-md-6 offset-sm-4">
              <div class="section-title">
              <h2>Welcome to Dashbord</h2>
              </div>
              </artical>
            </div> 
        </div>
    </section><!-- End Breadcrumbs -->

 
 


    <section class="container">
      <div class="row">

        <div class="col-sm-10 offset-sm-2">
          <div id="folder_table" class="table_responsive">
          </div>
        </div>
      

    <div class="m-auto col-sm-10">
   <button type="button" name="create_folder" id="create_folder" class="btn btn-success offset-lg-10 mb-2">
     Create Category</button>
     </div>
     <div class="model fade" id="folderModel" role="dialog">
       <div class="model-dialog">
         <div class="model-content">
           <div class="model-header">
             <button class="close" data-dismiss=s"model">
               &times;
             </button>
             <h4 class="model-title" id="change-title">
               Create Category
             </h4>
           </div>
           <div class="model-body">
             <p>Enter the Name
               <input type="text" name="folder_name" class="folder_name"></p>
               <br>
               <input type="hidden" name="action" id="action">
               <input type="hidden" name="old_name" id="old_name">
               <input type="button" name="folder_button" id="folder_button" class="btn btn-info" value="Create">
           </div>
           <div class="model-footer">
             <button class="btn btn-default" data-dismiss="model">Close</button>
           </div>
         </div>
       </div>
     </div>
     </div>
    </section>
  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>PhoneDice</span></strong>. All Rights Reserved
      </div>
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
<script>
  $(document).ready(function() {
    load_folder_list();
    function load_folder_list()
    {
      var action = "fetch";
      $.ajax({
        url: "action.php",
        method: "POST",
        data:{action:action},
        success:function(data)
        {
          $('#folder_table').html(data);
        }
       
      })
    }

    $(document).on('click', '#create_folder', function() {
      $(#action).val('create');
      $(#folder_name).val('');
      $(#folder_button).val('create');
      $(#old_name).val('');
      $(#change-title).val('Create Folder');
      $(#folderModel).model('show');
      

    });
      $(document).on('click', '#folder_button', function() {
        var folder_name = $('folder_name').val();
        var action = $('action').val();
        if (folder_name != '') {
          $.ajax({
            url:"action.php",
            method:"POST",
            data:{folder_name:folder_name, action:action},
            success:function(data)
            {
              $('#folderModel').model('hide');
              load_folder_list();
              alert(data);
            }
          });
        }
        else
        {
          alert("Enter Folder Name");
        }
      });

  });
</script>