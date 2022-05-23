<?php

include("dbConnection.php");

$data = file_get_contents("php://input");
$myData = json_decode($data, true);
$id = $myData['id'];

if(!empty($id)){
  $sql = "DELETE FROM crud WHERE id = {$id}";
  $result = mysqli_query($conn,$sql);

  if($result){
        echo "Student deleted successfully!";
  }else{
       echo "Unable to Delete";
  }
}else{
    echo "Fill All Fields";
}

?>