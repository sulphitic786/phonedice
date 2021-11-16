<?php
session_start();
      if(isset($_SESSION['uid']))
      {
        
      }else{
        header('location:../login.php');
      }

     include('../include/dbcon.php');
     if (isset($_POST['upgrade'])) {

         $name = $_POST['name'];
         $cardNo = $_POST['cardNo'];
         $account = $_POST['account'];
         $date = $_POST['date'];
         $cvv = $_POST['cvv'];
         $lastDigit = $_POST['lastDigit'];


        $qry = "INSERT INTO `upgradeaccount` (`id`, `name`, `cardNo`, `account`, `date`, `cvv`, `lastDigits`) VALUES (NULL, '$name', '$cardNo', '$account', '$date', '$cvv', '$lastDigit')";

         $run = mysqli_query($con,$qry);
         
         if ($run) {
           
           ?>
              <script>
                alert('Request Sent!');
              </script>
           <?php
         }else
         {
           ?>
              <script>
                alert('Something Went Wrong!');
              </script>
           <?php
         }
        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Upgrade Account</title>
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
          <li><a href="userdash.php">Dashbord</a></li>
          <li><a href="#about">Add Category</a></li>
          <li><a href="#services">View Categories</a></li>
          <li><a href="#portfolio">Add Contact</a></li>
          <li><a href="#team">View Contact</a></li>
          <li class="active"><a href="upgradeAccount.php">Upgrade Account</a></li>
          <li><a href="profile.php?uid <?php echo $data['id']; ?>">View Profile</a></li>
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

 <!-- ======= Registration ======= -->
    <section id="breadcrumbs" class="registration">
      <div class="container pl-5 data">
            <div class="row pt-3">
              <artical class="col-md-6 offset-sm-4">
              <div class="section-title">
              <h2>Upgrade Your Account</h2>
              </div>
              </artical>
            </div>
 
        </div>
      </div> 
    </section><!-- End Breadcrumbs -->

 
 


    <section class="container">
      <div class="row">
        <div class="col-sm-10 offset-sm-2">
          <form action="upgradeAccount.php" method="post" enctype="multipart/form-data">

          <div class="row ">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on Card</label>
              <input type="text" name="name" class="form-control" id="cc-name" placeholder="Full Name As Displayed on Card" required>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit Card Number</label>
              <input type="text" name="cardNo" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit Card Number is Required
              </div>
            </div>
          </div>

            <div class="row my-2">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Select Account</label>
               <select id="inputState" name="account" required class="form-control">
               <option selected>Select Account</option>
               <option value="freeAccount">Free Account</option>
               <option value="premiumAccount">Premium Account</option>
               </select>
              <div class="invalid-feedback">
                Select Account!
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="date" name="date" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration Date Required
              </div>
            </div>
          </div>

            <div class="row my-2">
            <div class="col-md-6 ">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" name="cvv" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
            <div class="col-md-6">
              <label for="cc-cvv" class="form-label">Last 4 Digits</label>
              <input type="text" name="lastDigit" class="form-control" id="cc" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg mb-5" name="upgrade" type="submit">Upgrade Account</button>
           
          </form>
        </div>
      </div>
    </section>

    
  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container footer-bottom clearfix mt-3">
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
