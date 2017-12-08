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
                 $q = "SELECT * FROM request WHERE request.idrequest = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();

                 date_default_timezone_set('Asia/Bangkok');
                 $date1 = date('Y-m-d', time());
                 $time1 = date('h:i:s', time());
                ?>
                <ul>
                        <input type="hidden" name="idrequest" value="<?php echo $row['idrequest'];?>">
                        <input type="hidden" name="staff_idstaff" value="<?php echo $row['staff_idstaff'];?>">
                        <input type="hidden" name="user_iduser" value="<?php echo $row['user_iduser'];?>">
                        <input type="hidden" name="timestamp" value="<?php echo $row['timestamp'];?>">

                <li><b>idrequest: <label> <?php echo $row['idrequest'];?> </label></b></li><br>
                <li><b>staff_idstaff: <label> <?php echo $row['staff_idstaff'];?> </label></b></li><br>
                <li><b>user_iduser: <label> <?php echo $row['user_iduser'];?> </label></b></li><br>
                <li><b>status:
                        <?php if(isset($row['replytimestamp']))
                        {?>
                          <label>closed</label>
                          <input type="hidden" name="status" value="closed" >
                  <?php }
                        else
                        { ?>
                          <label>open</label>
                          <input type='hidden' name="status" value="open">
                  <?php } ?>
                </b></li><br>
                <li><b>timestamp: <label> <?php echo $row['user_iduser'];?> </label></b></li><br>
                <li><b>replytimestamp:
                        <?php if(isset($row['replytimestamp']))
                        {?>
                          <input type='text' name="replytimestamp" value="<?php echo $row['replytimestamp'];?>" disabled>
                          <input type="hidden" name="replytimestamp" value="<?php echo $row['replytimestamp'];?>">

                  <?php }
                        else
                        { ?>
                          <input type='text' name="replytimestamp" value="<?php echo $date1." ".$time1 ;?>">
                  <?php } ?>
                </b></li><br>
                <li><b>replymessage: <textarea name="replymessage" value="texthere"></textarea></b></li><br>
              </ul>



                    <input type="submit" name="edittype" value="EDITREQUEST">

           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
