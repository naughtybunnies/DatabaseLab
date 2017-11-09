<?php
<<<<<<< HEAD
  $mysqli = new mysqli('localhost', 'root',"", 'newnewcu');
=======
  $mysqli = new mysqli('localhost', 'root', 'root', 'newnewcu');
>>>>>>> fadcf1056174e89ce6a360a9d7059204931b305d
  if($mysqli->connect_errno){
    echo "Connection Error";
  }else{
    #echo "Connection Success";
  }
 ?>
