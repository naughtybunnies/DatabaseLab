<?php
  require_once('connect.php');
  
 ?>

<html>

<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>
  <div id="menubar">
    <!--แถบบน-->
    <div id="logo"><a href="home.php">CU@MyPlace</a></div>
    <ul id="menu">
      <li><a href="room.php">Room</a></li>
      <li><a href="facility.php">Facility</a></li>
      <li><a href="review.php">Review</a></li>
      <li><a href="login.php">Log In</a></li>
    </ul>
  </div>

  <div id="boxnewuser">
    <h1>&nbsp;&nbsp;New user</h1><br>
    <div class="innercenterdiv">
      <!--กล่อง register-->
      <form action="registeraction.php" method="POST">
        <br>
        <table>
          <tr>
            <td>Email</td>
            <td><input type="text" placeholder="example@example.com" name="email"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td>Firstname</td>
            <td><input type="text" name="fname"></td>
          </tr>
          <tr>
            <td>Lastname</td>
            <td><input type="text" name="lname"></td>
          </tr>
          <tr>
            <br>
            <td colspan="2">
              <div class="innercenterdiv"><br><input type="submit" value="Register" class="blackbutton" /></div>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>

  <div id="boxolduser" method="POST">
    <!--กล่อง Login-->
    <h1>&nbsp;&nbsp;Existing user</h1><br>
    <div class="innercenterdiv">
      <!--กล่อง register-->
      <form action="registeraction.php" method="POST">
        <br>
        <table>
          <tr>
            <td>Email</td>
            <td><input type="text" placeholder="example@example.com" name="email"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="innercenterdiv"><br><input type="submit" value="Register" class="blackbutton" /></div>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>

  <tr>
    <td><img src="img/view1.jpg" height="600" width="100%"></td>
  </tr>
  <!--รูปวิวบนสุด-->

  <table id="bar">
    <!--แถบรองสุดท้าย-->
    <tr>
      <td></td>
    </tr>
    <!--เว้นช่องข้างบน-->

    <tr>
      <td>
        <h1>Database system</h1></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Tonny</td>
    </tr>
    <tr>
      <td>Kateiiz</td>
    </tr>
    <tr>
      <td>Tongkey</td>
    </tr>
    <tr>
      <td>Wari</td>
    </tr>
    <tr>
      <td></td>
    </tr>

    <tr>
      <td></td>
    </tr>
    <!--เว้นช่องข้างล่าง-->
  </table>

  <table id="lastbar">
    <!--แถบสุดท้าย-->
    <tr>
      <td>
        <div class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet felis a eleifend varius. Quisque sodales sem eleifend purus dignissim convallis. Nulla ut est sit amet ligula sodales blandit.<br> Nullam nec erat pulvinar nulla iaculis
          tincidunt. Mauris bibendum congue ornare. Pellentesque quis massa tempus tortor facilisis vestibulum. Phasellus dictum eleifend tincidunt. Fusce congue dui et magna consequat,<br> at accumsan nisi consequat. Fusce ac nisl sem. Duis sed elit
          justo. Sed rhoncus fringilla lacinia. Integer posuere metus eu nibh feugiat,<br> semper efficitur diam luctus. Proin pellentesque dapibus tortor, ac condimentum tortor dictum suscipit.</div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="center">Powered by M150</div>
      </td>
    </tr>

  </table>

</body>
