<?php
  require_once('connect.php');
  require_once('helperfunctions.php');
 ?>

<html>

<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>
  <div id="menubar">
    <?php menubar(); ?>
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

    <td><img src="img/view1.jpg" height="600" width="100%"></td>

  <?php bottombar(); ?>

</body>

</html>
