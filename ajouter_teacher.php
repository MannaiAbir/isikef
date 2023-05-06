<?php
    //connexion avec le serveur (APACHE)
    $username = "root";
    $password = "";
    $hostname = "localhost";

    // enable error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // connection string with database
    $dbhandle = mysqli_connect($hostname, $username, $password, "ensg");

    // set charset and collation
    mysqli_set_charset($dbhandle, "utf8");
    mysqli_query($dbhandle, "SET collation_connection = utf8_unicode_ci");

    // Vérifier si le formulaire est soumis
    if (isset($_POST['submit'])) {
        /* récupérer les données du formulaire en utilisant
        la valeur des attributs name comme clé
        */
        $username = $_POST['username'];
        $cin = $_POST['cin'];
        $mail = $_POST['mail'];
        $mdp = $_POST['password'];
       

        // définition de la requete + execution de la requete
        $result = mysqli_query($dbhandle, "INSERT INTO teacher (username, cin, mail, password) VALUES ('$username', '$cin', '$mail', '$mdp');");
        if ($result) {
            echo "Inscription effectuée avec succès!";
        } else {
            echo "Échec lors de l'inscription!";
        }
    }

    header("Refresh:2; url=index.php");
    exit;
?>