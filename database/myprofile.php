<?php
  require_once('helperfunctions.php');
  require_once('connect.php');
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
      <?php
        $q="select * from user ORDER BY iduser DESC limit 1";
        $result=$mysqli->query($q);
        if(!$result){
          echo "Select failed. Error: ".$mysqli->error ;

        }
       while($row=$result->fetch_array()){ ?>
      <ul>
        <li><b>Username:</b><?=$row['email']?></li>
        <li><b>Password:</b><?=$row['password']?></li>
        <li><b>Firstname:</b><?=$row['name']?></li>
        <li><b>Surname:</b><?=$row['surname']?></li>
        <li><b>E-mail:</b><?=$row['email']?></li>
      </ul>
        <?php } ?>
    </div>

  </div>

  <td><img src="img/view1.jpg" height="600" width="100%"></td>

  <?php bottombar(); ?>

</body>
</html>
