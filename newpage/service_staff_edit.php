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
           <!-- 1. change action to editaction.php -->
           <form class="" action="editaction.php" method="post">
             <table border=1>
               <?php
                // 3. copy query below to editaction.php
                 $q = "SELECT * FROM staff_viewservice WHERE staff_viewservice.idservice = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();
                 foreach ($row as $key => $value) {
                   echo "<tr>
                   <td>".$key."</td>
                   <td><input type='text' value='".$value."'></td>
                   </tr>";
                 }
                ?>
                <tr>
                  <td colspan="2">
                    <!-- 2. change name to edittype and value to EDIT_____ -->
                    <input type="submit" name="edittype" value="EDITSERVICE">
                  </td>
                </tr>
             </table>
           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
