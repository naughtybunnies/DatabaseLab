<?php
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
        topbar_logout_staff();
      }else{
        topbar();
      }
       ?>

      <td><img src="img/home1.jpg" height="600" width="100%" id="tviewpic2"></td>
      <div class="tcontentbox2">
        <form action="index.html" method="post">
          <table border="1">
            <tr>
              <td>BOOKING ID</td>
            </tr>
            <tr>
              <td><input type="text" name="bookingid"></td>
            </tr>
            <tr>
              <td><input type="submit" value="CHECK IN"></td>
            </tr>
          </table>
        </form>
      </div>

  <?php footer(); ?>
</div>

  </body>

</html>
