<?php
  $mysqli = new mysqli('localhost', 'root', '', 'newnewcu');
  if($mysqli->connect_errno){
    #echo "Connection Error";
  }else{
    #echo "Connection Success";
  }
 ?>
