<?php
  $mysqli = new mysqli('localhost', 'root', '', 'cu_final');
  if($mysqli->connect_errno){
    #echo "Connection Error";
  }else{
    #echo "Connection Success";
  }
 ?>
