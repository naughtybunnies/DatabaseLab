<?php
  session_start();
  require_once('helperfunctions.php');
  require_once('connect.php');
  if (isset($_SESSION['user'])) {
      #print_r($_SESSION['user']);
  } else {
      header('Location: home.php');
  }
 ?>
  <html>

  <head>
    <title>CU@MyPlace</title>
    <link rel="stylesheet" href="default.css">
  </head>

  <body>
    <?php
     if (isset($_SESSION['user'])) {
         echo '<div id="menubar">';
         menubar_logout();
         echo '</div>';
     } else {
         echo '<div id="menubar">';
         menubar();
         echo '</div>';
     }
      ?>
      <div id="viewpic">
        <img src="img/view1.jpg" height="600" width="100%">
      </div>

      <div id="nosidebarpage">
        <h2>PLEASE SELECT AT LEAST 1 GUEST PER 1 ROOM</h2>
        <form action="" method="post">
          <table border=1 class="roomtable">
            <tr>
              <th>no</th>
              <th>roomname</th>
              <th>adult</th>
              <th>children</th>
              <th>price</th>
              <th>GUEST</th>
            </tr>
            <?php
              foreach ($_SESSION['myarray'] as $key => $value) {
                // $value = idroomtype
                $q = "SELECT * FROM roomtype WHERE idroomtype=".$value.";";
                $result = $mysqli->query($q);
                $row = $result->fetch_array();
                echo "<tr>
                  <td>".($key+1)."</td>
                  <td>".$row['name']."</td>
                  <td>".$row['numguest']."</td>
                  <td>".$row['numchild']."</td>
                  <td>".$row['price']."</td>
                  <td>
                    <select name='guestroom".$key."'>";
                  $q = "SELECT * FROM guest WHERE guest.user_iduser = ".$_SESSION['user']['iduser'].";";
                  $result2 = $mysqli->query($q);
                  while ($row2 = $result2->fetch_array()) {
                    echo '<option value="'.$row2['idguest'].'">'.$row2['name']." ".$row2['surname'].'</option>';
                  }
                  echo "</select>
                  </td>
                </tr>";
              }
            ?>


          </table>
          <input type="submit" name="continue" value="Confirm Guest">
        </form>
        <div class="center">
          <a href="addguest.php">ADD GUEST</a>
          <br>

        </div>
      <!-- </div> -->

      <div id="bottomest">
        <?php bottombar(); ?>
      </div>


  </body>

  </html>
