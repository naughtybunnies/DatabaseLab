<?php
  require_once('helperfunctions.php');
  session_start();
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>
  <?php
  if (isset($_SESSION['user'])) {
    echo '<div id="menubar">';
    menubar_logout();
    echo '</div>';
  }else{
    echo '<div id="menubar">';
    menubar();
    echo '</div>';
  }
   ?>
  <table class="fullwidth" id="hometable">
    <tr>
      <td colspan="2"><img src="img/view1.jpg" height="600px" width="100%"></td>
    </tr>
    <!--รูปวิวบนสุด-->
  </table>
  <div id="info">
    <h1>&nbsp;&nbsp;Hotel Room</h1>
    <hr />
    <table>
      <tr>
        <td>
          <div class="center">
            <div id="space"><img src="img/s3.jpg" height="200" width="300"></div>
          </div>
        </td>
        <td>
          <h3>Deluxe Pool Access Room</h3><br>
          <p>Room size: 53 Sqm. <br> Bedding: 1 King / 1 King 1 Single</p>
          <p>Exquisite 2 clusters of 4 villas each set in a separate private area with direct access
            to a cross shaped shared outrdoor pool.</p>
            <hr>
          </td>
      </tr>
      <tr>
        <td>
          <div class="center">
            <div id="space"><img src="img/s4.jpg" height="200" width="300"></div>
          </div>
        </td>
        <td>
          <h3>Ocean Pool Villa</h3><br>
        <p>Room size: 53 Sqm. <br> Bedding: 1 King plus 1 Single /2 Queens</p>
        <p>Set within the tropical garden compound with an outdoor
          private pool (5M X 2M) nearby a private courtyard.
          Separated bathroom comes with oversize bathtub and toilet. </p>
          <hr>
        </td>
      </tr>
      <tr>
        <td>
          <div class="center">
            <div id="space"><img src="img/s5.jpg" height="200" width="300"></div>
          </div>
        </td>
        <td><h3>Garden Pool Villa</h3><br>
        <p>Room size: 65 Sqm. <br> Bedding: 1 King/1 King plus 1 Single</p>
        <p>Located beach front area for spectacular ocean view equipped
          with gorgeous out-door private pool (6M X 2.3M).  Separated bathroom
          comes with oversize bathtub, standing shower and toilet.</p>
          <hr>
        </td>
      </tr>

    </table>
  </div>
    <?php bottombar(); ?>

</body>

</html>
