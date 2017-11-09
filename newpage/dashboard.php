<?php
  require_once('helperfunction.php');
  session_start();
  if (isset($_SESSION['userinfo'])) {
    #print_r($_SESSION['userinfo']);
  }else{
    header('Location: login.php');
  }
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

      <?php  dashboard_sidebar(); ?>
      <div id="dashboard_info">
        <h1>Welcome Khun <?php echo $_SESSION['userinfo']['fname']." ".$_SESSION['userinfo']['lname']; ?></h1>
      </div>

      <img src="img/home1.jpg" height="600" width="100%">

  <?php footer(); ?>
</div>

  </body>

</html>
