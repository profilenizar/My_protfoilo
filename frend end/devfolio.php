<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DevFolio Bootstrap Portfolio Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.9.1
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="bg-danger">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">PORT<span class="text-danger">Folio<span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active " href="#hero">Ho<span class="text-danger">me<span></a></li>
          <li><a class="nav-link scrollto" href="#about">Abo<span class="text-danger"><span>ut</a></li>
          <li><a class="nav-link scrollto" href="#resume">Res<span class="text-danger"><span>ume</a></a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <li><a class="nav-link scrollto" href="#work">pass<span class="text-danger"><span>ion</a></li>
          <!-- <li><a class="nav-link scrollto" href="#blog">Bl <span class="text-danger"><span>og</a></a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a> -->
            <!-- <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul> -->
          </li>
          <li><a class="nav-link scrollto" href="#contact">Cont <span class="text-danger"><span>act</a></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/me.jpeg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4"> <span class="text-danger">I am Moham</span>ed Nizhar</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Web Developer, Shortfilm Director"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route ">
      <div class="container">
        <div class="row">
        <?php
                    include "connect.php";
                         $sql="SELECT * FROM `user`";
                          $set = mysqli_query($conn,$sql);
                          while($col = mysqli_fetch_array($set)){

                    ?>
            <div class="col-sm-12 ">
            <div class="box-shadow-full bg-dark">
              <div class="row ">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="<?php echo "../admin panal/upload/",$col['profile_image'] ?>" class="img-fluid rounded b-shadow-a" alt="no image">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s text-light">Name: </span> <span class="text-danger"><?php  echo $col['Name'];?> </span></p>
                        <p><span class="title-s  text-light">Profile: </span> <span class="text-danger"><?php echo $col['Profile'];?> </span></p>
                        <p><span class="title-s text-light">Email: </span> <span class="text-danger"><?php echo $col['Email'];?></span></p>
                        <p><span class="title-s text-light">Phone: </span> <span class="text-danger"><?php echo $col['P.no'];?></span></p>
                      </div>
                    </div>
                 
                  </div>

                  <div class="skill-mf">
                    <h3 class="title-s text-danger">Sk<span class="text-light">ill</h3>
                    <span class="text-light">HTML</span> <span class="pull-right text-light">85%</span>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-light">CSS3</span> <span class="pull-right  text-light">75%</span>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-light">bootstrap5</span> <span class="pull-right  text-light">60%</span>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-light">JAVASCRIPT</span> <span class="pull-right text-light">70%</span>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-light">jquery</span> <span class="pull-right  text-light">60%</span>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-light">PHP</span> <span class="pull-right  text-light">60%</span>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-light">Mysql</span> <span class="pull-right text-light">70%</span>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left text-light">
                        About me
                      </h5>
                    </div>
                    <p class="lead text-light">
                     <?php
                           echo $col['About_Me'];
                  ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php   } ?>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- resume section start -->

    <section id="resume" class="resume">
     <div class="container">
       <div class="title-box text-center">
              <h3 class="title-a text-light">
                Resume
              </h3>
              <div class=" bg-dark line-mf"></div>
            </div>

             <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Mohamed Nizhar</h4>
              <ul class="text-light">
                <li>134/170u,baithulmal nager,kottar,Nagercoil</li>
                <li>8778683852</li>
                <li>mohamednizar7846@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title"><i class="bi bi-mortarboard-fill"></i>Education</h3>
            <div class="resume-item">
              <h4> Government Higher Secondar School Ezhakaram</h4>
              <ul class="text-light">
                <li>S.S.L.C</li>
                <li>70%</li>
                <li>2012</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>D V.D Higher Secondar School </h4>
              <ul class="text-light">
                <li>H S.C</li>
                <li>54%</li>
                <li>2014</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>K.N.S.K polytechnic college </h4>
              <ul class="text-light">
                <li>Diploma mechanical engineering </li>
                <li> 63%</li>
                <li>2017 </li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Manonmanium sundarnar University </h4>
              <ul class="text-light">
                <li> Bachelor Of Computer Applications</li>
                <li>64% </li>
                <li>2022 </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title"><i class="bi bi-gear-wide"></i>Working Experience</h3>
            <div class="resume-item">
              <h4>Tranzindia Corporate Network </h4>
              <h5>December 2018 - December 2021 </h5>
              <p class="text-light"><em>Nagercoil</em></p>
            </div>
            <h3 class="resume-title">Internship</h3>
            <div class="resume-item">
              <ul class="text-light">
              <li>Cloverworld Technologies</li>
             <li> September-2022</li>
             </ul>
            </div>
            <h3 class="resume-title">Project</h3>
            <div class="resume-item">
              <ul class="text-light">
              <li> Pneumatic punching machine
                 (In Diploma)</li>
             </ul>
            </div>
            <h3 class="resume-title">Interests</h3>
            <div class="resume-item">
              <ul class="text-light">
              <li> Short film director,Book Reading, Cycling</li>
             </ul>
            </div>
            <h3 class="resume-title">Languages</h3>
            <div class="resume-item">
              <ul class="text-light">
              <li> Tamil • English(basic) • Malyalam</li>
             </ul>
            </div>
          </div>
        </div>

        <!-- resume section end -->

   

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center bg-dark">
              <h3 class="title-a text-danger">
                Passion
              </h3>
              <p class="subtitle-a text-light">
                I AM SHORT FILM DIRECTOR
              </p>
              <div class="line-mf bg-light"></div>
            </div>
          </div>
        </div>
        <div class="row">
                         <?php
                                include 'connect.php';
                                $sql="SELECT * FROM `work`";
                                $set = mysqli_query($conn,$sql);
                         while ($col = mysqli_fetch_array($set)) {
                         ?>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="<?php echo "../admin panal/upload/", $col['img1'] ?>"alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?php echo $col['Category']?></h2>
                    <div class="w-more">
                      <span class="w-ctegory"> <span><?php  echo $col['Category'];?> </span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <!-- <a href="portfolio-details.php?id=<?php echo $col['id']?>"> <span class="bi bi-plus-circle"></span></a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>           
          <?php } ?> 
          </div>
      </div>
    </section><!-- End Portfolio Section -->

   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax sect-mt4 route bg-danger" >
      <!-- <div class="overlay-mf"></div> -->
      <div class="container bg-dark">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded bg-danger">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                   
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> Baithul mal nager </li>
                        <li><span class="bi bi-phone"></span> 8778683852 </li>
                        <li><span class="bi bi-envelope"></span>mohamednizar7846@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle "><i class="bi bi-facebook "></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="bg-danger">
    <div class="container ">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>ProtFolio</strong>. All Rights Reserved</p>
            <!-- <div class="credits"> -->
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center bg-dark"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>