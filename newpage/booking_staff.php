<?php
  require_once('helperfunction.php');
  session_start();
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>

    <div class="container">
      <?php
      if (isset($_SESSION['userinfo'])) {
        //logged in
        topbar_logout_staff();
      }else{
        topbar();
      }
       ?>
       <div id="booking_staff_button">
         <p>Booking</p>
         <ul>
           <a href="booking_staff_create.php"><li>Create <img src="img/i_request.png" style="width:40px;height:40px;" align="center"></li></a>
           <a href="booking_staff_view.php"><li>View/Delete <img src="img/i_view.png" style="width:40px;height:40px;" align="center"></li></a>
           <a href="booking_staff_checkin.php"><li>Check in <img src="img/i_checkin.ico" style="width:40px;height:40px;" align="center"></li></a>
         </ul>
       </div>
      <td><img src="img/home1.jpg" height="600" width="100%"></td>


  <?php footer(); ?>
</div>

  </body>

</html>
