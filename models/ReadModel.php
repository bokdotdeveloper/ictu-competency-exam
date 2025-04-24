<?php
  function ReadModel($sql){
    include("../database/db.php");

    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)> 0){

      $result = [];
      while($rows = mysqli_fetch_assoc($query)){
        array_push($result, $rows);
      }
      return $result;

    } else{
      return 'empty';
    }
  }
?>