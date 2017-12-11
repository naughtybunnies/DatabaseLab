<?php
  require_once('helperfunction.php');
  session_start();
  require_once('connect.php');
  if(isset($_GET['do'])){
    if ($_GET['do'] == 'reset') {
      unset($_SESSION['servicecart_item']);
      unset($_SESSION['servicecart_unit']);
      unset($_SESSION['service_roomnumber']);
    }
  }
  if(isset($_POST['roomnumber'])){
    $_SESSION['service_roomnumber'] = $_POST['roomnumber'];
  }
  if (!isset($_SESSION['servicecart_item'])) {
    $_SESSION['servicecart_item'] = array();
    $_SESSION['servicecart_unit'] = array();
  }
  if(isset($_POST['sid']) AND isset($_POST['unit'])) {
    array_push($_SESSION['servicecart_item'],$_POST['sid']);
    array_push($_SESSION['servicecart_unit'],$_POST['unit']);
  }
  // print_r($_SESSION['servicecart_item']);
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
      <div class="tcontentbox_bookingck">
        <?php if (!isset($_SESSION['service_roomnumber'])): ?>
          <form action="service_staff_charge.php" method="post">
            <table>
              <tr>
                <th>Room Number</th>
                <td><input type="text" name='roomnumber'></td>
              </tr>
              <tr>
                <td colspan='2'><input type="submit" value='submit'></td>
              </tr>
            </table>
          </form>
        <?php else: ?>
          <h3>Room Number : <?php echo $_SESSION['service_roomnumber']; ?> <a href="service_staff_charge.php?do=reset">Reset</a></h3>

          <form action="service_staff_charge.php" method="post">
            <table border='1'>
              <tr>
                <th>no</th>
                <th>Service</th>
                <th>price</th>
                <th>unit</th>
                <th>remove</th>
              </tr>
              <?php
              $total = 0;
                foreach ($_SESSION['servicecart_item'] as $key => $value) {
                  $q = "SELECT * FROM service WHERE idservice = ".$value;
                  $result = $mysqli->query($q);
                  $row = $result->fetch_assoc();
                  $total = $row['price']*$_SESSION['servicecart_unit'][$key] + $total;
                  echo "
                  <tr>
                    <td>".($key+1)."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['price']."</td>
                    <td>".$_SESSION['servicecart_unit'][$key]."</td>
                    <td><a href='del_servicecart.php?id=".$key."'>Remove</a></td>
                  </tr>
                  ";
                }

               ?>
               <tr>
                 <td colspan="2">Total Price</td>
                 <td colspan="3"><?php echo $total; ?> Bath</td>
               </tr>
              <tr>
                <td colspan='5'>Add new item</td>
              </tr>
              <tr>
                <td>Service ID:</td>
                <td><input type="text" name="sid"></td>
                <td>Unit:</td>
                <td><input type="text" name="unit"></td>
                <td><input type="submit" value="Add"></td>
              </tr>
              <tr>
                <td colspan="5"><a href='charge_money.php'>Charge Money</a></td>
                <?php
                $_SESSION['chargemoney'] = array('roomnumber' => $_SESSION['service_roomnumber'] , 'amount' => $total);
                ?>
              </tr>
            </table>

          </form>
        <?php endif; ?>


      </div>

  <?php footer(); ?>
</div>

  </body>

</html>
