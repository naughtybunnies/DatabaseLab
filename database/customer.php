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

    <div id="listcus">
      <ul>
        <li><a href="booking.php">New Booking</a></li>
        <li><a href="request.php">Request</a></li>
        <li><a href="mybooking.php">My Booking</a></li>
        <li><a href="#">My Guest</a></li>
      </ul>
    </div>

    <div id="page">
      <?php
        var_dump($_SESSION['user']);
       ?>
    </div>

      <td><img src="img/view1.jpg" height="600" width="100%"></td>


  <?php bottombar(); ?>

  </body>

  </html>
