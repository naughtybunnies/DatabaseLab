<?php
  require_once('connect.php');
  if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['email'])) {
    $q = "INSERT INTO `user` (`iduser`, `usergroup_idusergroup`, `username`, `password`, `email`, `name`, `surname`) VALUES (NULL, '1', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['name']."', '".$_POST['surname']."')";
    $result = $mysqli->query($q);
    if(!$result){
      echo "Error Inserting";
    }else{
      echo "Success Inserting";
    }
  }
 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
  <h1>REGISTER</h1>
    <hr>
    <form action="register.php" method="POST">
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
          <td>EMAIL :</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>First Name :</td>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>Last Name :</td>
          <td><input type="text" name="surname"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Register"></td>
        </tr>
      </table>
    <hr>
    </form>
  </body>
</html>
