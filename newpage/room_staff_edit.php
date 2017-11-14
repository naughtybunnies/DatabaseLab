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
        topbar_logout();
      }else{
        topbar();
      }
       ?>
       <img src="img/home1.jpg" height="600" width="100%" id="tviewpic2">

         <div class="tcontentbox2">
           <form class="" action="index.html" method="post">
             <table border=1>
               <?php
                 $q = "SELECT * FROM staff_viewroom WHERE staff_viewroom.idroom = ".$_GET['id'].";";
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
