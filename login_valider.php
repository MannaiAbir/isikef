<?php  
 //login_valider.php  
 session_start();  
 if(isset($_SESSION["username"])&&isset($_SESSION['password']))  
 {  
     $var=$_SESSION["username"]; $mot=$_SESSION['password'];
      //echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
 }  
 else  
 {  
      header("location:pdo_login.php");  
 }  
 $host = 'localhost';
 $dbname = 'ensg';
 $username = 'root';
 $password = '';
   
 $dsn = "mysql:host=$host;dbname=$dbname"; 
 // récupérer tous les utilisateurs
 $sql = "SELECT * FROM teacher WHERE mail='$var' AND password='$mot'";
  
 try{
  $pdo = new PDO($dsn, $username, $password);
  $stmt = $pdo->query($sql);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  if($stmt === false){
   die("Erreur");
  }
  
 }catch (PDOException $e){
   echo $e->getMessage();
 }

 ?> 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace enseignants</title>

     <!-- Favicons -->
  <link href="assets/img/logoisik.png" rel="icon"></a>
  <link href="assets/img/logoisik.png" rel="apple-touch-icon">

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

</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
     <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>ISI KEF</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="login_valider.php">Profil</a></li>
          <li><a class="nav-link scrollto" href="#actualités">Emploi</a></li>
          <li><a href="/chatroom/index.php">Chat</a></li>
          <li><a href="logout.php">Se déconnecter</a></li> 
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
         </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

     </div>
  </header>
  <!-- End Header -->
  <main id="main">
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
   <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><B>Welcom Ms/Madame <?php  echo htmlspecialchars($row['username']) ?></B></h2>
        
    </div>

   </div>
  </section>
  <!-- End Breadcrumbs Section -->
  </main>
   <!-- End #main -->
  <nav>
  <ul>
    <li><a href="#">Accueil</a></li>
    <li><a href="login_valider.php">Profil</a></li>
    <li><a href="logout.php">Se déconnecter</a></li>
  </ul>
  </nav>
  <B>Welcom Ms/Madame <?php  echo htmlspecialchars($row['username']) ?></B>

 

  <main id="main">

    <!-- ======= L'institut Section ======= -->
    <section id="institut" class="institut">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>INSTITUT SUPÉRIEUR D'INFORMATIQUE DU KEF</h3>
              <a href="aboutus.php" class="about-btn">Notre Institut<i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4> <a href="aboutus.php" class="about-btn">Mot du Directeur<i class="bx bx-chevron-right"></i></a></h4>
    
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4><a href="aboutus.php" class="about-btn">Organigramme administrati<i class="bx bx-chevron-right"></i></a></h4>
                
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4><a href="media.php" class="about-btn">Media<i class="bx bx-chevron-right"></i></a></h4>
                 
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4><a href="aboutus.php" class="about-btn">Plan de l’institut<i class="bx bx-chevron-right"></i></a></h4>
                  
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End L'institut Section -->

    <!-- ======= Nos information Section ======= -->
    <section id="information" class="information ">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Nos Formations</h2>
          <p></p>
        </div>
            
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><strong>LCS</strong></h4>
              <h6>Licence Computer Science:</h6>
              <p class="description">
               <a href="gl.html"> Génie Logiciel Et Système D'Information : GL</a> </p>
                <p class="description">
                  <a href="mi.html">Informatique et Multimédia : IM </a>
                 </p>
            </div>
          </div>
           <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><strong>LCE</strong></h4>
              <h6>Licence en Computer Engineering:</h6>
              <p class="description">
                <a href="reseau.html">Ingénierie des réseaux et systèmes</a>
               </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><strong>SIW</strong></h4>
              <h6>Mastère de Recherche en Systèmes d'Informations et Web:</h6>
              <p class="description">
                <a href="siw.html">Plan d'études du Mastère de recherche en systèmes d'informations et web</a>
               </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><strong>ASRI</strong></h4>
              <h6>Mastère Professionnel en Administration et Sécurité des Réseaux Informatiques:</h6>
              <p class="description">
                <a href="asri.html">Détails sur le parcours - ASRI</a>
               </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><strong>AWI</strong></h4>
              <h6>Mastère Professionnel en Application Web Intelligente:</h6>
              <p class="description">
                <a href="#"></a>
               </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><strong>NTICDIA</strong></h4>
              <h6>Mastère Co-Construite en Nouvelles Technologies de l’Information et de la Communication dédiées à l'Innovation de l'Agriculture:</h6>
              <p class="description">
                <a href="nticdia.html">Détails sur le Parcours - NTICDIA</a>
               </p>
            </div>
          </div>
          

        </div>

      </div>
    </section><!-- End Nos information Section -->

    <!-- ======= Emploi de temps Section ======= -->
    <section id="actualités" class="actualités">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>emploi des temps</h2>
          <p></p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="actualités-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-etudiant"></li>
              <li data-filter=".filter-enseignants">enseignants</li>
            </ul>
          </div>
        </div>

        <div class="row actualités-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 actualités-item filter-pfa">
            <div class="actualités-wrap">
              <img src="" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/" data-gallery="actualitésGallery" class="actualités-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="actualités-details.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Emploi Section -->

    <!-- ======= EVENTS Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2></h2>
        </div>

      </div>
    </section><!-- End Event Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Adresse : 5 Rue Saleh Ayech - 7100 Kef</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>isikef2023@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>Tél : (216) 78 201 056
                    Fax : (216) 78 200 237</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3220.5121421290924!2d8.70833621476092!3d36.17842461015173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fba44eb16009e5%3A0xea46e94b9ed2cde8!2sInstitut%20Sup%C3%A9rieur%20de%20l%27Informatique%20du%20Kef!5e0!3m2!1sfr!2stn!4v1679225656075!5m2!1sfr!2stn&fbclid=IwAR11yWQwvKA3d8Qn7ltLOSyBAupYTafDQfZWXLWqCi7vQo9wLOWoa6Wc5_U" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Contact us</h3>
              <p class="pb-3"><em>5 Rue Saleh Ayech - 7100 Kef <p>
               <br>
                <strong>Phone:</strong> 78 201 056 <br>
                <strong>Fax:</strong> 78 200 237 <br>
                <strong>Email:</strong> .com<br>
              </p>
              <div class="social-links mt-3">
               
                <a href="https://www.facebook.com/profile.php?id=100057592473413" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="" class="google-plus"><i class="bx bxl-skype"></i></a>
              
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Vie estudiantine</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Activités culturelles</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"> Activités sportives </a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="4c.html">4C</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="liensU.html">Liens Utiles</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Media Room</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="droit.html">Droit d'accès aux informations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Votre e-mail ici </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>