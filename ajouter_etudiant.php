<?php
    //connexion avec le serveur (APACHE)
    $username = "root";
    $password = "";
    $hostname = "localhost";

    // enable error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // connection string with database
    $dbhandle = mysqli_connect($hostname, $username, $password, "isi");

    // set charset and collation
    mysqli_set_charset($dbhandle, "utf8");
    mysqli_query($dbhandle, "SET collation_connection = utf8_unicode_ci");

    // Vérifier si le formulaire est soumis
    if (isset($_POST['submit'])) {
        /* récupérer les données du formulaire en utilisant
        la valeur des attributs name comme clé
        */
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $cin = $_POST['cin'];
        $mdp = $_POST['password'];
        $img = $_POST['image'];

        // définition de la requete + execution de la requete
        $result = mysqli_query($dbhandle, "INSERT INTO inscription (nom, prenom, mail, cin, password,image) VALUES ('$nom', '$prenom', '$mail', '$cin', '$mdp', '$img');");
        if ($result) {
            echo "Inscription effectuée avec succès!";
        } else {
            echo "Échec lors de l'inscription!";
        }
    }

    header("Refresh:2; url=index.php");
    exit;
?>