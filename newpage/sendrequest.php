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


      <div id="sendrequest_info">
        <div class="textinsendrequest">
          <p>Request Informations</p>
        <ul>

          <li><b>UserID :</b></li>
          <li><b>Name :</b></li>
          <li><b>Date :</b></li>
          <li><b>Time :</b></li>
          <li><b>Description :</b></li>
          <textarea name="description"></textarea>

        </ul>
        </div>
        <form action="viewrequest.php">
        <input type="submit" value="Confirm">
        </form>
      </div>

      <td><img src="img/home1.jpg" height="600" width="100%"></td>


  <?php footer(); ?>
</div>

  </body>

</html>
