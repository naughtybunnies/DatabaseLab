<?php
  function topbar(){
    echo'
        <div id="topbar">
          <div id="logo">
            <a href="home.php" class="nodecorate">CU@MyPlace</a>
          </div>
          <ul id="topbarmenu">
            <li class="topbarelement"><a href="room.php">Room</a></li>
            <li class="topbarelement"><a href="facility.php">Facility</a></li>
            <li class="topbarelement"><a href="login.php">Log In</a></li>
          </ul>
        </div>';
  }

  function topbar_logout(){
    echo'
        <div id="topbar">
          <div id="logo">
            <a href="home.php" class="nodecorate">CU@MyPlace</a>
          </div>
          <ul id="topbarmenu">
            <li class="topbarelement"><a href="dashboard.php">Dashboard</a></li>
            <li class="topbarelement"><a href="myprofile.php">My Profile</a></li>
            <li class="topbarelement"><a href="room.php">Room</a></li>
            <li class="topbarelement"><a href="facility.php">Facility</a></li>
            <li class="topbarelement"><a href="logout.php">Log Out</a></li>
          </ul>
        </div>';
  }
  function dashboard_sidebar(){
    echo '<div id="dashboard_leftbar">
      <ul>
        <a href="booking.php"><li>Booking</li></a>
        <a href="request.php"><li>Request</li></a>
        <a href="mytransaction.php"><li>Transactions</li></a>
        <a href="#"><li>something</li></a>
      </ul>
    </div>';
  }

  function booking_sidebar(){
    echo '<div id="booking_leftbar">
      <ul>
        <a href="booking.php"><li>Booking</li></a>
        <a href="request.php"><li>Request</li></a>
        <a href="mytransaction.php"><li>Transactions</li></a>
        <a href="#"><li>something</li></a>
      </ul>
    </div>';
  }

  function request_sidebar(){
    echo '<div id="booking_leftbar">
      <ul>
        <a href="booking.php"><li>Booking</li></a>
        <a href="request.php"><li>Request</li></a>
        <a href="mytransaction.php"><li>Transactions</li></a>
        <a href="#"><li>something</li></a>
      </ul>
    </div>';
  }

  function room(){
    echo '
  <div id="room_outer_content">
    <div id="room_inner_content">
      <h1>&nbsp;&nbsp;Hotel Room</h1>
      <hr />
      <table>
        <tr>
          <td>
            <img src="img/s3.jpg" height="200" width="300">
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
            <img src="img/s4.jpg" height="200" width="300">
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
              <img src="img/s5.jpg" height="200" width="300">
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
  </div>';
}

  function footer(){
    echo '
    <div id="footer">
      <div id="beforebottombar">
        <table>
          <tr>
            <th>CU@MyPlace : ITS322 Database System section 1</th>
            <th>CONTACT US</th>
            <th>SOCIAL MEDIA</th>
          </tr>

          <tr>
            <td>&nbsp;- Kriddanai Roong-uthai 5822780334</td>
            <td align="center">17 Moo3 Chaweng Beach, Bophud Koh Samui <br>Suratthani Thailand 84320</td>

            <td><img src="img/fb.svg" height="35" width="35">CU@MyPlace</td>
            <td><img src="img/message.png" height="35" width="35">CU@MyPlace</td>
          </tr>

          <tr>
            <td colspan="2">&nbsp;- Prompat Tipphakdee 5822771317</td>
            <td><img src="img/twitter.png" height="35" width="35">CU@MyPlace</td>
            <td><img src="img/ig.png" height="35" width="35">CU@MyPlace</td>
          </tr>

          <tr>
            <td colspan="2">&nbsp;- Apiwat Thaiphakdee 5822770467</td>
            <td><img src="img/web.png" height="35" width="35">CU@MyPlace</td>
            <td><img src="img/LINE_icon01.png" height="35" width="35">CU@MyPlace</td></tr>

          <tr><td>&nbsp;- Wari Maroengsit 5822771333</td></tr>

          </table>
      </div>
      <div id="bottombar">
        <table>
          <tr><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet felis a eleifend varius. Quisque sodales sem eleifend purus dignissim convallis. Nulla ut est sit amet ligula sodales blandit. Nullam nec erat pulvinar nulla iaculist incidunt. Mauris bibendum congue ornare. Pellentesque quis massa tempus vestibulum. Phasellus dictum eleifend tincidunt. Fusce congue dui et magna consequat, at accumsan nisi consequat. Fusce ac nisl sem. Duis sed elit justo. Sed rhoncus fringilla lacinia.</td>
          </tr>

          <tr><td>Powered by M150</td></tr>
        </table>
      </div>
    </div>';

  }
 ?>
