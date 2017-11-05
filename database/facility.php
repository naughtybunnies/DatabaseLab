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
  <table class="fullwidth" id="hometable">
    <tr>
      <td colspan="2"><img src="img/view1.jpg" height="600px" width="100%"></td>
    </tr>
    <!--รูปวิวบนสุด-->
  </table>
  <div id="info">
    <h1>&nbsp;&nbsp;Hotel Facilities</h1><hr />
    <table>
      <tr>
        <td>
          <div class="center">
            <div id="space"><img src="img/pool.jpg" height="200" width="300"></div>
          </div>
        </td>
        <td>
          <h3>Pool side bar</h3>
          <p>An outdoor poolside bar</p>
          <p>Guests can enjoy soft drinks, fruit juices, cocktails or light-meals
            and snacks while unwind at our outdoor swimming pool.
Seating Capacity: 20
Service Hours: 09:00 hrs - 20:00 hrs</p>
            <hr>
          </td>
      </tr>
      <tr>
        <td>
          <div class="center">
            <div id="space"><img src="img/view1.jpg" height="200" width="300"></div>
          </div>
        </td>
        <td>Pool<br>something</td>
      </tr>
      <tr>
        <td>
          <div class="center">
            <div id="space"><img src="img/view1.jpg" height="200" width="300"></div>
          </div>
        </td>
        <td>Pool<br>something</td>
      </tr>
    </table>
  </div>
  <?php bottombar(); ?>

</body>

</html>
