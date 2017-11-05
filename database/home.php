<html>

<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>
  <div id="menubar">
    <div id="logo"><a href="home.php">CU@MyPlace</a></div>
    <ul id="menu">
      <li class="topbartext"><a href="room.php">Room</a></li>
      <li class="topbartext"><a href="facility.php">Facility</a></li>
      <li class="topbartext"><a href="review.php">Review</a></li>
      <li class="topbartext"><a href="login.php">Log In</a></li>
    </ul>
  </div>


  <div id="content">
    <table class="fullwidth">
      <tr>
        <td colspan="2">
          <img src="img/view1.jpg" height="600px" width="100%">
        </td>
      </tr>
      <tr>
        <td><img src="img/room1.jpg" height="400" width="100%"></td>
        <td><img src="img/room2.jpg" height="400" width="100%"></td>
      </tr>
    </table>
  </div>


  <div id="box">
    <!--booking-->
    <form action="login.php">
      <div id="formcontainer">
        &nbsp;&nbsp;&nbsp;&nbsp;Check availabity<br><br>
        <div class="center">
          Check in :&nbsp;&nbsp;<input type="date" placeholder="11/10/2560" /><br><br> Check out:&nbsp;&nbsp;<input type="date" placeholder="14/10/2560" /><br><br>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp;Property<br><br>
        <div class="center">
          Room:
          <select>
                <option>-</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>&nbsp;&nbsp;&nbsp; Adult:
          <select>
                <option>-</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>&nbsp;&nbsp;&nbsp; Children:
          <select>
                <option>-</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
        </div>
        <br>
        <div class="center">
          <!--ปุ่ม-->
          <input type="submit" value="Check Availability" />
        </div>

      </div>
    </form>
  </div>

  <table id="bar"><!--แถบรองสุดท้าย-->
    <tr><td><strong>CU@MyPlace : ITS322 Database System sec. 1</strong></td></tr>
    <tr><td>&nbsp;- Kriddanai Roong-uthai 5822780334</td></tr>
    <tr><td>&nbsp;- Prompat Tipphakdee 5822771317</td></tr>
    <tr><td>&nbsp;- Apiwat Thaiphakdee 5822770467</td></tr>
    <tr><td>&nbsp;- Wari Maroengsit 5822771333</td></tr>
    </table>

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

  </table>

</body>

</html>
