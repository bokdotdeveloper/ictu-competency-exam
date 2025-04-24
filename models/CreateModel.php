<?php


  function CreateModel($sql){
    include("../database/db.php");

    mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `task`.`user` (`user_id` INT(11) NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(255) NOT NULL , `last_name` VARCHAR(255) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;");

    mysqli_query($conn, $sql);
  }
?>