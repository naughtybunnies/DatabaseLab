<?php
  require_once('helperfunctions.php');
  session_start();
  if (!isset($_SESSION['user'])) {
      header('Location: home.php');

}
