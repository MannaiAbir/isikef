<?php  
 //login_success.php  
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
 $dbname = 'isi';
 $username = 'root';
 $password = '';
   
 $dsn = "mysql:host=$host;dbname=$dbname"; 
 // récupérer tous les utilisateurs
 $sql = "SELECT * FROM inscription WHERE mail='$var' AND password='$mot'";
  
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
    <title>Espace étudiant</title>

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
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#institut">L'institut</a></li>
          <li><a class="nav-link scrollto" href="#information">NOS Formations</a></li>
          <li><a class="nav-link scrollto" href="#actualités">Emploi</a></li>
          <li><a class="nav-link scrollto" href="#events">Calendrier</a></li>
          <li><a href="/chatroom/index.php">Chat</a></li>
          <li><a href="cours.php">Cours</a></li>
           <li><a href="login_success.php">Profil</a></li>
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
      <h2><B>Welcom <?php  echo htmlspecialchars($row['nom']); echo "  "; echo htmlspecialchars($row['prenom']); ?></B></h2>
        
    </div>

   </div>
  </section>
  <!-- End Breadcrumbs Section -->
  </main>
   <!-- End #main -->
  <nav>
  <ul>
    <li><a href="#">Accueil</a></li>
    <li><a href="login_success.php">Profil</a></li>
    <li><a href="logout.php">Se déconnecter</a></li>
  </ul>
  </nav>
  <B>Welcom <?php  echo htmlspecialchars($row['nom']); echo "  "; echo htmlspecialchars($row['prenom']); ?></B>

 

  <main id="main">

  <!-- ======= L'institut Section ======= -->
  <section id="institut" class="institut">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>INSTITUT SUPÉRIEUR D'INFORMATIQUE DU KEF</h3>
              <a href="aboutus.html" class="about-btn">Notre Institut<i class="bx bx-chevron-right"></i></a>
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
               <a href="gl.php"> Génie Logiciel Et Système D'Information : GL</a> </p>
                <p class="description">
                  <a href="mi.php">Informatique et Multimédia : IM </a>
                 </p>
            </div>
          </div>
           <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><strong>LCE</strong></h4>
              <h6>Licence en Computer Engineering:</h6>
              <p class="description">
                <a href="reseau.php">Ingénierie des réseaux et systèmes</a>
               </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><strong>SIW</strong></h4>
              <h6>Mastère de Recherche en Systèmes d'Informations et Web:</h6>
              <p class="description">
                <a href="siw.php">Plan d'études du Mastère de recherche en systèmes d'informations et web</a>
               </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><strong>ASRI</strong></h4>
              <h6>Mastère Professionnel en Administration et Sécurité des Réseaux Informatiques:</h6>
              <p class="description">
                <a href="asri.php">Détails sur le parcours - ASRI</a>
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
                <a href="nticdia.php">Détails sur le Parcours - NTICDIA</a>
               </p>
            </div>
          </div>
          

        </div>

      </div>
    </section><!-- End Nos information Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

        </div>

      </div>
    </section><!-- End Counts Section -->
