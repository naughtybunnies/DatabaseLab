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
           <!-- 1. change action to createaction.php -->
           <form class="" action="createaction.php" method="post">

                <ul>

                    <br><br><br><br><br><br>

                    <li>  <?php if (isset($_GET['status']))
                              {
                                echo "<b>";
                                echo $_GET['status'];
                                echo "</b>";
                              } ?>
                    </li><br>
                <li><b>Service Name: <input type='text' name="name" placeholder="Typing Name"></b></li><br>
                <li><b>Service Price: <input type='text' name="price" placeholder="Typing Price"></b></li><br>

                </ul>

                    <!-- 2. change name to createtype and value to CREATE_____ -->
                    <input type="submit" name="createtype" value="CREATESERVICE">


           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
