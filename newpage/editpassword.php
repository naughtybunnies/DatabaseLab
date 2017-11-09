<?php
  require_once('helperfunction.php');
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
    <div id="editpassword">

      <h2 align="center"><b>Edit Password</h2>

    <img src="img/user.png" style="width:160px;height:160px;margin:auto auto auto 40%;" alt="" align="center">

      <ul>
        <li><b>Password: <input type="password" placeholder=" type your password..."></b></li>
        <li><b>New Password: <input type="password" placeholder=" type your password..."></b></li>
      </ul>

      <form action="myprofile.php">
        <input type="submit" value="CONFIRM!">
      </form>
      
    </div>


  <img src="img/home2.jpg" height="600" width="100%">



  <?php footer(); ?>
  </div>
</body>
</html>
