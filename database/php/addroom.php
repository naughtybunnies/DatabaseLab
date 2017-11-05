<?php
  require_once('connect.php');
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADD ROOM</title>
  </head>
  <body>
    <h1>ADD ROOMTYPE</h1>
    <hr>
    <form action="addroom_action.php" method="post">
      <table>
        <tr>
          <td>Roomtype</td>
          <td><input type="" name="roomtype" value=""></td>
          <?php
            $q = "SELECT name,idroomtype FROM roomtype";
            $result = $mysqli->query($q);
            if(!$result){
              echo "error";
            }else{
            }
           ?>

        </tr>
        <tr>
          <td>Roomno</td>
          <td><input type="text" name="" value=""></td>
        </tr>
        <tr>
          <td>Status</td>
          <td></td>
        </tr>

      </table>
    </form>
  </body>
</html>
