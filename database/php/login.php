<?php
  require_once('connect.php');
  if(isset($_POST['username']) && isset($_POST['password'])){
    $q = "SELECT COUNT(*),usergroup_idusergroup,iduser FROM user WHERE user.username= '".$_POST['username']."' AND user.password = '".$_POST['password']."';";
    $result = $mysqli->query($q);
    if(!$result){
      echo "Selecting Error";
    }else{
      $row = $result->fetch_array();
      $status = $row['COUNT(*)'];
      $group = $row["usergroup_idusergroup"];
      $iduser = $row["iduser"];
      if ($status) {
        if ($group == "11") {
          Header('Location: http://localhost/database/php/staffdashboard.php?iduser='.$iduser);
        }else{
          Header('Location: http://localhost/database/php/customerdashboard.php?iduser='.$iduser);
        }
      }else{
        echo "incorrect";
      }
    }
  }
 ?>

  <html>

  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>

  <body>
    <h1>Login</h1>
    <hr>
    <form action="login.php" method="POST">
      <table>
        <tr>
          <td>USERNAME :</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>PASSWORD :</td>
          <td><input type="text" name="password"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Login"></td>
        </tr>
      </table>
      <hr>
    </form>
  </body>

  </html>
