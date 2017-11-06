<?php
  require_once('helperfunctions.php');
  session_start();
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
  <table class="fullwidth" id="hometable">
    <div id="boxnotice">
      <!--กล่อง register-->
      <?php
      if (isset($_SESSION['myarray'])) {
        // from booking page
        echo '<form action="addguest.php">
          <div class="center">
            <!--ปุ่ม-->
            <br>
            <h2>Thank you for register</h2><br><br><br>
            <input type="submit" value="Continue Booking" />
          </div>
        </form>';
      }else{
        //from normal loging
        echo '
        <form action="login.php">
          <div class="center">
            <!--ปุ่ม-->
            <br>
            <h2>Thank you for register</h2><br><br><br>
            <input type="submit" value="Login" />
          </div>
        </form>';
      }
       ?>

    </div>
    <tr>
      <td colspan="2"><img src="img/view1.jpg" height="600px" width="100%"></td>
    </tr>
  </table>

  <?php bottombar(); ?>

</body>

</html>
