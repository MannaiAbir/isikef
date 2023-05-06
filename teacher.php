<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Institut Supérieur d'Informatique du Kef</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <!-- =======================================================
  * Template Name: ISIKEF
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
          <li><a class="nav-link scrollto " href="file:///C:/laragon/www/isikef/index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="#motdudirecteur">Mot du Directeur</a></li>
          <li><a class="nav-link scrollto" href="#organigramme">Organigramme administratif</a></li>
          <li><a class="nav-link scrollto" href="#plan"> Plan de l'institut</a></li>
          <li><a class="nav-link scrollto" href="#pic"> Media </a></li>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>  Inscreption  </h2>
          <ol>
            
            <li></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    

  </main><!-- End #main -->
  <style type="text/css">
    .form-style-9{
      max-width: 450px;
      background: #FAFAFA;
      padding: 30px;
      margin: 50px auto;
      box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
      border-radius: 10px;
      border: 6px solid #305A72;
    }
   
    .form-style-9  input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
 
.form-style-9  input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
.align {
  display: grid;
  place-items: center;
}
    </style>
  <div class="col-lg-6">
    <form class="form-style-9" action="ajouter_teacher.php" method="post" onsubmit="return test()">
      <p>Cet espace est dédié aux enseignants de l'ISI </p>
      <div class="col-md-6 form-group">
      <label for="username">Nom et Prénom :</label>
        <input type="text" id="username" name="username" required>
        </div><br>
        <div class="col-md-6 form-group">
        <label for="cin">Cin:</label>
        <input type="text" id="cin" name="cin" required>
        </div><br>
        <div>
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail" required>
        </div><br>
        <div class="col-md-6 form-group">
        <label for="mot_de_passe">Mot de Passe:</label>
        <input type="password" id="password" name="password" required>
        </div><br>
         <div class="align">
        <input type="submit" name="submit" value="S'inscrire">
         </div>

    </form>
    <div class="text-center">
      <a href="authentificationT.php"><button type="submit">Sing Up</button>
    </div></a>
    <script>
      function test() {
     var login = document.getElementById("mail").value;
     var pwd = document.getElementById("password").value;
     var cin = document.getElementById("cin").value;
     var a = "@";
     
     if (login.length === 0 || pwd.length === 0) {
       alert("Vérifier votre login et votre mot de passe");
       return false;
     } else {
       if (pwd.length !== 8 ) {
         alert("Votre mot de passe et votre cin doit avoir une longueur égale à 8 caractères");
         return false;
       }
       if (login.substring(login.indexOf(a)) !== '@gmail.com') {
         alert("Votre adresse mail doit contenir @gmail.com");
         return false;
       }
     }
    }
    
    </script>
  </div>

   <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          

          </div>

        </div>
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