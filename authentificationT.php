<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "ensg";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM teacher WHERE mail = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"]; 
                     $_SESSION['password'] = $_POST["password"] ;  
                     header("location:login_valider.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!DOCTYPE html>  
<html>  
      <head>  
      <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Authentification</title>  

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
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
  </section>
  <!-- End Breadcrumbs Section -->
   </main><!-- End #main -->
           <br />  
           <div class="container" style="width:500px;">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h1 align="">Verification de votre compte </h1><br />  
                <form name="connexion" method="post" onsubmit="return test()">  
                     <label>Mail</label>  
                     <input type="email" name="username" class="form-control" />  
                     <br />  
                     <label>cin</label>  
                     <input type="cin" name="cin" class="form-control" /> 
               </br>
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  
           </div>  
           <br />  
           <script>
        function test() {
            var login = connexion.username.value;
            var pwd = connexion.password.value;
            var cin = connexion.cin.value;
            var a = "@";
            

            if (login.length === 0 || pwd.length === 0) {
                alert("Vérifier votre login et votre de mot de passe");
                return false;
            }
            else {
                if (pwd.length < 8 || pwd.length > 8) {
                    alert("Votre mot de passe doit avoir une longueur égale à 8 caractères");
                    return false;
                }
                if (cin.length < 8 || cin.length > 8) {
                    alert("Votre cin doit avoir une longueur égale à 8 caractères");
                    return false;
                }

                if (login.substring(login.indexOf(a)) != '@gmail.com') {
                    alert("Votre de mot de passe doit avoir une adresse @gmail.com");
                    return false;
                } 
            }
        }
    </script>
      </body>  
</html>