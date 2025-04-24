<?php 
  include("../models/UpdateModel.php");
  include("../database/db.php");


  if(isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['userId'])){
    $firstName = mysqli_real_escape_string($conn, $_GET['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_GET['lastName']);
    $userId = $_GET['userId'];

    $sql = "UPDATE `user` SET `first_name`='$firstName', `last_name`='$lastName' WHERE `user_id`=$userId";

    $result = UpdateModel($sql);    
    header("Content-Type: application/json");
    echo 'success';
  }

?>