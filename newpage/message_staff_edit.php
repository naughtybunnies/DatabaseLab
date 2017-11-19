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
                 $q = "SELECT * FROM staff_viewmessage WHERE staff_viewmessage.message_idmessage = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();
                 print_r($row);
                 date_default_timezone_set('Asia/Bangkok');
                 $date2 = date('Y-m-d', time());
                 $time2 = date('h:i:s', time());
                ?>
                      <input type="hidden" name="message_idmessage" value="<?php echo $row['message_idmessage'];?>">
                <tr> <td>message_idmessage</td> <td><label> <?php echo $row['message_idmessage'];?></label> </td>  </tr>
                <tr> <td>name</td> <td><input type='text' name="name" value="<?php echo $row['name'];?>" disabled></td>  </tr>
                <tr> <td>message</td> <td><input type='text' name="message" value="<?php echo $row['message'];?>"></td>  </tr>
                        <input type="hidden" name="timestamp" value="<?php echo $date2." ".$time2 ;?>">
                <tr> <td>timestamp</td> <td><input type='text' name="timestamp" value="<?php echo $date2." ".$time2 ;?>" disabled></td>  </tr>
                <tr> <td>fname</td> <td><input type='text' name="fname" value="<?php echo $row['fname'];?>" disabled></td>  </tr>
                <tr> <td>lname</td> <td><input type='text' name="lname" value="<?php echo $row['lname'];?>" disabled></td>  </tr>

                <tr>
                  <td colspan="2">
                    <input type="submit" name="edittype" value="EDITMESSAGE">
                  </td>
                </tr>
             </table>
           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
