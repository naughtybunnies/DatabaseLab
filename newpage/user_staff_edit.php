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
                 $q = "SELECT * FROM staff_viewuser WHERE staff_viewuser.iduser = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();
                 print_r($row);

                ?>

                <tr> <td>iduser</td> <td><input disabled value="<?php echo $row['iduser'];?>"></td>  </tr>
                <tr> <td>usergroup_idusergroup</td> <td><input type='text' name="usergroup_idusergroup" value="<?php echo $row['usergroup_idusergroup'];?>"></td>  </tr>
                <tr> <td>password</td> <td><input type='text' name="password" value="<?php echo $row['password'];?>"></td>  </tr>
                <tr> <td>email</td> <td><input type='text' name="email" value="<?php echo $row['email'];?>"></td>  </tr>
                <tr> <td>fname</td> <td><input type='text' name="fname" value="<?php echo $row['fname'];?>"></td>  </tr>
                <tr> <td>lname</td> <td><input type='text' name="lname" value="<?php echo $row['lname'];?>"></td>  </tr>
                <tr> <td>address</td> <td><input type='text'name="address" value="<?php echo $row['address'];?>"></td>  </tr>
                <tr> <td>dob</td> <td><input disabled value="<?php echo $row['dob'];?>"></td>  </tr>
                <tr> <td>personalid</td> <td><input disabled value="<?php echo $row['personalid'];?>"></td>  </tr>

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
