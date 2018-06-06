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
                 $q = "SELECT * FROM staff_viewroom WHERE staff_viewroom.idroom = ".$_GET['id'].";";
                 $result = $mysqli->query($q);
                 $row = $result->fetch_assoc();


                ?>
                <ul>
                      <input type="hidden" name="idroom" value="<?php echo $row['idroom'];?>">
                <li><b>Room ID: <label> <?php echo $row['idroom'];?> </label></b></li><br>
                <li><b>Room Name: <input type='text' name="roomname" value="<?php echo $row['roomname'];?>"></b></li><br>
                <li><b>status:
                         <?php if($row['status'] == 'open')
                        {?>
                          <input type='radio' name="status" value="open" checked>open<input type='radio' name="status" value="closed">closed
                  <?php }
                        else
                        { ?>
                          <input type='radio' name="status" value="open">open<input type='radio' name="status" value="closed" checked>closed
                  <?php } ?>
                </b></li><br>

              </ul>

                    <input type="submit" name="edittype" value="EDITROOM">

           </form>




         </div>




  <?php footer(); ?>
</div>

  </body>

</html>
