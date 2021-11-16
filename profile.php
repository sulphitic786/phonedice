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

  <title>Profile</title>
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
          <li><a href="index.html">Home</a></li>
          <li><a href="index.html">Dashbord</a></li>
          <li><a href="#about">Add Category</a></li>
          <li><a href="#services">View Categories</a></li>
          <li><a href="#portfolio">Add Contact</a></li>
          <li><a href="#team">View Contact</a></li>
          <li><a href="#contact">Upgrade Account</a></li>
          <li class="active"><a href="profile.php">View Profile</a></li>
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
              <h2>Welcome to the Dashbord!</h2>
              </div>
              </artical>
            </div>
                <?php 
    include('../include/dbcon.php');
    $id = $_SESSION['uid'];
    $sql = "SELECT * FROM `login` WHERE `id` = `$id`";
    $run = mysqli_query($con,$sql);
    if (mysqli_num_rows($run) > 0 )
     {
      $data = mysqli_fetch_assoc($run);
        ?>
          <table border="1" width="80%" align="center">
            <tr>
              <th colspan="3"> Student Detail</th>
            </tr>

            <tr>
              <td rowspan="5">
                <img src="dataimg/<?php echo $data['image']; ?>"style="max-height: 150px; max-width: 100px;" >
              </td>
              <th>First Name:</th>
              <td> <?php echo $data['fname']; ?></td>
            </tr>
                
            <tr>
              <th>Last Name:</th>
              <td> <?php echo $data['lname']; ?></td>
            </tr>

            <tr>
              <th>Gender:</th>
              <td> <?php echo $data['gender']; ?></td>
            </tr>

            <tr>
              <th>Account:</th>
              <td> <?php echo $data['account']; ?></td>
            </tr>

            <tr>
              <th>City:</th>
              <td> <?php echo $data['city']; ?></td>
            </tr>

          </table>
        <?php
     }
     else{
            echo "<script> alert('No Records Found To Show!'); </script> ";
         }



?>

           
          </form>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>PhoneDice</span></strong>. All Rights Reserved
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