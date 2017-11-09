<?php
  require_once('helperfunction.php');
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>

    <div class="container">
      <?php topbar_logout(); ?>
      <div id="dashboard_staff">
        <ul>
          <a href="#"><li>Bookings</li></a>
          <a href="#"><li>Staffs</li></a>
          <a href="#"><li>Messages</li></a>
          <a href="#"><li>Rooms</li></a>
          <a href="#"><li>Requests</li></a>
          <a href="#"><li>Users</li></a>
          <a href="#"><li>Services</li></a>
          <a href="#"><li>Transactions</li></a>
          <a href="#"><li>Something</li></a>
          <a href="#"><li>Something</li></a>
          <a href="#"><li>Something</li></a>
          <a href="#"><li>Something</li></a>
        </ul>
      </div>

      <img src="img/home1.jpg" height="600" width="100%">

  <?php footer(); ?>
</div>

  </body>

</html>
