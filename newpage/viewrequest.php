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
      // echo "sucess";
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
        <tr>
          <th>RequestID</th>
          <th>See Message</th>
          <th>Sent Time</th>
          <th>See ReplyMessage</th>
          <th>Reply Date and Time</th>
        </tr>
<?php while($row = $result->fetch_array()) { ?>
        <tr>
          <td><?php echo $row['idrequest']; ?></td>
          <td><?php echo "<a href='viewreqmessage.php?id=".$row['idrequest']."' target='_blank'>SEE</a>"; ?></td>
          <td><?php echo $row['timestamp']; ?></td>
          <td><?php if (isset($row['replytimestamp'])){
            echo "<a href='viewreqmessage.php?id=".$row['idrequest']."' target='_blank'>SEE REPLY</a>";
          } else{
            echo "PENDING";

          } ?></td>
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
