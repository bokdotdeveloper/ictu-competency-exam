<?php 
  include("../models/CreateModel.php");
  include("../database/db.php");
  if(isset($_GET['firstName']) && isset($_GET['lastName'])){
    $firstName = mysqli_real_escape_string($conn, $_GET['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_GET['lastName']);

    $sql = "INSERT INTO `user`(`first_name`,`last_name`) VALUES('$firstName','$lastName')";
    CreateModel($sql);
    echo 'success';
  }

?>