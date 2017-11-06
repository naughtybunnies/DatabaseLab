<?php
  require_once('helperfunctions.php');
  session_start();
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>
  <!-- edit here -->
  <?php
  if (isset($_SESSION['user'])) {
    echo '<div id="menubar">';
    menubar_logout();
    echo '</div>';
  }else{
    echo '<div id="menubar">';
    menubar();
    echo '</div>';
  }
   ?>


  <div id="content">
    <table class="fullwidth" id="hometable">
      <tr>
        <td colspan="2">
          <img src="img/view1.jpg" height="600px" width="100%">
        </td>
      </tr>
      <tr>
        <td><img src="img/room1.jpg" height="400" width="100%"></td>
        <td><img src="img/room2.jpg" height="400" width="100%"></td>
      </tr>
    </table>
  </div>


  <div id="box">
    <!--booking-->
    <form action="newbooking.php" method="POST">
      <div id="formcontainer">
        &nbsp;&nbsp;&nbsp;&nbsp;Check availabity<br><br>
        <div class="center">
          Check in :&nbsp;&nbsp;<input type="date" name="datein"/>
          <br><br>
          Check out:&nbsp;&nbsp;<input type="date" name="dateout"/><br><br>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp;Property<br><br>
        <div class="center">
          Room:
          <select name="room">
                <?php
                  for ($i=1; $i < 21; $i++) {
                    echo '<option value="'.$i.'">'.$i.'</option>';
                  }
                ?>
              </select>&nbsp;&nbsp;&nbsp; Adult:
          <select name="adult">
                <?php
                  for ($i=1; $i < 21; $i++) {
                    echo '<option value="'.$i.'">'.$i.'</option>';
                  }
                ?>
              </select>&nbsp;&nbsp;&nbsp; Children:
          <select name="children">
                <option value="0">0</option>
                <?php
                  for ($i=1; $i < 21; $i++) {
                    echo '<option value="'.$i.'">'.$i.'</option>';
                  }
                ?>
              </select>
        </div>
        <br>
        <div class="center">
          <!--ปุ่ม-->

          <input type="submit" value="Check Availability" />
        </div>

      </div>
    </form>
  </div>

  <!-- edit here -->
  <?php bottombar(); ?>

</body>

</html>
