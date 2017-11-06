<?php
  require_once('helperfunctions.php');

?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>

  <div id="menubar">
    <?php menubar_logout(); ?>
  </div>
    <?php customer_sidebar(); ?>

  <div id="page">
    <div id="myprofile">
      <p><b>My profile</b></p>
    </div>
    <img src="img/doggy.jpg" style="width:160px;height:160px;margin:5px 0 5px 340px;" alt="">
    <div id="myprofile">
      <br>
      <ul>
        <li><b>Username:</b></li>
        <li><b>Password:</b></li>
        <li><b>Firstname:</b></li>
        <li><b>Surname:</b></li>
        <li><b>E-mail:</b></li>
      </ul>
    </div>
  </div>

  <td><img src="img/view1.jpg" height="600" width="100%"></td>

  <?php bottombar(); ?>

</body>
</html>
