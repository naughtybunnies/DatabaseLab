<?php
  require_once('connect.php');
 ?>

  <html>

  <head>
    <meta charset="utf-8">
    <title>Room Management System</title>
  </head>

  <body>
    <h1>ROOM MANAGEMENT SYSTEM</h1>
    <hr>
    <h3>Room Type</h1>
      <table border="1">
        <tr>
          <th>roomtypeid</th>
          <th>roomtypename</th>
          <th>edit</th>
        </tr>
        <?php
          $q = "SELECT * FROM roomtype ;";
          $result = $mysqli->query($q);
          if (!$result) {
              #echo "error";
          } else {
              #echo "no error";
              while ($row = $result->fetch_array()) {
                  echo "<tr><td>".$row['idroomtype']."</td><td>".$row['name']."</td><td><a href='editroomtype.php?roomtypeid=".$row['idroomtype']."'>EDIT</a></td></tr>";
              }
          }
          ?>
      </table>
      <br>
      <a href="addroomtype.php"><input type="button" value="Add roomtype"></a>

    <hr>
    <h3>Rooms</h3>
    <hr>
    <table border="1">
      <tr>
        <th>roomid</th>
        <th>roomtype</th>
        <th>roomno</th>
        <th>status</th>
        <th>edit</th>
      </tr>
      <?php
        $q = "SELECT idroom, roomno, name, status FROM room LEFT JOIN roomtype on roomtype_idroomtype = idroomtype";
        $result = $mysqli->query($q);
        if (!$result) {
          echo "Error in querying";
        }else{
            while ($row= $result->fetch_array()) {
              echo "<tr><td>".$row['idroom']."</td><td>".$row['name']."</td><td>".$row['roomno']."</td><td>".$row['status']."</td><td><a href='editroom.php?roomid=".$row['idroom']."'>EDIT</a></td></tr>";
            }
        }
       ?>
    </table>
    <br>
    <a href="addroom.php"><input type="button" value="Add room"></a>

    <hr>
  </body>

  </html>
