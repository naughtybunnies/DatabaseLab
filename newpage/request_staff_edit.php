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
                 $q = "SELECT * FROM staff_viewrequest WHERE staff_viewrequest.idrequest = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();
                 print_r($row);
                 date_default_timezone_set('Asia/Bangkok');
                 $date1 = date('Y-m-d', time());
                 $time1 = date('h:i:s', time());
                ?>
                        <input type="hidden" name="idrequest" value="<?php echo $row['idrequest'];?>">
                <tr> <td>idrequest</td> <td><label> <?php echo $row['idrequest'];?> </label></td>  </tr>
                <tr> <td>staff_idstaff</td> <td><input type="text" name="staff_idstaff" value="<?php echo $row['staff_idstaff'];?>" disabled></td>  </tr>
                <tr> <td>user_iduser</td> <td><input type="text" name="user_iduser" value="<?php echo $row['user_iduser'];?>" disabled></td>  </tr>
                <tr> <td>status</td>
                        <td> <?php if(isset($row['replytimestamp']))
                        {?>
                          <label>closed</label>
                          <input type="hidden" name="status" value="closed" >
                  <?php }
                        else
                        { ?>
                          <label>open</label>
                          <input type='hidden' name="status" value="open">
                  <?php } ?>  </td>
                </tr>
                <tr> <td>timestamp</td> <td><input disabled value="<?php echo $row['timestamp'];?>"></td>  </tr>
                <tr> <td>replytimestamp</td>
                        <td> <?php if(isset($row['replytimestamp']))
                        {?>
                          <input type='text' name="replytimestamp" value="<?php echo $row['replytimestamp'];?>" disabled>
                          <input type="hidden" name="replytimestamp" value="<?php echo $row['replytimestamp'];?>">

                  <?php }
                        else
                        { ?>
                          <input type='text' name="replytimestamp" value="<?php echo $date1." ".$time1 ;?>">
                  <?php } ?>  </td>
                </tr>
                <tr> <td>replymessage</td> <td><textarea name="replymessage" value="texthere"></textarea></td>  </tr>



                <tr>
                  <td colspan="2">
                    <input type="submit" name="edittype" value="EDITREQUEST">
                  </td>
                </tr>
             </table>
           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
