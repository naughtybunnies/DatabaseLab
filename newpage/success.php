<?php
  require_once('helperfunction.php');
  session_start();
  require_once('connect.php');
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
        <h1>SUCCESSFULL!!! YOU'RE GOING TO STAY IN THE MOST FUCKING EXPENSIVE HOTEL EVER</h1>
        <h2>YOUR Payment ID is : <?php echo $_SESSION['paymentid']; ?></h2>
        <h2>YOUR Booking ID ARE </h2>
        <table border=1>
          <tr>
            <th>no</th>
            <th>name</th>
            <th>pic</th>
            <th>bookingid</th>
            <th>roomnumber</th>
          </tr>

          <?php
          foreach ($_SESSION['bookingid']as $key => $value) {
            $q = "SELECT * FROM booking LEFT JOIN room ON room.idroom=booking.room_idroom LEFT JOIN roomtype ON room.roomtype_idroomtype = roomtype.idroomtype WHERE idbooking = ".$value.";";
            $result = $mysqli->query($q);
            $row = $result->fetch_array();
            echo "<tr>
            <td>".($key+1)."</td>
            <td>".$row['name']."</td>
            <td><img src='img/".$row['pic'].".jpg' width=300/></td>
            <td>".$value."</td>
            <td>".$value."</td>
            </tr>";
            $q = "UPDATE booking SET roomnumber = '".$value."' WHERE idbooking = ".$value.";";
            $result = $mysqli->query($q);
            if(!$result)
            {
              echo 'error';
            }
            }


           ?>
        </table>
        <h1>THANK YOU FOR STAING WITH US FROM <?php echo $_SESSION['bookinguser']['datefrom']; ?> TO <?php echo $_SESSION['bookinguser']['dateto']; ?></h1>
        <h1>SEE YOU Juub Juub</h1>
        <h2>GO <a href='logout.php'>HOME</a></h2>

        <!-- logout to destroy session -->

      </div>




  <?php footer(); ?>
</div>

  </body>

</html>
