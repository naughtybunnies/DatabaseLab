<?php
  require_once('helperfunction.php');
  require_once('connect.php');
  session_start();
  if(!isset($_SESSION['bookinguser'])){
    $_SESSION['bookinguser'] = array('datefrom' => $_POST['datein'], 'dateto'=> $_POST['dateout'], 'numadult'=>$_POST['adult'], 'numchildren'=>$_POST['children'],'total'=>0,'gtotal'=>0);
    $_SESSION['cart'] = array();
    $_SESSION['availableroom'] = array('1'=>'0','2'=>'0','3'=>'0');
    $_SESSION['selectedcount'] = array('1'=>'0','2'=>'0','3'=>'0');
    $_SESSION['price'] = array();
  }
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>

    <div class="container">
      <?php
      if (isset($_SESSION['userinfo'])) {
        //logged in
        topbar_logout();
      }else{
        topbar();
      }
       ?>
      <img src="img/home1.jpg" height="600" width="100%" id="tviewpic">

        <div class="tcontentbox">
          <h3>Booking Period=> From <?php echo $_SESSION['bookinguser']['datefrom']; ?> TO <?php echo $_SESSION['bookinguser']['dateto']; ?></h3>
          <h1>Available Room</h1>
          <table border=1>
            <tr>
             <th>Roomtype</th>
             <th>Picture</th>
             <th>Description</th>
             <th>Select</th>
           </tr>
           <?php
             $q = "CALL `availableroomtype`('".$_SESSION['bookinguser']['datefrom']."', '".$_SESSION['bookinguser']['dateto']."');";
             $result = $mysqli->query($q);
             if(!$result){
               echo "error";
             }else{
               if($result->num_rows != 0){
                 $_SESSION['availableroom'] = array('1'=>'0','2'=>'0','3'=>'0');
                 while($row=$result->fetch_array()){
                   $_SESSION['availableroom'][$row['idroomtype']] = $row['COUNT(*)'];
                     echo "<tr>
                       <td>".$row['name']."</td>
                       <td><img src='img/".$row['pic'].".jpg' width='300'></td>
                       <td>
                       Number of Double Bed : ".$row['numdbed']." bed(s)<br>
                       Number of Single Bed : ".$row['numsbed']." bed(s)<br>
                       Number of Bathroom : ".$row['numbath']." room(s)<br>
                       Number of Living Room : ".$row['numliving']." room(s)<br>
                       Room Size : ".$row['size']." sq.m.<br>
                       </td>";
                       if (($_SESSION['availableroom'][$row['idroomtype']]) > ($_SESSION['selectedcount'][$row['idroomtype']])) {
                         echo "<td><a href='addcart.php?idroomtype=".$row['idroomtype']."'>Select</a></td></tr>";
                       }else{
                         echo "<td>NO MORE ROOM";
                         // echo "<br>";
                         // echo $_SESSION['availableroom'][$row['idroomtype']].">".$_SESSION['selectedcount'][$row['idroomtype']];
                         echo "</td></tr>";
                       }
                   }
                   $mysqli->next_result();

               }else{
                 echo "<tr><td colspan='4'> NO ROOM AVAILABLE</td></tr>";
               }
             }
             // debug here
             // echo "availableroom = ";
             // print_r($_SESSION['availableroom']);
             // echo "<br> selectedroom =";
             // print_r($_SESSION['selectedcount']);
             // echo "<br>";
             // print_r($_SESSION['cart']);
            ?>

         </table>
         <h1>Selected Room</h1>
         <table border=1>
           <tr>
             <th>no</th>
             <th>Room type</th>
             <th>Price</th>
             <th>Remove</th>
           </tr>
           <?php
            if (!isset($_SESSION['cart']['0'])) {
              echo "<td colspan=4>EMPTY SELECTION</td>";
            }else{

              foreach ($_SESSION['cart'] as $key => $value) {
                $q = "SELECT * FROM roomtype WHERE idroomtype=".$value.";";
                $result = $mysqli->query($q);
                if (!$result) {
                  echo "error <br>";
                  echo "$mysqli->error";
                }else{
                  $row = $result->fetch_array();
                  echo "<tr>
                    <td>". ($key+1) ."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['price']."</td>
                    <td><a href='removecart.php?id=".$key."'><img src='img/remove.png' width='20' /></a></td>
                  </tr>";

                }

              }
            }

            ?>
            <tr>
              <?php
              if(isset($_SESSION['cart'][0])){
                echo '<td colspan="2"><a href="confirm.php">CONTINUE</a></td>';
              }else{
                echo '<td colspan="2">PLEASE SELECT SOME ROOM</td>';
              }

               ?>

              <td colspan="2"><a href="logout.php">RESTART</a></td>
            </tr>
         </table>

    </div>
  


  <?php footer(); ?>
</div>

  </body>

</html>
