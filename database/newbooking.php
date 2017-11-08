<?php
  require_once('helperfunctions.php');
  require_once('connect.php');
  session_start();
  if(!isset($_SESSION['myarray'])){
    $_SESSION['myarray'] = array();
    $_SESSION['adultcount']  = $_POST['adult'];
    $_SESSION['childcount'] = $_POST['children'];
    $_SESSION['fromdate'] = $_POST['datein'];
    $_SESSION['todate'] = $_POST['dateout'];
    $_SESSION['curadultcount']  = 0;
    $_SESSION['curchildcount'] = 0;
    $_SESSION['cart'] = 1;
  }
  $_SESSION['curadultcount']  = 0;
  $_SESSION['curchildcount'] = 0;
  foreach ($_SESSION['myarray'] as $key => $value) {
    $q = "SELECT * FROM roomtype WHERE idroomtype=".$value.";";
    $result = $mysqli->query($q);
    $row = $result->fetch_array();
    $_SESSION['curadultcount']+= $row['numguest'];
    $_SESSION['curchildcount']+= $row['numchild'];
  }
  $leftadult = $_SESSION['adultcount'] - $_SESSION['curadultcount'];
  if($leftadult<0){
    $leftadult=0;
  }
  $leftchild = $_SESSION['childcount'] - $_SESSION['curchildcount'];
  if($leftchild<0){
    $leftchild=0;
  }

  // datefrom = 2017-11-23
  // dateto = 2017-11-25
  // $q = select * from booking where (datefrom between '2017-11-23' and '2017-11-24') or (dateto between '2017-11-24' and '2017-11-25');
  // select idroom,roomtype_idroomtype from room where idroom not in(select room_idroom from booking where (datefrom between '2017-11-23' and '2017-11-24') or (dateto between '2017-11-24' and '2017-11-25'));
  $q = "SELECT * FROM roomtype;";
  $result = $mysqli->query($q);
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


  <div id="viewpic">
    <img src="img/home2.jpg" height="600" width="100%">
  </div>

  <div id="nosidebarpage">
    <table id="bookingtable" border=1>
      <tr>
        <td colspan="2">
          <h3>BOOKING FROM:<?php echo $_SESSION['fromdate']; ?> TO: <?php echo $_SESSION['todate']; ?></h3>
          <h3>Remaining adult without a room = <?php echo $leftadult;?> children = <?php echo $leftchild;?> </h3>
        </td>
      </tr>
      <td>
        <h2>Available Rooms</h2>
        <table border=1 class="roomtable">
          <tr>
            <th>room pic</th>
            <th>room name</th>
            <th>Size</th>
            <th>adult</th>
            <th>children</th>
            <th>select</th>
            <th>price</th>
          </tr>
          <?php
               while ($row=$result->fetch_array()) {
                   echo "<tr>";
                   echo '<td><img src="img/'.$row['pic'].'.jpg" height="120" width="180"></td>
                <td>'.$row['name'].'</td>
                <td>'.$row['size'].'<br>sq.m.</td>
                <td>'.$row['numguest'].'</td>
                <td>'.$row['numchild'].'</td>
                <td><a href="addarray.php?idroomtype='.$row['idroomtype'].'"><img src="img/shop.png" width="40" height="40"/></a></td>
                <td>'.$row['price'].'</td>';
                   echo "</tr>";
               }
             ?>
        </table>
      </td>
      <td class="aligntop">
        <h2>Selected Rooms</h2>
        <table border=1 class="roomtable">
          <tr>
            <th>no</th>
            <th>roomname</th>
            <th>adult</th>
            <th>children</th>
            <th>price</th>
            <th>remove</th>
          </tr>
          <?php
            foreach ($_SESSION['myarray'] as $key => $value) {
              // $value = idroomtype
              $q = "SELECT * FROM roomtype WHERE idroomtype=".$value.";";
              $result = $mysqli->query($q);
              $row = $result->fetch_array();
              echo "<tr>
                <td>".($key+1)."</td>
                <td>".$row['name']."</td>
                <td>".$row['numguest']."</td>
                <td>".$row['numchild']."</td>
                <td>".$row['price']."</td>
                <td><a href='unset.php?key=".$key."'><img src='img/remove.png' width='40' height='40'/></a></td>
              </tr>";
            }
          ?>


        </table>
        <br>
        <?php
        if ($leftadult==0 && $leftchild==0) {
          if (isset($_SESSION['user'])) {
            // logged in
            echo '<a href="addguest.php">CLICK HERE TO CONTINUE</a>';
          }else{
            // not logged in
            echo '<a href="bookinglogin.php">CLICK HERE TO CONTINUE</a>';
          }
        }else{
          echo '<a href=""">NOT ENOUGH ROOM</a>';
        }
         ?>

        <br>
        <a href="destroy.php">RESTART</a>
      </td>
    </table>


</div>



  <div id="bottomest">
<?php bottombar(); ?>
  </div>


  </body>

  </html>
