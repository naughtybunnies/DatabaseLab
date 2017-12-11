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
                      <input type="hidden" name="email" value="<?php echo $row['email'];?>">


                <li><b>Iduser: <label> <?php echo $row['iduser'];?></label></b></li><br>
                <li><b>UserGroup:</b>
        <?php if($row['usergroup_idusergroup'] == '11')
                  { ?>
                    <input type="hidden" name="usergroup_idusergroup" value="<?php echo $row['usergroup_idusergroup'];?>">
                    <b><label> <?php echo 'Staff';?></label></b>
            <?php }
              else
                  {?>
                    <select name="usergroup_idusergroup">
            <?php if($row['usergroup_idusergroup'] == '1')
                    {?>
                      <option value="1" selected>Customer</option>
                      <option value="2">Gold Customer</option>
                      <option value="3">Platinum Customer</option>
              <?php }
                  elseif($row['usergroup_idusergroup'] == '2')
                    {?>
                      <option value="1">Customer</option>
                      <option value="2" selected>Gold Customer</option>
                      <option value="3">Platinum Customer</option>
              <?php }
                    else
                    {?>
                      <option value="1">Customer</option>
                      <option value="2">Gold Customer</option>
                      <option value="3" selected>Platinum Customer</option>
              <?php } ?>
                    </select>
            <?php } ?>
                </li><br>
                <li><b>Email: <label> <?php echo $row['email'];?></label></b></li><br>
                <li><b>Password: <input type='text' name="password" value="<?php echo $row['password'];?>"></b></li><br>
                <li><b>First Name: <input type='text' name="fname" value="<?php echo $row['fname'];?>"></b></li><br>
                <li><b>Last Name: <input type='text' name="lname" value="<?php echo $row['lname'];?>"></b></li><br>
                <li><b>Address: <input type='text'name="address" value="<?php echo $row['address'];?>"></b></li><br>
                <li><b>Date of Birth: <input type='date'name="dob" value="<?php echo $row['dob'];?>"></b></li><br>
                <li><b>Personalid: <input type='text'name="personalid" value="<?php echo $row['personalid'];?>"></b></li><br>
              </ul>

                    <input type="submit" name="edittype" value="EDITUSER">

           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
