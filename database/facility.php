<?php
  session_start();
  require_once('helperfunctions.php');
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
      <td colspan="2"><img src="img/home2.jpg" height="600px" width="100%"></td>
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
          <h2 align="center">Pool side bar</h2>
          <p align="center">An outdoor poolside bar</p>
          <p align="center">Guests can enjoy soft drinks, fruit juices, cocktails or light-meals<br>
            and snacks while unwind at our outdoor swimming pool.<br><b>Seating Capacity:</b> 20<br>
            <b>Service Hours:</b> 09:00 hrs - 20:00 hrs</p>
            <hr>
          </td>
      </tr>
      <tr>
        <td>
          <div class="center">
            <div id="space"><img src="img/home.jpg" height="200" width="300"></div>
          </div>
        </td>
        <td><h2 align="center">The roof</h2>
        <p align="center">An outdoor rooftop chic bar</p>
        <p align="center">Our trendy rooftop bar set on the rooftop spacious terrace of <br>
          the Lobster Bar where guests can enjoy appetizers, cocktails or great wines by
          the breezing sea under the shade of large overhead tent before or after their dining experience.
        <br><b>Seating Capacity:</b> 30<br>
        <b>Service Hours:</b> 06:00 hrs. - 23:00 hrs.</p>
          <hr></td>
      </tr>
      <tr>
        <td>
          <div class="center">
            <div id="space"><img src="img/dining.jpg" height="200" width="300"></div>
          </div>
        </td>
        <td><h2 align="center">Capriccio</h2>
        <p align="center">International & Thai dining outlet BY-THE-SEA</p>
        <p align="center">The resorts main casual in-door dining outlet serving authentic
           International & Thai delicacies where guests can enjoy breakfast,
           lunch or dinner by the sea.
          <br><b>Seating Capacity:</b> 80 - 100<br>
          <b>Service Hours:</b> 06:00 hrs. - 23:00 hrs.</p>
          <hr></td>
      </tr>
      <tr>
        <td>
          <div class="center">
            <div id="space"><img src="img/fit.jpg" height="200" width="300"></div>
          </div>
        </td>
        <td><h2 align="center">Fitness</h2>
        <p align="center">Wonderful brand-new fitness room</p>
        <p align="center"> We welcome you to our brand-new fitness which is located beside the pool.
          The room is about 60 square meters and available for all our guests.
          <br><b>Seating Capacity:</b> 30-40<br>
          <b>Service Hours:</b> 09:00 hrs. - 21:00 hrs.</p>
          <hr></td>
      </tr>
      <tr>
        <td>
          <div class="center">
            <div id="space"><img src="img/spa.jpg" height="200" width="300"></div>
          </div>
        </td>
        <td><h2 align="center">Spa & Massage</h2>
        <p align="center">Traditional Thai Massage</p>
        <p align="center"> Our traditional Thai Massage is both deeply refreshing and extremely revitalizing.
          Performed with slow movements and covers entire body and offers the deepest possible relaxation.
          <br><b>Seating Capacity:</b> 30-40<br>
          <b>Service Hours:</b> 09:00 hrs. - 20:00 hrs.</p>
          <hr></td>
      </tr>
    </table>
  </div>
  <?php bottombar(); ?>
  <?php beforelast(); ?>


</body>

</html>
