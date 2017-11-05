<?php
  require_once('connect.php');
  $q = "INSERT INTO `roomtype` (`idroomtype`, `name`, `numdbed`, `numsbed`, `numbath`, `numliving`, `size`, `price`, `numguest`) VALUES (NULL, '".$_POST['name']."', '".$_POST['dbed']."', '".$_POST["sbed"]."', '".$_POST["bath"]."', '".$_POST["living"]."', '".$_POST["roomsize"]."', '".$_POST["price"]."', '".$_POST["numguest"]."')";
  $result = $mysqli->query($q);
  if (!$result) {
    echo "inserting failed";
  }else{
    Header('Location: room.php');
  }
 ?>
