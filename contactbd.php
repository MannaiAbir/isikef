<?php
    //connexion avec le serveur (APACHE)
    $username = "root";
    $password = "";
    $hostname = "localhost";

    // enable error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // connection string with database
    $dbhandle = mysqli_connect($hostname, $username, $password, "contact");

    // set charset and collation
    mysqli_set_charset($dbhandle, "utf8");
    mysqli_query($dbhandle, "SET collation_connection = utf8_unicode_ci");

    // Vérifier si le formulaire est soumis
    if (isset($_POST['submit'])) {
        /* récupérer les données du formulaire en utilisant
        la valeur des attributs name comme clé
        */
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // définition de la requete + execution de la requete
        $result = mysqli_query($dbhandle, "INSERT INTO contact (name, email, department, subject, message) VALUES ('$name', '$emil', '$department', '$subject', '$message');");
        if ($result) {
            echo "Inscription effectuée avec succès!";
        } else {
            echo "Échec lors de l'inscription!";
        }
    }

    header("Refresh:2; url=index.php");
    exit;
?>