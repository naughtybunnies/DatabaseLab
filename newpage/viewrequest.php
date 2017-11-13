<?php
  require_once('helperfunction.php');
  require_once('connect.php');
  session_start();
  if (isset($_SESSION['userinfo']))
  {
    #print_r($_SESSION['userinfo']);
    $q = "SELECT * FROM request WHERE request.user_iduser = '".$_SESSION['userinfo']['iduser']."';";
    $result = $mysqli->query($q);
    if(!$result)
    {
      echo "error";
    }
    else
    {
      echo "sucess";
    }
  }
  else
  {
    header('Location: login.php');
  }
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>

    <div class="container">
      <?php topbar_logout();?>


      <div id="viewrequest_info">
        <p><b>Request Informations</b></p>
      <table>
        <tr><th>RequestID</th><th>UserID</th><th>Name</th><th>Message</th><th>Date/time</th><th>ReplyMessage</th><th>Reply Date/Time</th></tr>
<?php while($row = $result->fetch_array()) { ?>
        <tr>
          <td><?php echo $row['idrequest']; ?></td>
          <td><?php echo $row['user_iduser']; ?></td>
          <td><?php echo $_SESSION['userinfo']['fname']." ".$_SESSION['userinfo']['lname']; ?></td>
          <td><?php echo $row['message']; ?></td>
          <td><?php echo $row['timestamp']; ?></td>
          <td><?php echo $row['replymessage']; ?></td>
          <td><?php echo $row['replytimestamp']; ?></td>
        </tr>
<?php } ?>
      </table>
      <form action="request.php" method="post">
        <input type="submit" name="submit" value="Go Back">
      </form>
      </div>

        <td><img src="img/home1.jpg" height="600" width="100%"></td>


      <?php footer(); ?>
  </div>

  </body>

</html>
