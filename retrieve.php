<?php

include("dbConnection.php");

// Retrieve Information--

$sql = "SELECT * FROM crud";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);

if($row > 0){

    $data = array();

    while($row = mysqli_fetch_assoc($result)){
      $data[] = $row;
    }
    
}

// returning json data

echo json_encode($data);
?>