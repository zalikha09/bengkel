<!DOCTYPE HTML>

<?php

include('connection.php');
//include('sessioncheck.php');

$sql = "SELECT * FROM brand";
$res = mysqli_query($link, $sql);


?>

<html>



<head>
  <title>simplestyle_4 - contact us</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>



<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="VIEW1.php">PARCEL<span class="logo_colour">MANAGEMENT</span></a></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          
          <li><a href="">DASHBORD</a></li>
          <li><a href="CUSTOMER.php">CUSTOMER</a></li>
          <li><a href="PARCEL.php">PARCEL</a></li>
          <li><a href="">STAFF</a></li>
          <li><a href="">SIGNUP</a></li>
          <li><a href="">LOGOUT</a></li>
          
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content">
        <!-- insert the page content here -->
        <h1>PARCEL</h1>
        
        <form action="additem.php" method="post" oninput="x.value=parseInt(a.value)+(parseInt(a.value)*(parseInt(b.value)/100))" >
          <div class="form_settings">
            <p><span>CUSTOMER</span>
            <select name="brandID">
            <?php foreach($res as $row) { ?>
          <option value="TEST"/></option>
          <script src="item.js"></script>
            <?php } ?>

      </select>

            <p><span>PARCEL ID</span><input type="text" name="itemID" value="" /></p>
            <p><span>TRACKING NO</span><input type="text" name="itemName" value="" /></p>
          
           
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="submit" for="a b"/></p>
          </div>
        </form>
        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
     
  </div>
</body>
</html>
