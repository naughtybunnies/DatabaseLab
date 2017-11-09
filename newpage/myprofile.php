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

    <?php myprofile_sidebar(); ?>

    <div id="profile_info">

  <br>
      <h2 align="center">My profile</h2>


    <img src="img/user.png" style="width:160px;height:160px;margin:auto auto auto 40%;" alt="" align="center">
  <br><br>

      <ul>
        <li><b>Username: kenjitong</b></li>
        <li><b>Password: eiei</b></li>
        <li><b>Firstname: OITHIP</b></li>
        <li><b>Surname: Thaiphakdee</b></li>
        <li><b>E-mail: ไม่บอกหร๊อก</b></li>
        <li><b>Address: </b></li>
        <li><b>PersonalID: </b></li>


      </ul>
    </div>



  <img src="img/home2.jpg" height="600" width="100%">



  <?php footer(); ?>
  </div>
</body>
</html>
