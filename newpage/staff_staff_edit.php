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
                 $q = "SELECT * FROM staff_viewstaff WHERE staff_viewstaff.idstaff = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();
                 print_r($row);

                ?>

                <tr> <td>idstaff</td> <td><input disabled value="<?php echo $row['idstaff'];?>"></td>  </tr>
                <tr> <td>salary</td> <td><input type='text' name="salary" value="<?php echo $row['salary'];?>"></td>  </tr>
                <tr> <td>position</td> <td><input type='text' name="position" value="<?php echo $row['position'];?>"></td>  </tr>
                <tr> <td>status</td> <td><input type='text' name="status" value="<?php echo $row['status'];?>"></td> </tr>
                <tr> <td>email</td> <td><input type='text' name="email" value="<?php echo $row['email'];?>"></td>  </tr>
                <tr> <td>fname</td> <td><input type='text' name="fname" value="<?php echo $row['fname'];?>"></td>  </tr>
                <tr> <td>lname</td> <td><input type='text' name="lname" value="<?php echo $row['lname'];?>"></td>  </tr>
                <tr> <td>address</td> <td><input type='text' name="address" value="<?php echo $row['address'];?>"></td>  </tr>
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
