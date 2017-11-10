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
          <a href="#"><li>Bookings <img src="img/i_booking1.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="#"><li>Staffs  <img src="img/i_staff.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="#"><li>Messages <img src="img/i_message.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="#"><li>Rooms <img src="img/i_room1.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="#"><li>Requests <img src="img/i_request.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="#"><li>Users <img src="img/user.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="#"><li>Services <img src="img/i_service.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="#"><li>Transactions <img src="img/i_transaction.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
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
