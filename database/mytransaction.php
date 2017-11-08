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
    <?php menubar_logout(); ?>
  </div>
  <?php customer_sidebar(); ?>

  <div id="page">
    <div id="mypayment">
      <p><b>My payment</b></p>
    <table>
      <tr><th>list</th><th>price</th><th>date</th></tr>
      <tr><td>Oichi</td><td>1000000</td><td>24-5-2017</td></tr>
      <tr><td>Oichi</td><td>1000000</td><td>24-5-2017</td></tr>
      <tr><td>Oichi</td><td>1000000</td><td>24-5-2017</td></tr>
      <tr><td>Oichi</td><td>1000000</td><td>24-5-2017</td></tr>
      <tr><td>Oichi</td><td>1000000</td><td>24-5-2017</td></tr>
    </table>
    </div>
  </div>

  <td><img src="img/home3.jpg" height="600" width="100%"></td>

  <?php bottombar(); ?>

</body>
</html>
