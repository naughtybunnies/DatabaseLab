<?php
  $mysqli = new mysqli('192.168.1.95', 'kate', 'kate', 'CU_FINAL');
  if($mysqli->connect_errno){
    echo "Connection Error";
  }else{
    echo "Connection Success";
  }
 ?>
