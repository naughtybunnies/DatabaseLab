<?php
  require_once('helperfunction.php');
  require_once('connect.php');
  session_start();
  if(!isset($_SESSION['cart'])){
    header('Location: home.php');
  }else{
    // $_SESSION['']
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
      <div class="tcontentbox_confirm">
        <?php if (isset($_SESSION['userinfo'])) { ?>
          <h1>PLEASE REVIEW YOUR Booking</h1>
          <table border=1>
            <tr>
              <th>no</th>
              <th>Room type</th>
              <th colspan="2">Price</th>
            </tr>
            <?php
             if (!isset($_SESSION['cart']['0'])) {
               echo "<td colspan=4>EMPTY SELECTION</td>";
             }else{

               foreach ($_SESSION['cart'] as $key => $value) {
                 $q = "SELECT * FROM roomtype WHERE idroomtype=".$value.";";
                 $result = $mysqli->query($q);
                 if (!$result) {
                   echo "error <br>";
                   echo "$mysqli->error";
                 }else{
                   $row = $result->fetch_array();
                   echo "<tr>
                     <td>". ($key+1) ."</td>
                     <td>".$row['name']."</td>
                     <td colspan='2'>".$row['price']."</td>
                   </tr>";

                 }

               }
             }

             ?>
             <tr>
               <form action="applycoupon.php" method="post">
                 <td colspan="2">COUPON CODE</td>
                 <td><input type="text" name='code' <?php if (isset($_GET['status'])) {
                   echo "value='".$_GET['status']."'";
                 } ?>></td>
                 <td><input type="submit" value="APPLY"></td>
               </form>

             </tr>
             <tr>
               <td colspan="2">How long that customer stay</td>
               <td colspan=2><?php echo $_SESSION['dateinterval']+1; ?> Days <?php echo $_SESSION['dateinterval']; ?> Nights</td>
             </tr>
             <tr>
               <td colspan="2">TOTAL BEFORE DISCOUNT</td>
               <td colspan="2"><?php echo $_SESSION['price']['total']; ?></td>
             </tr>
             <tr>
               <td colspan="2">TOTAL WITH DISCOUNT</td>
               <td colspan=2><?php echo $_SESSION['price']['gtotal']; ?></td>
             </tr>
             <tr>
               <td colspan="2">DISCOUNT</td>
               <td colspan=2><?php echo ($_SESSION['price']['total']-$_SESSION['price']['gtotal']); ?></td>
             </tr>
             <tr>
               <td colspan=4><a href="finishbooking.php">CONTINUE TO PAYMENT</a></td>
             </tr>
             <tr>
               <td colspan=4><a href="selectroom.php">RESELECT THE ROOM</a></td>
             </tr>
          </table>

        <?php }else{ ?>
          <h1>PLEASE LOGIN OR REGISTER TO CONTINUE</h1>
          <div id="login_box1_content2">
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
        <div id="login_box2_content2">
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

        <?php } ?>
        <?php

         ?>
      </div>
  <?php footer(); ?>
</div>

  </body>

</html>
