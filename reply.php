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
    $parent_comment = $_POST['parent_comment'];

    $sql = "INSERT INTO `replies`(author,content,parent_comment) VALUES (:author,:content,:parent_comment)";

    $res = $pdo->prepare($sql);
    $exec = $res->execute(array(":author" => $author, ":content" => $content, ":parent_comment" => $parent_comment));

    if ($exec) {
      header("location:profile.php?reply=created");
    } else {
      header("location:profile.php?reply=error");
    }
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }
}