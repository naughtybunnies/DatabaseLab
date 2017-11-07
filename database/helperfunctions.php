<?php
  function menubar(){
    echo '<div id="logo"><a href="home.php">CU@MyPlace</a></div>
    <ul id="menu">
      <li class="topbartext"><a href="room.php">Room</a></li>
      <li class="topbartext"><a href="facility.php">Facility</a></li>
      <li class="topbartext"><a href="login.php">Log In</a></li>
    </ul>';
  }

  function bottombar(){
    echo '
    <div id="bar">
    <table><!--แถบรองสุดท้าย-->
      <tr>
        <th>CU@MyPlace : ITS322 Database System section 1</th>
        <th>CONTACT US</th>
        <th>SOCIAL MEDIA</th>
      </tr>

      <tr>
        <td>&nbsp;- Kriddanai Roong-uthai 5822780334</td>
        <td>17 Moo3 Chaweng Beach, Bophud Koh Samui Suratthani Thailand 84320</td>

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

    <table id="lastbar">
      <!--แถบสุดท้าย-->
      <tr>
        <td>
          <div class="centerlastbar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet felis a eleifend varius. Quisque sodales sem eleifend purus dignissim convallis. Nulla ut est sit amet ligula sodales blandit. Nullam nec erat pulvinar nulla iaculist incidunt. Mauris bibendum congue ornare. Pellentesque quis massa tempus vestibulum. Phasellus dictum eleifend tincidunt. Fusce congue dui et magna consequat, at accumsan nisi consequat. Fusce ac nisl sem. Duis sed elit justo. Sed rhoncus fringilla lacinia. </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="centerlastbar">Powered by M150</div>
        </td>
      </tr>

    </table>';
  }
  function menubar_logout(){
    echo '<div id="logo"><a href="home.php">CU@MyPlace</a></div>
    <ul id="menu">
      <li class="topbartext"><a href="customer.php">Dashboard</a></li>
      <li class="topbartext"><a href="myprofile.php">My profile</a></li>
      <li class="topbartext"><a href="room.php">Room</a></li>
      <li class="topbartext"><a href="facility.php">Facility</a></li>
      <li class="topbartext"><a href="logout.php">Log Out</a></li>
    </ul>';
  }
  function customer_sidebar(){
    echo '<div id="listcus">
      <ul>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="request.php">Request</a></li>
        <li><a href="mytransaction.php">Transactions</a></li>
        <li><a href="#">something</a></li>
      </ul>
    </div>';
  }
  function myprofile_sidebar(){
    echo '<div id="listmyprofile">
      <ul>
        <li><a href="#">Edit profile</a></li>
        <li><a href="#">Change password</a></li>
        <li><a href="mytransaction.php">My transactions</a></li>
        <li><a href="#">something</a></li>
      </ul>
    </div>';
  }

 ?>
