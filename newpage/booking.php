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

      <div id="booking_info">
        <div id="booking_box_customer">

          <form action="checkdateAction.php" method="POST">
            <div class="textonbooking_box_customer">
              <br>
              <b>Check availabity</b>

                <p>Check in :<input type="date" name="datein"/>
                <br><br>
                Check out :<input type="date" name="dateout"/></p>



              <b>Property</b>
              <br>
              <br>
                <p>
                Adult:
                <select name="adult">
                      <?php
                        for ($i=1; $i < 21; $i++) {
                          echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                      ?>
                    </select> Children:
                <select name="children">
                      <option value="0">0</option>
                      <?php
                        for ($i=1; $i < 21; $i++) {
                          echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                      ?>
                    </select>
                  </p>

                  <br><br>

                <input type="submit" value="Check Availability" />
                <?php if (isset($_GET['datestatus']))
                {
                  echo $_GET['datestatus'];
                } ?>
            </div>
          </form>
        </div>
      </div>

      <td><img src="img/home1.jpg" height="600" width="100%"></td>


  <?php footer(); ?>
</div>

  </body>

</html>
