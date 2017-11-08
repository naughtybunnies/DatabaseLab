<?php
  session_start();
  require_once('helperfunctions.php');
  require_once('connect.php');
  if (isset($_SESSION['user'])) {
      #print_r($_SESSION['user']);
  } else {
      header('Location: home.php');
  }

 ?>
  <html>

  <head>
    <title>CU@MyPlace</title>
    <link rel="stylesheet" href="default.css">
  </head>

  <body>
    <?php
     if (isset($_SESSION['user'])) {
         echo '<div id="menubar">';
         menubar_logout();
         echo '</div>';
     } else {
         echo '<div id="menubar">';
         menubar();
         echo '</div>';
     }
      ?>
      <div id="viewpic">
        <img src="img/view1.jpg" height="600" width="100%">
      </div>

      <div id="nosidebarpage">
      
      </div>

      <div id="bottomest">
        <?php bottombar(); ?>
      </div>


  </body>

  </html>
