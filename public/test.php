<?php
$servername = "localhost";
$username = "root";
$password = "5026231021";

try {
  $conn = new PDO("mysql:host=$servername;dbname=belajar_laravel", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully Berhasil";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
