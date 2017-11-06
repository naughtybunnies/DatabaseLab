<?php
  require_once('helperfunctions.php');
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>

  <div id="menubar">
    <?php menubar(); ?>
  </div>

  <table class="fullwidth" id="hometable">
    <div id="listcus">
      <ul>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="request.php">Request</a></li>
        <li><a href="mybooking.php">My Booking</a></li>
        <li><a href="#">My Guest</a></li>
      </ul>
    </div>

    <div id="page">
        <div class="center">
          <h1>Request Information</h1>
        </div>
        
    </div>

        <img src="img/view1.jpg" height="600px" width="100%">



  <!-- edit here -->
  <?php bottombar(); ?>

  </body>

  </html>
