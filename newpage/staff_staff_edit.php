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
                 $q = "SELECT * FROM staff_viewstaff WHERE staff_viewstaff.idstaff = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();


                ?>
                <ul>
                      <input type="hidden" name="idstaff" value="<?php echo $row['idstaff'];?>">
                      <input type="hidden" name="email" value="<?php echo $row['email'];?>">
                      <input type="hidden" name="dob" value="<?php echo $row['dob'];?>">
                      <input type="hidden" name="personalid" value="<?php echo $row['personalid'];?>">

                <li><b>idstaff: <label> <?php echo $row['idstaff'];?> </label></b></li><br>
                <li><b>salary: <input type='text' name="salary" value="<?php echo $row['salary'];?>"></b></li><br>
                <li><b>position:<input type='text' name="position" value="<?php echo $row['position'];?>"></b></li><br>
                <li><b>status:
                         <?php if($row['status'] == 'active')
                        {?>
                          <input type='radio' name="status" value="active" checked>active<input type='radio' name="status" value="nonactive">nonactive
                  <?php }
                        else
                        { ?>
                          <input type='radio' name="status" value="active">active<input type='radio' name="status" value="nonactive" checked>nonactive
                  <?php } ?>
                </b></li><br>
                <li><b>email: <label> <?php echo $row['email'];?> </label></b></li><br>
                <li><b>fname: <input type='text' name="fname" value="<?php echo $row['fname'];?>" ></b></li><br>
                <li><b>lname: <input type='text' name="lname" value="<?php echo $row['lname'];?>" ></b></li><br>
                <li><b>address: <input type='text' name="address" value="<?php echo $row['address'];?>"></b></li><br>
                <li><b>dob :<label> <?php echo $row['dob'];?> </label></b></li><br>
                <li><b>personalid: <label> <?php echo $row['personalid'];?> </label></b></li><br>
              </ul>

                    <input type="submit" name="edittype" value="EDITSTAFF">

           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
