<?php
  function UpdateModel($sql){
    include("../database/db.php");
    mysqli_query($conn, $sql);
  }
?>