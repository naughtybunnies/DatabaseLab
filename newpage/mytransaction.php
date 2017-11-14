<?php
  require_once('helperfunction.php');
  require_once('connect.php');
  session_start();

?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>

    <div class="container">
      <?php topbar_logout();?>


      <div id="mytransaction_info">
        <p><b>My Transactions</b></p>
      <table>
        <tr>
          <th>PAYMENT ID</th>
          <th>TYPE</th>
          <th>AMOUNT</th>
          <th>TIMESTAMP</th>
          <th>METHOD</th>
          <th>STAFF ID</th>
        </tr>
        <?php
        $q = "SELECT * FROM payment WHERE payment.user_iduser = ".$_SESSION['userinfo']['iduser'].";";
        $result = $mysqli->query($q);
        if (!$result) {
          echo "error";
        }else {
          while ($row = $result->fetch_array()) {
            echo "<tr>
                    <td>".$row['idpayment']."</td>
                    <td>".$row['type']."</td>
                    <td>".$row['amount']."</td>
                    <td>".$row['timestamp']."</td>
                    <td>".$row['method']."</td>
                    <td>".$row['staff_idstaff']."</td>
            </tr>";
          }

        }

         ?>
      </table>
      </div>

        <td><img src="img/home1.jpg" height="600" width="100%"></td>


      <?php footer(); ?>
  </div>

  </body>

</html>
