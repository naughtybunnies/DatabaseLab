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

      <td><img src="img/home1.jpg" height="600" width="100%"></td>
      <div class="tcontentbox">
        <h1>get booking box</h1>
      </div>

  <?php footer(); ?>
</div>

  </body>

</html>
