<?php
  require_once('connect.php');
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
       <img src="img/home1.jpg" height="600" width="100%" id="tviewpic2">

         <div class="tcontentbox_staff">
           <form class="" action="editaction.php" method="post">

               <?php
                 $q = "SELECT * FROM staff_viewbooking WHERE staff_viewbooking.idbooking = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();


                ?>
                <ul>
                <input type="hidden" name="idbooking" value="<?php echo $row['idbooking'];?>">
                <input type="hidden" name="user_iduser" value="<?php echo $row['user_iduser'];?>">
                <input type="hidden" name="roomname" value="<?php echo $row['roomname'];?>">
                <input type="hidden" name="specialoffer_idspecialoffer" value="<?php echo $row['specialoffer_idspecialoffer'];?>">
                <input type="hidden" name="staff_idstaff" value="<?php echo $row['staff_idstaff'];?>">
                <input type="hidden" name="payment_idpayment" value="<?php echo $row['payment_idpayment'];?>">
                <input type="hidden" name="status" value="<?php echo $row['status'];?>">
                <input type="hidden" name="name" value="<?php echo $row['name'];?>">
                <input type="hidden" name="fname" value="<?php echo $row['fname'];?>">
                <input type="hidden" name="lname" value="<?php echo $row['lname'];?>">

                <li><b>idbooking : <label> <?php echo $row['idbooking'];?> </label></b></li><br>
                <li><b>user_iduser : <label> <?php echo $row['user_iduser'];?> </label></b></li><br>
                <li><b>roomname : <label> <?php echo $row['roomname'];?> </label></b></li><br>
                <li><b>specialoffer_idspecialoffer : <label> <?php echo $row['specialoffer_idspecialoffer'];?> </label></b></li><br>
                <li><b>staff_idstaff : <label> <?php echo $row['staff_idstaff'];?> </label></b></li><br>
                <li><b>payment_idpayment : <label> <?php echo $row['payment_idpayment'];?> </label></b></li><br>
                <li><b>fromdate : <input type='text' name="fromdate" value="<?php echo $row['fromdate'];?>"></b></li><br>
                <li><b>todate : <input type='text' name="todate" value="<?php echo $row['todate'];?>"></b></li><br>
                <li><b>status : <label> <?php echo $row['status'];?> </label></b></li><br>
                <li><b>groupname : <label> <?php echo $row['name'];?> </label></b></li><br>
                <li><b>fname : <label> <?php echo $row['fname'];?> </label></b></li><br>
                <li><b>lname : <label> <?php echo $row['lname'];?> </label></b></li><br>
              </ul>

                    <input type="submit" name="edittype" value="EDITBOOKING">


           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
