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
    <?php menubar(); ?>
  </div>
  <table class="fullwidth" id="hometable">
    <div id="boxnotice">
      <!--กล่อง register-->
      <form action="login.php">

        <div class="center">
          <!--ปุ่ม-->
          <br>
          <h2>Thank you for register</h2><br><br><br>
          <input type="submit" value="Login" />
        </div>

      </form>
    </div>
    <tr>
      <td colspan="2"><img src="img/view1.jpg" height="600px" width="100%"></td>
    </tr>
  </table>

  <?php bottombar(); ?>

</body>

</html>
