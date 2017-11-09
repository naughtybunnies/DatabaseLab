<?php
  require_once('helperfunction.php');
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
        <tr><th>UserID</th><th>Name</th><th>Date/Time</th><th>Description</th></tr>
        <tr><td>get from database</td><td>get from database</td><td>ger from sesstion</td><td>ger</td></tr>
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
