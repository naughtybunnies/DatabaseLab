<?php
  require_once('connect.php');
  
 ?>

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

<<<<<<< HEAD
  <div id="boxnewuser">
    <h1>&nbsp;&nbsp;New user</h1><br>
    <div class="innercenterdiv">
=======
  <table class="fullwidth" id="hometable">
    <div id="boxnewuser">
>>>>>>> f36ec32cbec454af7870c5ee969b78a15937e914
      <!--กล่อง register-->
      <form action="registeraction.php" method="POST">
        <br>
        <table>
          <tr>
            <td>Email</td>
            <td><input type="text" placeholder="example@example.com" name="email"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td>Firstname</td>
            <td><input type="text" name="fname"></td>
          </tr>
          <tr>
            <td>Lastname</td>
            <td><input type="text" name="lname"></td>
          </tr>
          <tr>
            <br>
            <td colspan="2">
              <div class="innercenterdiv"><br><input type="submit" value="Register" class="blackbutton" /></div>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>

  <div id="boxolduser" method="POST">
    <!--กล่อง Login-->
    <h1>&nbsp;&nbsp;Existing user</h1><br>
    <div class="innercenterdiv">
      <!--กล่อง register-->
      <form action="registeraction.php" method="POST">
        <br>
        <table>
          <tr>
            <td>Email</td>
            <td><input type="text" placeholder="example@example.com" name="email"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="innercenterdiv"><br><input type="submit" value="Register" class="blackbutton" /></div>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>

<<<<<<< HEAD
  <tr>
    <td><img src="img/view1.jpg" height="600" width="100%"></td>
  </tr>
  <!--รูปวิวบนสุด-->
=======
    <tr>
      <td colspan="2"><img src="img/view1.jpg" height="600px" width="100%"></td>
    </tr>
    <!--รูปวิวบนสุด-->
  </table>
>>>>>>> f36ec32cbec454af7870c5ee969b78a15937e914

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
