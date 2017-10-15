<html>
<head>
<title>CU@MyPlace</title>
<link rel="stylesheet" href="default.css">
</head>

<body>

    <div id="menubar">     <!--แถบบน-->
      <a href="home.php">CU@MyPlace</a>
      <ul>
          <li><a href="room.php">Room</a></li>
          <li><a href="facility.php">Facility</a></li>
          <li><a href="#">Special Offer</a></li>
          <li><a href="#">Review</a></li>
      </ul>
    </div>

    <table>
      <div id="box"> <!--booking-->
        <form>

            &nbsp;&nbsp;&nbsp;&nbsp;Check availabity<br><br>
            <div id="center">
              Check in :&nbsp;&nbsp;<input type="date" placeholder="11/10/2560"/><br><br>
              Check out:&nbsp;&nbsp;<input type="date" placeholder="14/10/2560"/><br><br>
            </div>

            &nbsp;&nbsp;&nbsp;&nbsp;Property<br><br>
            <div id="center">
              Room:
              <select>
                <option>-</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>&nbsp;&nbsp;&nbsp;
              Adult:<select>
                <option>-</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>&nbsp;&nbsp;&nbsp;
              Children:<select>
                <option>-</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select><br><br>
            </div>

            <div id="center"> <!--ปุ่ม-->
              <input type="submit" value="Check Availability"/>
            </div>

        </form>
      <tr><td><img src="img/view1.jpg" height="600" width="200%"></td></tr> <!--รูปวิวบนสุด-->
      </div>

      <tr>     <!--รูปห้อง-->
        <td><img src="img/room1.jpg" height="400" width="100%"></td>
        <td><img src="img/room2.jpg" height="400" width="100%"></td>
      </tr>
    </table>
    <table id="bar">     <!--แถบรองสุดท้าย-->
      <tr><td></td></tr>     <!--เว้นช่องข้างบน-->

      <tr><td><h1>Database system</h1></td> <td></td> <td></td> <td></td> </tr>
      <tr><td>Tonny</td></tr>
      <tr><td>Kateiiz</td></tr>
      <tr><td>Tongkey</td></tr>
      <tr><td>Wari</td></tr>
      <tr><td></td></tr>

      <tr><td></td></tr>     <!--เว้นช่องข้างล่าง-->
    </table>

    <table id="lastbar"> <!--แถบสุดท้าย-->
      <tr><td><div id="center">adsasdasdasddasdsadasdadasdadasdasdsadadadasd</div></td></tr>
      <tr><td><div id="center">Powered by M150</div></td></tr>

    </table>

</body>
