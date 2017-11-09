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
      <div class="button_requestpage">
        <a href="#">
          <div id="sendrequest_button">
            Send Request
          </div>
        </a>

        <a href="#">
          <div id="viewrequest_button">
            View Request
          </div>
        </a>
      </div>

      <td><img src="img/home1.jpg" height="600" width="100%"></td>

      <?php footer(); ?>
    </div>

  </body>

</html>
