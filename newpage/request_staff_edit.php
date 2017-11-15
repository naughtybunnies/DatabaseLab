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
                 $q = "SELECT * FROM staff_viewrequest WHERE staff_viewrequest.idrequest = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();
                 print_r($row);

                ?>

                <tr> <td>idrequest</td> <td><input disabled value="<?php echo $row['idrequest'];?>"></td>  </tr>
                <tr> <td>staff_idstaff</td> <td><input disabled value="<?php echo $row['staff_idstaff'];?>"></td>  </tr>
                <tr> <td>user_iduser</td> <td><input disabled value="<?php echo $row['user_iduser'];?>"></td>  </tr>
                <tr> <td>status</td> <td><input type='text' name="requeststatus" value="<?php echo $row['status'];?>"></td> </tr>
                <tr> <td>timestamp</td> <td><input disabled value="<?php echo $row['timestamp'];?>"></td>  </tr>
                <tr> <td>replytimestamp</td> <td><input type='text' name="replytimestamp" value="<?php echo $row['replytimestamp'];?>"></td>  </tr>


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
