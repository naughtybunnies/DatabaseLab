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
                 $q = "SELECT * FROM staff_viewmessage WHERE staff_viewmessage.message_idmessage = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();
                 date_default_timezone_set('Asia/Bangkok');
                 $date2 = date('Y-m-d', time());
                 $time2 = date('h:i:s', time());
                ?>
                <ul>
                      <input type="hidden" name="message_idmessage" value="<?php echo $row['message_idmessage'];?>">
                      <input type="hidden" name="name" value="<?php echo $row['name'];?>">
                      <input type="hidden" name="timestamp" value="<?php echo $date2." ".$time2 ;?>">
                      <input type="hidden" name="fname" value="<?php echo $row['fname'];?>">
                      <input type="hidden" name="lname" value="<?php echo $row['lname'];?>">
                      <br>
                <li><b>message_idmessage: <label> <?php echo $row['message_idmessage'];?></label></b></li><br>
                <li><b>groupname: <label> <?php echo $row['name'];?></label></b></li><br>
                <li><b>message: <input type='text' name="message" value="<?php echo $row['message'];?>"></b></li><br>
                <li><b>timestamp: <label> <?php echo $row['timestamp'];?></label></b></li><br>
                <li><b>fname: <label> <?php echo $row['fname'];?></label></b></li><br>
                <li><b>lname: <label> <?php echo $row['lname'];?></label></b></li><br>
              </ul>

                    <input type="submit" name="edittype" value="EDITMESSAGE">

           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
