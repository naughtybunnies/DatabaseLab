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


  <div id="content">
    <table class="fullwidth" id="hometable">
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

  <table id="bar">
    <!--แถบรองสุดท้าย-->
    <tr>
      <td></td>
    </tr>
    <!--เว้นช่องข้างบน-->

    <tr>
      <td>
        <h1>Database system</h1></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Tonny</td>
    </tr>
    <tr>
      <td>Kateiiz</td>
    </tr>
    <tr>
      <td>Tongkey</td>
    </tr>
    <tr>
      <td>Wari</td>
    </tr>
    <tr>
      <td></td>
    </tr>

    <tr>
      <td></td>
    </tr>
    <!--เว้นช่องข้างล่าง-->
  </table>

  <table id="lastbar">
    <!--แถบสุดท้าย-->
    <tr>
      <td>
        <div class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet felis a eleifend varius. Quisque sodales sem eleifend purus dignissim convallis. Nulla ut est sit amet ligula sodales blandit.<br> Nullam nec erat pulvinar nulla iaculis
          tincidunt. Mauris bibendum congue ornare. Pellentesque quis massa tempus tortor facilisis vestibulum. Phasellus dictum eleifend tincidunt. Fusce congue dui et magna consequat,<br> at accumsan nisi consequat. Fusce ac nisl sem. Duis sed elit
          justo. Sed rhoncus fringilla lacinia. Integer posuere metus eu nibh feugiat,<br> semper efficitur diam luctus. Proin pellentesque dapibus tortor, ac condimentum tortor dictum suscipit.</div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="center">Powered by M150</div>
      </td>
    </tr>

  </table>

</body>

</html>
