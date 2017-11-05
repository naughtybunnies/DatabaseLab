<?php
  require_once('connect.php');
  if (isset($_GET['iduser'])) {
      $iduser = $_GET['iduser'];
      $q = "SELECT * FROM USER WHERE USER.iduser = '".$iduser."';";
      $result = $mysqli->query($q);
      if (!$result) {
          echo "error query";
      } else {
          $row = $result->fetch_array();
          if ($row["usergroup_idusergroup"] == '11') {
              Header('Location: http://localhost/database/php/login.php');
          } else {
              #echo "Successful Customer Login";
        #var_dump($row);
          }
      }
  } else {
      Header('Location: http://localhost/database/php/login.php');
  }

?>
  <html>

  <head>
    <meta charset="utf-8">
    <title>CUSTOMER DASHBOARD</title>
  </head>

  <body>
    <h1>CUSTOMER DASHBOARD</h1>
    <hr>
    <h1>Welcome <?=$row['name']?> <?=$row['surname']?>,</h1>
    <ul>
      <li>Logout</li>

    </ul>
  </body>

  </html>
