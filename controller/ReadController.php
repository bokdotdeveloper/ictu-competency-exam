<?php 
  include("../models/ReadModel.php");
  include("../database/db.php");


  if(isset($_GET['readUsers'])){

    $sql = "SELECT * FROM `user`";
    $result = ReadModel($sql);
    $response['result'] = $result;
    
    header("Content-Type: application/json");
    echo json_encode($response);
  }

?>