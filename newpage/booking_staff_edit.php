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
           <form class="" action="index.html" method="post">
             <table border=1>
               <?php
                 $q = "SELECT * FROM staff_viewbooking WHERE staff_viewbooking.idbooking = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();
                 print_r($row);

                ?>

                <tr> <td>idbooking</td> <td><input disabled value="<?php echo $row['idbooking'];?>"></td>  </tr>
                <tr> <td>user_iduser</td> <td><input disabled value="<?php echo $row['user_iduser'];?>"></td>  </tr>
                <tr> <td>roomname</td> <td><input disabled value="<?php echo $row['roomname'];?>"></td>  </tr>
                <tr> <td>specialoffer_idspecialoffer</td> <td><input disabled value="<?php echo $row['specialoffer_idspecialoffer'];?>"></td> </tr>
                <tr> <td>staff_idstaff</td> <td><input disabled value="<?php echo $row['staff_idstaff'];?>"></td>  </tr>
                <tr> <td>payment_idpayment</td> <td><input disabled value="<?php echo $row['payment_idpayment'];?>"></td>  </tr>
                <tr> <td>fromdate</td> <td><input type='text' name="fromdate" value="<?php echo $row['fromdate'];?>"></td>  </tr>
                <tr> <td>todate</td> <td><input type='text' name="todate" value="<?php echo $row['todate'];?>"></td>  </tr>
                <tr> <td>status</td> <td><input type='text' name="status" value="<?php echo $row['status'];?>"></td>  </tr>
                <tr> <td>name</td> <td><input disabled value="<?php echo $row['name'];?>"></td>  </tr>
                <tr> <td>fname</td> <td><input disabled value="<?php echo $row['fname'];?>"></td>  </tr>
                <tr> <td>lname</td> <td><input disabled value="<?php echo $row['lname'];?>"></td>  </tr>

                <tr>
                  <td colspan="2">
                    <input type="submit" name="" value="EDIT">
                  </td>
                </tr>
             </table>
           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
