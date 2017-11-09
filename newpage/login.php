<?php
  require_once('connect.php');
  require_once('helperfunction.php');
  session_start();
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
    <div id="login_box1_content">
      <h1>&nbsp;&nbsp;New User</h1>
      <div class="tloginbox">
      <form action="registeraction.php" method="POST" id="loginform">
          <!-- registration form -->
        <br>
        <table>
          <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
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
            <td>Address</td>
            <td>
            <textarea name="address" form="loginform" rows="4" cols="30"></textarea></td>
          </tr>
          <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="dob"></td>
          </tr>
          <tr>
            <td>Personal ID</td>
            <td><input type="text" name="personalid"></td>
          </tr>
          <tr>
            <td colspan="2"><?php if (isset($_GET['regstatus'])) {
              echo $_GET['regstatus'];
            } ?></td>
          </tr>
          <tr>
            <br>
            <td colspan="2">
              <br><input type="submit" value="Register" />
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>


      <div id="login_box2_content">
        <h1>&nbsp;&nbsp;Existing User</h1>
        <div class="tloginbox">
        <form action="loginaction.php" method="POST">
          <!-- loginform -->
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
              <td colspan="2"><?php if (isset($_GET['logstatus'])) {
                echo $_GET['logstatus'];
              } ?></td>
            </tr>
            <tr>
              <br>
              <td colspan="2">
                <br><input type="submit" value="Register" />
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <div><img src="img/home1.jpg" width="100%" height="600px"></div>

    <?php footer(); ?>

  </div>
</body>
</html>
