<?php
  include("./database/db.php");
  $action = isset($_GET['action']) ? $_GET['action'] : '';
  $id = isset($_GET['id']) ? $_GET['id'] : '';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="./js/index.js" defer></script>
  </head>
  <body>

      <h1>CRUD OPERATION </h1>
    <?php
      if($action === "edit"){
        include("./view/update.php");
      }
      elseif($action === "delete"){
        include("./view/delete.php");
      } else{

        include("./view/create.php");
        include("./view/read.php");
      }
    ?>

  </body>
</html>