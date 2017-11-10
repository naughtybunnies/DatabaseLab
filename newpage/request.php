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


      <div id="request_button">
        <ul>
          <a href="sendrequest.php"><li>Send Request <img src="img/i_request.png" style="width:40px;height:40px;" align="center"></li></a>
          <a href="viewrequest.php"><li>View Request <img src="img/i_view.png" style="width:40px;height:40px;" align="center"></li></a>
        </ul>
      </div>

      <td><img src="img/home1.jpg" height="600" width="100%"></td>


  <?php footer(); ?>
</div>

  </body>

</html>
