<?php
  require_once('helperfunctions.php');
  require_once('connect.php');
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

<?php customer_sidebar(); ?>

<div id="page">
        <div class="center">
          <h1>Request Form</h1>
        </div>
        <div id="formcontainer">
        <form action="viewrequest.php" method="post">
<?php
  $q="SELECT iduser , name , surname FROM user ;";
  $result=$mysqli->query($q);
  $row=$result->fetch_array()
  ?>
        <li><label>UserID : </label><?=$row['iduser']?></li><br></br>
        <li><label>Name : </label><?=$row['name']?> <?=$row['surname']?></li><br></br>
        <li><label>Date : </label>get from session</li><br></br>
        <li><label>Time : </label>get from session</li><br></br>
        <li><label>Description : </label><br>
        <textarea name="description"></textarea></br></li><br></br>
            <div class="center">
              <br></br><input type="submit" name="submit" value="Send request">
              <input type="reset" value="Cancel">
            </div>
        </form>
      </div>
    </div>

        <img src="img/view1.jpg" height="600px" width="100%">



  <!-- edit here -->
  <?php bottombar(); ?>

  </body>

  </html>
