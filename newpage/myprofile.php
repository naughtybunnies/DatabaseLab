<?php
  require_once('helperfunction.php');
  require_once('connect.php');
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

  <div id="container">
    <?php topbar_logout(); ?>
    <?php myprofile_sidebar(); ?>
    <div id="profile_info">
      <h2 align="center"> My profile </h2>

    <img src="img/user.png" style="width:160px;height:160px;margin:auto auto auto 40%;" alt="" align="center">

      <ul>
        <li><b>Username: <?php echo $_SESSION['userinfo']['email']; ?></b></li>
        <li><b>Password: <?php echo $_SESSION['userinfo']['password']; ?></b></li>
        <li><b>Firstname: <?php echo $_SESSION['userinfo']['fname']; ?></b></li>
        <li><b>Surname: <?php echo $_SESSION['userinfo']['lname']; ?></b></li>
        <li><b>E-mail: <?php echo $_SESSION['userinfo']['email']; ?></b></li>
        <li><b>Address: <?php echo $_SESSION['userinfo']['address']; ?></b></li>
        <li><b>PersonalID: <?php echo $_SESSION['userinfo']['personalid']; ?></b></li>
        <li><?php if (isset($_GET['status']))
                {

                  echo $_GET['status'];
                  
                } ?>
        </li>
      </ul>
    </div>



  <img src="img/home2.jpg" height="600" width="100%">



  <?php footer(); ?>
  </div>
</body>
</html>
