<?php
$servername = "localhost";
$username = "root";
$errors = array();

try {
  $conn = new PDO("mysql:host=$servername;dbname=onlinegrievance",$username,"");
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  // echo "YES";
  session_start();
  

} catch (PDOException $e) {
  echo "Connection Failed : ".$e->getMessage();
}
//Disconnect
// $conn = null;
 ?>
