<?php require_once('helperfunction.php');

?>

<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>

  <div class="container">
    <?php topbar();?>
    <div id="login_box1_content">
      <h1>&nbsp;&nbsp;New User</h1>
      <div class="innercenterdiv">
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
              <div class="innercenterdiv"><br><input type="submit" value="Register" /></div>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>


      <div id="login_box2_content">
        <h1>&nbsp;&nbsp;Existing User</h1>
        <div class="innercenterdiv">
        <form action="#" method="POST">
          <br>
          <table>
            <tr>
              <td>Username</td>
              <td><input type="text" placeholder="example@example.com" name="email"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name="password"></td>
            </tr>

            <tr>
              <br>
              <td colspan="2">
                <div class="innercenterdiv"><br><input type="submit" value="Register" /></div>
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
