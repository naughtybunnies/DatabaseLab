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
    <?php menubar(); ?>
  </div>
  <?php customer_sidebar(); ?>

    <div id="page">
        <div id="viewrequest">
          <p><b>Request Information</b></p>
        <table>
          <tr><th>UserID</th><th>Name</th><th>Date/Time</th><th>Description</th></tr>
          <tr><td>get from database</td><td>get from database</td><td>ger from sesstion</td><td>Description</td></tr>

        </table>
        <form action="request.php" method="post">
        <div class="center">
          <br></br><input type="submit" name="submit" value="GO Back">
        </div>
      </form>
      </div>
    </div>

        <img src="img/view1.jpg" height="600px" width="100%">



  <!-- edit here -->
  <?php bottombar(); ?>

  </body>

  </html>
