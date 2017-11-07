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
      <div id="page_content">
        <h4>My bookings</h4>
        <table border="1">
          <tr>
            <th>no.</th>
            <th>Roomtype</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>Amount</th>
            <th>Booked Date</th>
            <th>Booking ID</th>
          </tr>

        </table>
        <h1><a href="newbooking.php">NEW BOOKING</a></h1>
      </div>
      <br>

    </div>

      <td><img src="img/home3.jpg" height="600" width="100%"></td>

    <!--รูปวิวบนสุด-->

  <?php bottombar(); ?>

  </body>

  </html>
