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
        <br>  <br><br>
        <h1 align="center"> ... Welcome ...</h1>
        <h1 align="center">  Khun <?php echo $_SESSION['userinfo']['fname']." ".$_SESSION['userinfo']['lname']; ?></h1>
        <br><br><br><br>
        <h3 align="center">  We are glady welcome you guys<br>to our warmly Hotel</h3>
      </div>

      <img src="img/home3.jpg" height="600" width="100%">

  <?php footer(); ?>
</div>

  </body>

</html>
