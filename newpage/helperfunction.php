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
