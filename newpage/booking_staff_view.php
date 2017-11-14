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
           <table border='1'>
          <?php
          if (!isset($_GET['by'])) {
            $by = 'ASC';
          }else{
            $by1 = $_GET['by'];
            if ($_GET['by']=='ASC') {
              $by = 'DESC';
            }else{
              $by = 'ASC';
            }
          }
          if (isset($_GET['sort'])) {
            $q = "SELECT * FROM staff_viewbooking ORDER BY ".$_GET['sort'].";";
          }else{
            $q = "SELECT * FROM staff_viewbooking;";
          }
          $result=$mysqli->query($q);
          $printhead = 1;
          while ($row = $result->fetch_assoc()) {
            if ($printhead) {
              echo "<tr>";
              foreach ($row as $key => $value) {
                echo "<th><a href='booking_staff_view.php?sort=".$key."&by=".$by."'>".$key."</a></th>";
              }
              echo "</tr>";
              $printhead=0;
            }
            echo "<tr>";
            foreach ($row as $key => $value) {
              echo "<td>".$value."</td>";
            }
            echo "</tr>";
          }

           ?>
         </table>


         </div>




  <?php footer(); ?>
</div>

  </body>

</html>