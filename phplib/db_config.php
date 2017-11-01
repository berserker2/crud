<?php
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="cruddatabase";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("Connection Faild".mysqli_connect_error());
}
?>
