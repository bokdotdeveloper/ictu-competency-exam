<?php

  try{
    $host = "localhost";
    $username = 'root';
    $password = '';
    $database = 'task';


    $conn = mysqli_connect($host, $username, $password, $database);

  } catch(Exception $e){
    die("Connection failed");
  }
?>