<!-- ======= Actualités Section ======= -->
<section id="actualités" class="actualités">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Actualités</h2>
          <p> Dernières Actualités </p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="actualités-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-pfa">PFA</li>
              <li data-filter=".filter-pfe">PFE</li>
              <li data-filter=".filter-mastere">MASTERE</li>
            </ul>
          </div>
        </div>

        <div class="row actualités-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 actualités-item filter-pfa">
            <div class="actualités-wrap">
              <img src="assets/img/portfolio/stage.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/portfolio/stage.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="actualités-details.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Actualités Section -->
    <!-- ======= Emploi Section ======= -->
    <section id="actualités" class="actualités">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Emploi du temps </h2>
          <p> Emploi de temps des étudiants Semestre 2 2022/2023</p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="actualités-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-1lirs">1 LIRS</li>
              <li data-filter=".filter-1lsi">1 LSI </li>
              <li data-filter=".filter-2lirs">2 LIRS</li>
              <li data-filter=".filter-2lsi">2 LSI</li>
              <li data-filter=".filter-asri">ASRI</li>
              <li data-filter=".filter-awi">AWI</li>
              <li data-filter=".filter-swi">SWI</li>
            </ul>
          </div>
        </div>

        <div class="row actualités-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 actualités-item filter-1lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-A.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/portfolio/1-A.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-B.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-B.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-pfa">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-C.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-C.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-D.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-D.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-E.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-E.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lrsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-1.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-1.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lirs">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-2.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-2.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lirs">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-3.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-3.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lirs">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-4.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-4.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lirs">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-5.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-5.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-G.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-G.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-F.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-F.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-1lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/1-H.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/1-H.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="1 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lirs">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-1.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-1.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lirs">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-2.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-2.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lirs">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-3.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-3.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lirs">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-4.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-4.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lirs">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-5.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-5.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LIRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-SIA.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-SIA.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-SIB.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-SIB.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-SIC.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-SIC.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-SID.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-SID.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-SIE.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-SIE.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-SIF.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-SIF.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-SIG.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-SIG.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LSI"><i class="bx bx-plus"></i></a>
               
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-SIH.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-SIH.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-2lsi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-SII.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/2-SII.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="2 LSI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 actualités-item filter-asri">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/ASRI.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/ASRI.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="ASRI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-awi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/AWI.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/AWI.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="AWI"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 actualités-item filter-swi">
            <div class="actualités-wrap">
              <img src="assets/img/emploi/2-SWI.jpg" class="img-fluid" alt="">
              <div class="actualités-links">
                <a href="assets/img/emploi/SWI.jpg" data-gallery="actualitésGallery" class="actualités-lightbox" title="SWI"><i class="bx bx-plus"></i></a>
               
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section><!-- End Emploi Section -->

    <!-- ======= MOYENNE Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>VOTRE MOYENNE </h2>
          <p> </p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MOYENNE DE 2 LSI
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/etudiant.jpg" class="testimonial-img" alt="">
                <h3> <a href="#">CLICK ICI</a></h3>
                
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MOYENNE DE 2 LIRS
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/etudiant.jpg" class="testimonial-img" alt="">
                <h3> <a href="#">CLICK ICI</a></h3>
                
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MOYENNE DE AWI
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/etudiant.jpg" class="testimonial-img" alt="">
                <h3> <a href="#">CLICK ICI</a></h3>
                
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MOYENNE DE SWI
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/etudiant.jpg" class="testimonial-img" alt="">
                <h3> <a href="#">CLICK ICI</a></h3>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MOYENNE DE ASRI
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/etudiant.jpg" class="testimonial-img" alt="">
                <h3> <a href="#">CLICK ICI</a></h3>
                
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MOYENNE DE 3 LIRS
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/etudiant.jpg" class="testimonial-img" alt="">
                <h3> <a href="#">CLICK ICI</a></h3>
                
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MOYENNE DE 3 LIRS
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/etudiant.jpg" class="testimonial-img" alt="">
                <h3> <a href="#">CLICK ICI</a></h3>
                
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MOYENNE DE 1 LIRS
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/etudiant.jpg" class="testimonial-img" alt="">
                <h3> <a href="#">CLICK ICI</a> </h3>
                
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  MOYENNE DE 1 LSI
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/etudiant.jpg" class="testimonial-img" alt="">
                <h3> <a href="#">CLICK ICI</a></h3>
                
              </div>
            </div><!-- End testimonial item -->
           


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= EVENTS Section ======= -->
<section id="events" class="events">
      

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <a href="#"><h2>Events Calendrier</h2></a>
        </div>
        <div class="calendar">
        <style>
        

      :root {
    --calendar-bg-color: #262829;
    --calendar-font-color: #FFF;
    --weekdays-border-bottom-color: #404040;
    --calendar-date-hover-color: #505050;
    --calendar-current-date-color: #1b1f21;
    --calendar-today-color: linear-gradient(to bottom, #03a9f4, #2196f3);
    --calendar-today-innerborder-color: transparent;
    --calendar-nextprev-bg-color: transparent;
    --next-prev-arrow-color : #FFF;
    --calendar-border-radius: 16px;
    --calendar-prevnext-date-color: #484848
}

* {
    padding: 0;
    margin: 0;
}

.calendar {
    font-family: 'IBM Plex Sans', sans-serif;
    position: relative;
    max-width: 400px; /*change as per your design need */
    min-width: 320px;
    background: var(--calendar-bg-color);
    color: var(--calendar-font-color);
    margin: 20px auto;
    box-sizing: border-box;
    overflow: hidden;
    font-weight: normal;
    border-radius: var(--calendar-border-radius);
}

.calendar-inner {
    padding: 10px 10px;
}

.calendar .calendar-inner .calendar-body {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    text-align: center;
}

.calendar .calendar-inner .calendar-body div {
    padding: 4px;
    min-height: 30px;
    line-height: 30px;
    border: 1px solid transparent;
    margin: 10px 2px 0px;
}

.calendar .calendar-inner .calendar-body div:nth-child(-n+7) {
    border: 1px solid transparent;
    border-bottom: 1px solid var(--weekdays-border-bottom-color);
}

.calendar .calendar-inner .calendar-body div:nth-child(-n+7):hover {
    border: 1px solid transparent;
    border-bottom: 1px solid var(--weekdays-border-bottom-color);
}

.calendar .calendar-inner .calendar-body div>a {
    color: var(--calendar-font-color);
    text-decoration: none;
    display: flex;
    justify-content: center;
}

.calendar .calendar-inner .calendar-body div:hover {
    border: 1px solid var(--calendar-date-hover-color);
    border-radius: 4px;
}

.calendar .calendar-inner .calendar-body div.empty-dates:hover {
    border: 1px solid transparent;
}

.calendar .calendar-inner .calendar-controls {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

.calendar .calendar-inner .calendar-today-date {
    display: grid;
    text-align: center;
    cursor: pointer;
    margin: 3px 0px;
    background: var(--calendar-current-date-color);
    padding: 8px 0px;
    border-radius: 10px;
    width: 80%;
    margin: auto;
}

.calendar .calendar-inner .calendar-controls .calendar-year-month {
    display: flex;
    min-width: 100px;
    justify-content: space-evenly;
    align-items: center;
}

.calendar .calendar-inner .calendar-controls .calendar-next {
    text-align: right;
}

.calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-year-label,
.calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-month-label {
    font-weight: 500;
    font-size: 20px;
}

.calendar .calendar-inner .calendar-body .calendar-today {
    background: var(--calendar-today-color);
    border-radius: 4px;
}

.calendar .calendar-inner .calendar-body .calendar-today:hover {
    border: 1px solid transparent;
}

.calendar .calendar-inner .calendar-body .calendar-today a {
    outline: 2px solid var(--calendar-today-innerborder-color);
}

.calendar .calendar-inner .calendar-controls .calendar-next a,
.calendar .calendar-inner .calendar-controls .calendar-prev a {
    color: var(--calendar-font-color);
    font-family: arial, consolas, sans-serif;
    font-size: 26px;
    text-decoration: none;
    padding: 4px 12px;
    display: inline-block;
    background: var(--calendar-nextprev-bg-color);
    margin: 10px 0 10px 0;
}

.calendar .calendar-inner .calendar-controls .calendar-next a svg,
.calendar .calendar-inner .calendar-controls .calendar-prev a svg {
    height: 20px;
    width: 20px;
}

.calendar .calendar-inner .calendar-controls .calendar-next a svg path,
.calendar .calendar-inner .calendar-controls .calendar-prev a svg path{
    fill: var(--next-prev-arrow-color);
}

.calendar .calendar-inner .calendar-body .prev-dates,
.calendar .calendar-inner .calendar-body .next-dates {
    color: var(--calendar-prevnext-date-color);
}

.calendar .calendar-inner .calendar-body .prev-dates:hover,
.calendar .calendar-inner .calendar-body .next-dates:hover {
  border: 1px solid transparent;
  pointer-events: none;
}

          </style>
          <script>
            //check the console for date click event
//Fixed day highlight
//Added previous month and next month view

function CalendarControl() {
    const calendar = new Date();
    const calendarControl = {
      localDate: new Date(),
      prevMonthLastDate: null,
      calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      calMonthName: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec"
      ],
      daysInMonth: function (month, year) {
        return new Date(year, month, 0).getDate();
      },
      firstDay: function () {
        return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
      },
      lastDay: function () {
        return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
      },
      firstDayNumber: function () {
        return calendarControl.firstDay().getDay() + 1;
      },
      lastDayNumber: function () {
        return calendarControl.lastDay().getDay() + 1;
      },
      getPreviousMonthLastDate: function () {
        let lastDate = new Date(
          calendar.getFullYear(),
          calendar.getMonth(),
          0
        ).getDate();
        return lastDate;
      },
      navigateToPreviousMonth: function () {
        calendar.setMonth(calendar.getMonth() - 1);
        calendarControl.attachEventsOnNextPrev();
      },
      navigateToNextMonth: function () {
        calendar.setMonth(calendar.getMonth() + 1);
        calendarControl.attachEventsOnNextPrev();
      },
      navigateToCurrentMonth: function () {
        let currentMonth = calendarControl.localDate.getMonth();
        let currentYear = calendarControl.localDate.getFullYear();
        calendar.setMonth(currentMonth);
        calendar.setYear(currentYear);
        calendarControl.attachEventsOnNextPrev();
      },
      displayYear: function () {
        let yearLabel = document.querySelector(".calendar .calendar-year-label");
        yearLabel.innerHTML = calendar.getFullYear();
      },
      displayMonth: function () {
        let monthLabel = document.querySelector(
          ".calendar .calendar-month-label"
        );
        monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
      },
      selectDate: function (e) {
        console.log(
          `${e.target.textContent} ${
            calendarControl.calMonthName[calendar.getMonth()]
          } ${calendar.getFullYear()}`
        );
      },
      plotSelectors: function () {
        document.querySelector(
          ".calendar"
        ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
          <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
          <div class="calendar-year-month">
          <div class="calendar-month-label"></div>
          <div>-</div>
          <div class="calendar-year-label"></div>
          </div>
          <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
          </div>
          <div class="calendar-today-date">Today: 
            ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]}, 
            ${calendarControl.localDate.getDate()}, 
            ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]} 
            ${calendarControl.localDate.getFullYear()}
          </div>
          <div class="calendar-body"></div></div>`;
      },
      plotDayNames: function () {
        for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
        }
      },
      plotDates: function () {
        document.querySelector(".calendar .calendar-body").innerHTML = "";
        calendarControl.plotDayNames();
        calendarControl.displayMonth();
        calendarControl.displayYear();
        let count = 1;
        let prevDateCount = 0;
  
        calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
        let prevMonthDatesArray = [];
        let calendarDays = calendarControl.daysInMonth(
          calendar.getMonth() + 1,
          calendar.getFullYear()
        );
        // dates of current month
        for (let i = 1; i < calendarDays; i++) {
          if (i < calendarControl.firstDayNumber()) {
            prevDateCount += 1;
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="prev-dates"></div>`;
            prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
          } else {
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
          }
        }
        //remaining dates after month dates
        for (let j = 0; j < prevDateCount + 1; j++) {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
        }
        calendarControl.highlightToday();
        calendarControl.plotPrevMonthDates(prevMonthDatesArray);
        calendarControl.plotNextMonthDates();
      },
      attachEvents: function () {
        let prevBtn = document.querySelector(".calendar .calendar-prev a");
        let nextBtn = document.querySelector(".calendar .calendar-next a");
        let todayDate = document.querySelector(".calendar .calendar-today-date");
        let dateNumber = document.querySelectorAll(".calendar .dateNumber");
        prevBtn.addEventListener(
          "click",
          calendarControl.navigateToPreviousMonth
        );
        nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
        todayDate.addEventListener(
          "click",
          calendarControl.navigateToCurrentMonth
        );
        for (var i = 0; i < dateNumber.length; i++) {
            dateNumber[i].addEventListener(
              "click",
              calendarControl.selectDate,
              false
            );
        }
      },
      highlightToday: function () {
        let currentMonth = calendarControl.localDate.getMonth() + 1;
        let changedMonth = calendar.getMonth() + 1;
        let currentYear = calendarControl.localDate.getFullYear();
        let changedYear = calendar.getFullYear();
        if (
          currentYear === changedYear &&
          currentMonth === changedMonth &&
          document.querySelectorAll(".number-item")
        ) {
          document
            .querySelectorAll(".number-item")
            [calendar.getDate() - 1].classList.add("calendar-today");
        }
      },
      plotPrevMonthDates: function(dates){
        dates.reverse();
        for(let i=0;i<dates.length;i++) {
            if(document.querySelectorAll(".prev-dates")) {
                document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
            }
        }
      },
      plotNextMonthDates: function(){
       let childElemCount = document.querySelector('.calendar-body').childElementCount;
       //7 lines
       if(childElemCount > 42 ) {
           let diff = 49 - childElemCount;
           calendarControl.loopThroughNextDays(diff);
       }

       //6 lines
       if(childElemCount > 35 && childElemCount <= 42 ) {
        let diff = 42 - childElemCount;
        calendarControl.loopThroughNextDays(42 - childElemCount);
       }

      },
      loopThroughNextDays: function(count) {
        if(count > 0) {
            for(let i=1;i<=count;i++) {
                document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
            }
        }
      },
      attachEventsOnNextPrev: function () {
        calendarControl.plotDates();
        calendarControl.attachEvents();
      },
      init: function () {
        calendarControl.plotSelectors();
        calendarControl.plotDates();
        calendarControl.attachEvents();
      }
    };
    calendarControl.init();
  }
  
  const calendarControl = new CalendarControl();
          </script>
          <div>
    <form>
      <input placeholder="Event" type="text" name="name">
      <input type="date" name="date">
      <textarea placeholder="Notes" name="notes" cols="30" rows="10"></textarea>
      <select name="tags">
          <option value="event">event</option>
          <option value="important">important</option>
          <option value="festivity">festivity</option>
        </select>
    </form>
    <br>

  </div>
        </div>
          
      </div>
