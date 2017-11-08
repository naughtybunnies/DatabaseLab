<?php
  require_once('connect.php');
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
    <?php menubar_logout(); ?>
  </div>
  <?php customer_sidebar(); ?>

  <div id="page">

    <div id="mypayment">
      <p><b>My payment</b></p>
    <table>
      <tr><th>list</th><th>price</th><th>date</th></tr>
      <?php
        $q="select payment_idpayment,user_iduser from guest_has_service where user_userid = $uid left join guest on guest_idguest=idguest";
        $result=$mysqli->query($q);
        if(!$result){
          echo "Select failed. Error: ".$mysqli->error ;
        }
       while($row=$result->fetch_array()){ ?>
               <tr>
                  <td><?=$row['name']?></td>
                  <td><?=$row['amount']?></td>
                  <td><?=$row['timestamp']?></td>

      <?php } ?>
    </table>
    </div>
  </div>

  <td><img src="img/home3.jpg" height="600" width="100%"></td>

  <?php bottombar(); ?>

</body>
</html>
