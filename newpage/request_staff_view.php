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

         <div class="tcontentbox_request">
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
            $q = "SELECT * FROM staff_viewrequest ORDER BY ".$_GET['sort']." ".$by1.";";
          }else{
            $q = "SELECT * FROM staff_viewrequest";
          }
          $result=$mysqli->query($q);
          $printhead = 1;
          while ($row = $result->fetch_assoc()) {
            if ($printhead) {
              echo "<tr>";
              foreach ($row as $key => $value) {
                echo "<th><a href='request_staff_view.php?sort=".$key."&by=".$by."'>".$key."</a></th>";
              }
              echo "<th>MESSAGE</th>";
              echo "<th>REPLY</th>";
              echo "</tr>";
              $printhead=0;
            }
            echo "<tr>";
            foreach ($row as $key => $value) {
              echo "<td>".$value."</td>";
            }
            echo "<td><a href='viewreqmessage.php?id=".$row['idrequest']."' target='_blank'>SEE MESSAGE</a></td>";
            if(isset($row['replytimestamp']))
            {
            echo "<td>ALREADY REPLY</td>";
            }
            else
            {
            echo "<td><a href='request_staff_edit.php?id=".$row['idrequest']."'>WAIT FOR REPLY</a></td>";
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