</section><!-- events  Section -->

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
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
                <div class="form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="1ére Lsi">1ére Lsi</option>
                <option value="1ére Liri">1ére Liri</option>
                <option value="2éme Lsi:GL">2éme Lsi:GL</option>
                <option value="2éme Lsi:MI">2éme Lsi:MI</option>
                <option value="2éme Liri">2éme Liri</option>
                <option value="3éme Lsi : GL">3éme Lsi : GL</option>
                <option value="3éme Lsi : MI">3éme Lsi : MI</option>
                <option value="3éme Liri">3éme Liri</option>
                <option value="SIW">SIW</option>
                <option value="ARSI">ARSI</option>
                <option value="AWI">AWI</option>
                <option value="NTICDIA">NTICDIA</option>

              </select>
              <div class="validate"></div>
            </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
          <div class="mt-3" style="max-width: 350px;">
      <h4>Forum</h4>
      <?php
      $comm_sql = "SELECT comments.id, comments.content, user.first_name, user.last_name FROM comments INNER JOIN user ON comments.author=user.id";
      try {
        $comments = $pdo->query($comm_sql)->fetchAll();
        $number_of_comments = $pdo->query("SELECT count(*) FROM comments")->fetchColumn();
        if ($number_of_comments === 0) {
          echo "<div class='alert alert-success' role='alert' id='no-comments'>Il n'y a aucun commentaire pour l'instant!</div>";
        }

        foreach ($comments as $comment) {
          echo "<div class='alert alert-dark' role='alert'><div>" . $comment['first_name'] . " " . $comment['last_name'] . "</div><div class='ms-3'>`" . $comment['content'] . "`</div></div>";

          $rep_sql = "SELECT replies.id, replies.content, user.first_name, user.last_name, replies.parent_comment FROM replies INNER JOIN user ON replies.author=user.id WHERE replies.parent_comment=" . $comment["id"] . ";";
          $replies = $pdo->query($rep_sql)->fetchAll();

          foreach ($replies as $reply) {
            echo "<div class='alert alert-light ms-3' role='alert'><div>" . $reply['first_name'] . " " . $reply['last_name'] . "</div><div class='ms-3'>`" . $reply['content'] . "`</div></div>";
          }

          echo "<form id='comment-" . $comment['id'] . "' name='comment-" . $comment['id'] . "' method='post' action='reply.php'>
          <input type='text' class='form-control' id='author' name='author' style='display: none;' value='" . $row['id'] . "'>
          <input type='text' class='form-control' id='parent_comment' name='parent_comment' style='display: none;' value='" . $comment['id'] . "'>
          <input type='text' class='form-control' id='content' name='content' placeholder='Ecrire une réponse...'>
          <div class='w-100 my-3 d-flex justify-content-end'><button type='submit' name='comment' class='btn btn-light' value='comment'>Répondre</button></div>
        </form>";
        }
      } catch (\Throwable $th) {
        echo "<div>There was an error loading comments</div>";
      }
      ?>
      <form id="comment" name="comment" method="post" action="comment.php">
        <input type="text" class="form-control" id="author" name="author" style="display: none;" value="<?php echo $row['id'] ?>">
        <input type="text" class="form-control" id="content" name="content" placeholder="Ecrire un commentaire...">
        <div class="w-100 mt-3 d-flex justify-content-end"><button type="submit" name="comment" class="btn btn-light" value="comment">Commenter</button></div>
      </form>
    </div>
  </main>
      
</div>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#institut">L’institut</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#information">NOS FORMATIN</a></li>
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
              <li><i class="bx bx-chevron-right"></i> <a href="4c.php">4C</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="liensU.html">Liens Utiles</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="media.php">Media Room</a></li>
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
        &copy; Copyright <strong><span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
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