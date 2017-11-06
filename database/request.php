<?php
  require_once('helperfunctions.php');
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>

  <div id="menubar">
    <?php menubar_logout(); ?>
  </div>
<?php customer_sidebar(); ?>

  <?php customer_sidebar(); ?>

    <div id="page">
      <div id="boxrequest1">
        <a href="sendrequest.php">Send request</a>
      </div>
      <div id="boxrequest2">
        <a href="viewrequest.php">View request</a>
      </div>
    </div>

        <img src="img/view1.jpg" height="600px" width="100%">



  <!-- edit here -->
  <?php bottombar(); ?>

  </body>

  </html>
