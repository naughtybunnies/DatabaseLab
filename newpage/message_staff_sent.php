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
                 $q = "SELECT * FROM staff_viewmessage WHERE staff_viewmessage.message_idmessage = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();
                 print_r($row);

                ?>

                <tr> <td>message_idmessage</td> <td><input type='text' value="<?php echo $row['message_idmessage'];?>"></td>  </tr>
                <tr> <td>name</td> <td><input type='text' value="<?php echo $row['name'];?>"></td>  </tr>
                <tr> <td>message</td> <td><input type='text' value="<?php echo $row['message'];?>"></td>  </tr>
                <tr> <td>timestamp</td> <td><input type='text' value="<?php echo $row['timestamp'];?>"></td> </tr>
                <tr> <td>fname</td> <td><input type='text' value="<?php echo $row['fname'];?>"></td>  </tr>
                <tr> <td>lname</td> <td><input type='text' value="<?php echo $row['lname'];?>"></td>  </tr>


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
