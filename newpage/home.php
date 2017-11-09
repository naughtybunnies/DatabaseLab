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
    <div id="seaview">
      <div id="booking_box">

        <form action="newbooking.php" method="POST">
          <div class="textonbooking_box">
            <br>
            <b>Check availabity</b>

              <p>Check in :<input type="date" name="datein"/>
              <br><br>
              Check out :<input type="date" name="dateout"/></p>



            <b>Property</b>

              <p>Room:
              <select name="room">
                    <?php
                      for ($i=1; $i < 21; $i++) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                      }
                    ?>
                  </select> Adult:
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
          </div>
        </form>
      </div>
      <img src="img/home1.jpg" width="100%" height="600px">
      <div class="textonpic">
        <h1>
          CU@MyPlace
        </h1>
      </div>
    </div>

    <div id="content">
      <table>
        <tr>
          <th>
            <img src="img/room1.jpg" width="640px" height="400px">
          </th>
          <th>
            <img src="img/room2.jpg" width="637px" height="400px">
          </th>
        </tr>
      </table>
    </div>

    <?php footer(); ?>
  </div>
</body>
</html>
