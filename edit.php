<?php

include("dbConnection.php");

$data = file_get_contents("php://input");
$myData = json_decode($data, true);
$id = $myData['id'];


  $sql = "SELECT * FROM crud WHERE id = {$id}";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  echo json_encode($row);

?>