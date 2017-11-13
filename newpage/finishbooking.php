<?php
  require_once('helperfunction.php');
  session_start();
  if (!isset($_SESSION['userinfo'])||!isset($_SESSION['cart'])) {
    header('Location: home.php');
  }
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
       <img src="img/home1.jpg" height="600" width="100%" id="tviewpic">

      <div class="tcontentbox">
        <form action="createbookingpayment.php" method="post">
          <table border='1'>
            <tr>
              <td>CREDIT CARD NO :</td>
              <td><input type="text" name="cardno" id=""></td>
            </tr>
            <tr>
              <td>CVV</td>
              <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
              <td>EXPIRE</td>
              <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
              <td>CARDHOLDER NAME</td>
              <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="" id="" value="BOOK"></td>
            </tr>
          </table>
        </form>
      </div>




  <?php footer(); ?>
</div>

  </body>

</html>
