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
       <div id="user_staff_button">
         <p>User</p>
         <ul>
           <a href="user_staff_create.php"><li> Create <img src="img/i_request.png" style="width:40px;height:40px;" align="center"></li></a>
           <a href="user_staff_view.php"><li> Edit / View <img src="img/i_view.png" style="width:40px;height:40px;" align="center"></li></a>
         </ul>
       </div>
      <td><img src="img/home1.jpg" height="600" width="100%"></td>


  <?php footer(); ?>
</div>

  </body>

</html>
