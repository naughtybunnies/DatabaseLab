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
      topbar_logout();
    }else{
      topbar();
    }
     ?>

    <div id="seaview">
      <img src="img/home1.jpg" width="100%" height="600px">
      <div class="textonpic">
        <h1>
          CU@MyPlace
        </h1>
      </div>
    </div>

    <div id="content">
      <?php room();?>
    </div>

    <?php footer(); ?>
  </div>
</body>
</html>
