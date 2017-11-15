<?php
  require_once('helperfunction.php');
  session_start();
  if (isset($_SESSION['userinfo'])) {
    if ($_SESSION['userinfo']['usergroup_idusergroup']=='11') {
      header('Location: dashboard_staff.php');
    }else{
      //header('Location: dashboard.php');
    }

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
        <br><br>
        <img src="img/i_welcome.png" height="25%" width="50%">
        <br>
        <h1 align="center">  Khun <?php echo $_SESSION['userinfo']['fname']." ".$_SESSION['userinfo']['lname']; ?></h1>
        <br><br><br><br>
        <h3 align="center">  It is our pleasure to have you here<br>
          Thank you for choosing CU@MyPlace hotel<br>
        Hope you are having a great day while staying here<br>
        </h3>
      </div>

      <img src="img/home3.jpg" height="600" width="100%">

  <?php footer(); ?>
</div>

  </body>

</html>
