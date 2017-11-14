<?php
  $mysqli = new mysqli('localhost', 'root', 'root', 'CU_FINAL');
  if($mysqli->connect_errno){
    echo "Connection Error";
  }else{
    echo "Connection Success";
  }
 ?>
