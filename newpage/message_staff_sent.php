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

         <div class="tcontentbox2">
           <!-- 1. change action to createaction.php -->
           <form class="" action="createaction.php" method="post">
             <?php
              $q = "SELECT * FROM staff WHERE user_iduser = '".$_SESSION['userinfo']['iduser']."';";
              $result = $mysqli->query($q);
              $row = $result->fetch_assoc();

              date_default_timezone_set('Asia/Bangkok');
              $date9 = date('Y-m-d', time());
              $time9 = date('h:i:s a', time());
              $_SESSION['storeDate9'] = $date9;
              $_SESSION['storeTime9'] = $time9;
              $_SESSION['storeDateTime9'] = $date9." ".$time9;
              ?>
                <ul>

                    <br><br>
                    <li>  <?php if (isset($_GET['status']))
                              {
                                echo "<b>";
                                echo $_GET['status'];
                                echo "</b>";
                              } ?>
                    </li><br>
                    <input type="hidden" name="staff_idstaff" value="<?php echo $row['idstaff'];?>">
                    <input type="hidden" name="timestamp" value="<?php echo $_SESSION['storeDateTime9'];?>">
                <li><b>Staff ID:<label> <?php echo $row['idstaff'];?> </label> </b></li><br>
                <li><b>Message: <input type='text' name="message" placeholder="Typing message to customer"></b></li><br>
                <li><b>Sent to :</b>
                  <select name="usergroup_idusergroup">
                    <option value="1">Customer</option>
                    <option value="2">Gold Customer</option>
                    <option value="3">Platinum Customer</option>
                  </select>
                </li><br>
                <li><b>Timestamp: <label> <?php echo $_SESSION['storeDateTime9'];?> </label></b></li><br>
                </ul>

                    <!-- 2. change name to createtype and value to CREATE_____ -->
                    <input type="submit" name="createtype" value="CREATEMESSAGE">


           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
