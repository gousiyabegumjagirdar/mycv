<?php
require('include/db.php');
$query = "select * from home,section_controlii,social_media1,about,personal_info,skill";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$user_data['title']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.6.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="images/<?=$user_data['profilepic']?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php"><?=$user_data['title']?></a></h1>
        <?php
        if ($user_data['section'])
          {
            ?>
          <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/"<?=$user_data['twitter']?>  class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://facebook.com/" <?=$user_data['facebook']?>class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/"<?=$user_data['instagram']?> class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://skype.com/"<?=$user_data['skype']?> class="google-plus"><i class="bx bxl-skype"></i></a>
          <?php
        }
        ?>
        </div>

      </div>
        
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <?php
          if ($user_data['home']) {
            ?>
        <?php
        }
          if ($user_data['about']) {
            ?>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
           <?php
         }
          if ($user_data['resume']) {
            ?>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
           <?php
         }
          if ($user_data['contact']) {
            ?>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <?php
        }
?>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
 <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="images/<?=$user_data['profilepic']?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?=$user_data['title']?></h3>
            <p class="font_italic">
              <?=$user_data['subtitle']?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                                        <?php
                            $query2 = "select * from personal_info";
                            $run2 = mysqli_query($db,$query2);
                            while ($personal_info = mysqli_fetch_array($run2)) {
                              ?>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong><?=$personal_info['birthday']?>
                            <li><i class="bi bi-chevron-right"></i><strong>Age:</strong> <span><?=$personal_info['age']?></span></li>
                              <li><i class="bi bi-chevron-right"></i><strong>Email:</strong><span><?=$personal_info['email']?></span></li>
                              <li><i class="bi bi-chevron-right"></i><strong>Phone:</strong><span><?=$personal_info['phone']?></span></li>
                              <li><i class="bi bi-chevron-right"></i><strong>City:</strong><span><?=$personal_info['city']?></span></li>
                            <?php
                            }
                      ?>
                  
              </div>
              <div class="col-lg-6">
                  
            </div>
            <p>
              <?=$user_data['disc']?></p>
              <!--skill-->
                <div class="row skills-content">

          <div class="col-lg-12" data-aos="fade-up">
                <?php
                            $query3 = "select * from skill";
                            $run3 = mysqli_query($db,$query3);
                            while ($skill = mysqli_fetch_array($run3)) {
                              ?>
            <div class="progress">
                 
                              
                                <span class="skill"><?=$skill['skill_name']?><i class="val"><?=$skill['value']?></i></span>
                                <div class="progress-bar-wrap">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="<?=$skill['value']?>" aria-valuein="0" aria-valuemax="100"></div>
                                </div>
                                <?php
                              }
                              ?>
                              </div>
               </div>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">

          <h2>Resume</h2>
          <?php
                            $query3 = "select * from resume";
                            $run3 = mysqli_query($db,$query3);
                            while ($resume = mysqli_fetch_array($run3)) {
                              ?>
                  </div>

        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
            <div class="resume-item pb-0">
              <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong><span><?=$resume['name']?></span></li>

                            <li><i class="bi bi-chevron-right"></i> <strong>Experince:</strong><span><?=$resume['exp']?></span></li>

              <li><i class="bi bi-chevron-right"></i> <strong>Education:</strong><span><?=$resume['edu']?></span></li>

              <li><i class="bi bi-chevron-right"></i> <strong>Speciality:</strong><span><?=$resume['spl']?></span></li>

              <li><i class="bi bi-chevron-right"></i> <strong>Languages Known:</strong><span><?=$resume['lang']?></span></li>



             <li><i class="bi bi-chevron-right"></i> <strong>Hobbies:</strong><span><?=$resume['hobbies']?></span></li>
            
            
            <?php
          }
          ?>
        </div>
        </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
                                                 <?php
                            $query4 = "select * from contact";
                            $run4 = mysqli_query($db,$query4);
                            while ($contact = mysqli_fetch_array($run4)) {
                              ?>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <div class="name">
                
                
                <h2><?=$contact['name']?></h2>
              </div>
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?=$contact['add']?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><span><?=$contact['email']?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><span><?=$contact['call']?></p>
              </div>

            <?php
          }
          ?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>