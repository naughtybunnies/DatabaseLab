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
    <div id="editmyprofile">
      <h2 align="center">Edit Profile</h2>

    <img src="img/user.png" style="width:160px;height:160px;margin:auto auto auto 40%;" alt="" align="center">

      <ul>
        <li><b>E-mail: ไม่บอกหร๊อก</b></li>
        <li><b>Password: <input type="text" value="eiei"></b></li>
        <li><b>Firstname: <input type="text" value="OITHIP"></b></li>
        <li><b>Surname: <input type="text" value="Thaiphakdee"></b></li>
        <li><b>Address: <input type="text" value=""></b></li>
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
