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
                 $q = "SELECT * FROM staff_viewuser WHERE staff_viewuser.iduser = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();


                ?>
                <ul>
                      <input type="hidden" name="iduser" value="<?php echo $row['iduser'];?>">
                      <input type="hidden" name="dob" value="<?php echo $row['dob'];?>">
                      <input type="hidden" name="personalid" value="<?php echo $row['personalid'];?>">

                <li><b>iduser: <label> <?php echo $row['iduser'];?></label></b></li><br>
                <li><b>usergroup_idusergroup: <input type='text' name="usergroup_idusergroup" value="<?php echo $row['usergroup_idusergroup'];?>"></b></li><br>
                <li><b>email: <input type='text' name="email" value="<?php echo $row['email'];?>"></b></li><br>
                <li><b>password: <input type='text' name="password" value="<?php echo $row['password'];?>"></b></li><br>
                <li><b>fname: <input type='text' name="fname" value="<?php echo $row['fname'];?>"></b></li><br>
                <li><b>lname: <input type='text' name="lname" value="<?php echo $row['lname'];?>"></b></li><br>
                <li><b>address: <input type='text'name="address" value="<?php echo $row['address'];?>"></b></li><br>
                <li><b>dob: <label> <?php echo $row['dob'];?></label></b></li><br>
                <li><b>personalid: <label> <?php echo $row['personalid'];?></label></b></li><br>
              </ul>

                    <input type="submit" name="edittype" value="EDITUSER">

           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
