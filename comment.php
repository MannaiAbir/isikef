<?php
$host = 'localhost';
$dbname = 'isi';
$username = 'root';
$password = '';
if (isset($_POST['comment'])) {
  try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", "$username", "$password");

    $author = $_POST['author'];
    $content = $_POST['content'];

    $sql = "INSERT INTO `comments`(author,content) VALUES (:author,:content)";

    $res = $pdo->prepare($sql);
    $exec = $res->execute(array(":author" => $author, ":content" => $content));

    if ($exec) {
      header("location:profile.php?comment=created");
    } else {
      header("location:profile.php?comment=error");
    }
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }
}