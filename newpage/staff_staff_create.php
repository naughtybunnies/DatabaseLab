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

                    <br><br>
                    <li>  <?php if (isset($_GET['status']))
                              {
                                echo "<b>";
                                echo $_GET['status'];
                                echo "</b>";
                              } ?>
                    </li><br>
                <li><b>Email: <input type='text' name="email" placeholder="Set your Email"></b></li><br>
                <li><b>Password: <input type='text' name="password" placeholder="Set your Password"></b></li><br>
                <li><b>First Name: <input type='text' name="fname" placeholder="Typing Name"></b></li><br>
                <li><b>Last Name: <input type='text' name="lname" placeholder="Typing Surename"></b></li><br>
                <li><b>Address:<textarea name="address"></textarea></b></li><br>
                <li><b>Date of Birth: <input type='date' name="dob" placeholder="Typing date of birth"></b></li><br>
                <li><b>Personalid: <input type='text' name="personalid" placeholder="Can leave empty"></b></li><br>
                <li><b>Position: <input type='text' name="position" placeholder="Typing Position"></b></li><br>
                <li><b>Salary: <input type='text' name="salary" placeholder="Typing Salary"></b></li><br>
                </ul>

                    <!-- 2. change name to createtype and value to CREATE_____ -->
                    <input type="submit" name="createtype" value="CREATESTAFF">


           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
