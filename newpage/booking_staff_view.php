<?php
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
           <?php
           $a=0;
           while ($a <= 10) {
             echo "<br> hi";
             $a+=1;
           } ?>

         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
