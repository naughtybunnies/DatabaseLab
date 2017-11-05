<?php
  require_once('connect.php');
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADD ROOMTYPE</title>
  </head>
  <body>
    <h1>ADD ROOMTYPE</h1>
    <hr>
    <form action="addroomtype_action.php" method="post">
      <table>
        <tr>
          <td>Name : </td>
          <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
          <td>Number of Single Bed :</td>
          <td><input type="number" name="sbed" value="0"></td>
        </tr>
        <tr>
          <td>Number of Double Bed :</td>
          <td><input type="number" name="dbed" value="0"></td>
        </tr>
        <tr>
          <td>Number of Bath Room :</td>
          <td><input type="number" name="bath" value="1"></td>
        </tr>
        <tr>
          <td>Number of Living Room :  </td>
          <td><input type="number" name="living" value="0"></td>
        </tr>
        <tr>
          <td>Room Size (m^2) : </td>
          <td><input type="text" name="roomsize" value=""></td>
        </tr>
        <tr>
          <td>Price : </td>
          <td><input type="text" name="price" value=""></td>
        </tr>
        <tr>
          <td>Number of Guest : </td>
          <td><input type="text" name="numguest" value=""></td>
        </tr>
        <tr>
          <td><input type="submit" name="bcreate" value="Create Room"></td>
          <td><input type="reset" value="reset"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
