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
             <table border=1>
               <?php
                 $q = "SELECT * FROM staff_viewbooking WHERE staff_viewbooking.idbooking = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();
                 print_r($row);

                ?>
                <input type="hidden" name="idbooking" value="<?php echo $row['idbooking'];?>">
                <tr> <td>idbooking</td> <td><label> <?php echo $row['idbooking'];?> </label></td>  </tr>
                <tr> <td>user_iduser</td> <td><input type="text" name="user_iduser"  value="<?php echo $row['user_iduser'];?>" disabled></td>  </tr>
                <tr> <td>roomname</td> <td><input type="text" name="roomname" value="<?php echo $row['roomname'];?>" disabled></td>  </tr>
                <tr> <td>specialoffer_idspecialoffer</td> <td><input type="text" name="specialoffer_idspecialoffer" value="<?php echo $row['specialoffer_idspecialoffer'];?>" disabled></td> </tr>
                <tr> <td>staff_idstaff</td> <td><input type="text" name="staff_idstaff" value="<?php echo $row['staff_idstaff'];?>" disabled></td>  </tr>
                <tr> <td>payment_idpayment</td> <td><input type="text" name="payment_idpayment" value="<?php echo $row['payment_idpayment'];?>" disabled></td>  </tr>
                <tr> <td>fromdate</td> <td><input type='text' name="fromdate" value="<?php echo $row['fromdate'];?>"></td>  </tr>
                <tr> <td>todate</td> <td><input type='text' name="todate" value="<?php echo $row['todate'];?>"></td>  </tr>
                <tr> <td>status</td> <td><input type='text' name="status" value="<?php echo $row['status'];?>" disabled></td>  </tr>
                <tr> <td>name</td> <td><input type="text" name="name" value="<?php echo $row['name'];?>" disabled></td>  </tr>
                <tr> <td>fname</td> <td><input type="text" name="fname" value="<?php echo $row['fname'];?>" disabled></td>  </tr>
                <tr> <td>lname</td> <td><input type="text" name="lname" value="<?php echo $row['lname'];?>" disabled></td>  </tr>

                <tr>
                  <td colspan="2">
                    <input type="submit" name="edittype" value="EDITBOOKING">
                  </td>
                </tr>
             </table>
           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
