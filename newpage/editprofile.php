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
    <?php editmyprofile_sidebar() ?>
    <div id="editmyprofile">
      <h2 align="center">Edit Profile</h2>

    <img src="img/user.png" style="width:160px;height:160px;margin:auto auto auto 40%;" alt="" align="center">
        <form action="editprofileAction.php" method="POST">
      <ul>
        <form action="editprofileAction.php" method="POST">
        <li><b>E-mail: <?php echo $_SESSION['userinfo']['email']; ?></b></li>
        <li><b>Password: <input type="text" name="pass" value="<?php echo $_SESSION['userinfo']['password']; ?>"></b></li>
        <li><b>Firstname: <input type="text" name="fname1" value="<?php echo $_SESSION['userinfo']['fname']; ?>"></b></li>
        <li><b>Surname: <input type="text" name="lname1" value="<?php echo $_SESSION['userinfo']['lname']; ?>"></b></li>
        <li><b>Address: <input type="text" name="address1" value="<?php echo $_SESSION['userinfo']['address']; ?>"></b></li>
        <li><b>Personal ID: <input type="text" name="personalid" value="<?php echo $_SESSION['userinfo']['personalid']; ?>"></b></li>
      </ul>

        <input type="submit" value="CONFIRM!">
      </form>

    </div>


  <img src="img/home2.jpg" height="600" width="100%">



  <?php footer(); ?>
  </div>
</body>
</html>
