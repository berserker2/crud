<?php
  require_once 'db_config.php';
 
  $sql = "SELECT * FROM members";
  $result = $conn->query($sql);
  $output = [];

  while($row =$result-> fetch_assoc()){
   //echo $row['id']." / ". $row['fname'] . " : " .$row['lname']." : ". $row['contact']."<br/>";
	$output['data'][]=array($row['id'],$row['fname'],$row['lname'],$row['contact']);
}
$conn->close();
  ?>
