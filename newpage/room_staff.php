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
       <div id="room_staff_button">
         <p>Room</p>
         <ul>
           <a href="room_staff_view.php"><li> View/Edit <img src="img/i_request.png" style="width:40px;height:40px;" align="center"></li></a>
           <a href="room_staff_create.php"><li> Create <img src="img/i_request.png" style="width:40px;height:40px;" align="center"></li></a>

         </ul>
       </div>
      <td><img src="img/home4.jpg" height="600" width="100%"></td>


  <?php footer(); ?>
</div>

  </body>

</html>
