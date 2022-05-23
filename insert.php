<?php

include("dbConnection.php");

// Code for converting JSON String in to Php Object/Array ---

$data = file_get_contents("php://input");
$myData = json_decode($data,true);

$name = $myData['name'];
$email = $myData['email'];
$pass = $myData['password'];
$id = $myData['id'];

// This wi;; only insert tha data----

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//   if(!empty($name) && !empty($email) && !empty($pass)){
//      $sql = "INSERT INTO crud(name,email,pass) VALUES('$name','$email','$pass')";
//      $result = mysqli_query($conn,$sql);

//      if($result){
//          echo "Student Saved Successfully!"; 
//      }else{
//          echo "Unable to save student"; 
//      }

//   }else{
//       echo "Fill All Field";
//   }

// }

// This will insert or update the data----

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(!empty($name) && !empty($email) && !empty($pass)){
     $sql = "INSERT INTO crud(id,name,email,pass) VALUES('$id','$name','$email','$pass') ON DUPLICATE KEY UPDATE name = '$name',email = '$email', pass = '$pass'";
     $result = mysqli_query($conn,$sql);

     if($result){
         echo "Student Saved Successfully!"; 
     }else{
         echo "Unable to save student"; 
     }

  }else{
      echo "Fill All Field";
  }

}

?>