<?php
  require_once 'db_config.php';

  $conn = mysqli_connect($servername,$username,$password,$dbname);

  //echo "Connection Success";

  $sql = "SELECT * FROM members";
  $result = $conn->query($sql);
  //var_dump($result);
  while($row =$result-> fetch_assoc()){
    //var_dump($row);
    echo $row['id']." : ". $row['fname'] . " : " . $row['contact']."<br/>";
  //  echo "<br/>";
  $conn->close();
    //mysqli_close($conn)

  }


  ?>
