<?php
  require_once('helperfunctions.php');
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>
  <!-- edit here -->
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

  <!-- edit here -->
  <?php bottombar(); ?>

</body>

</html>
