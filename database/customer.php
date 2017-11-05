<?php
  require_once('helperfunctions.php');
  session_start();
  if(!isset($_SESSION['user'])){
    header('Location: home.php');
  }
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>
  <div id="menubar">
    <?php menubar_logout(); ?>
  </div>

    <?php customer_sidebar(); ?>

    <div id="page">
      <?php
        var_dump($_SESSION['user']);
       ?>
    </div>

      <td><img src="img/view1.jpg" height="600" width="100%"></td>


  <?php bottombar(); ?>

  </body>

  </html>
