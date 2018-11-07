<!DOCTYPE HTML>

<?php

include('connection.php');
//include('sessioncheck.php');

$sql = "SELECT * FROM customer ";
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
        <h1>CUSTOMER</h1>
        
        <form action="addcustomer.php" method="post" oninput="x.value=parseInt(a.value)+(parseInt(a.value)*(parseInt(b.value)/100))" >
          <div class="form_settings">

            <p><span>CUSTOMER ID</span><input type="text" name="custId" value="" /></p>
            <p><span>TYPE</span><select name="custType" />
                <option value="STAFF">STAFF</option>
                <option value="STUDENT">STUDENT</option>
               </select></p>

            <p><span>NAME</span><input type="text" name="custName" value="" /></p>
            <p><span>MATRIC. NO</span><input type="text" name="custMat" value="" /></p>
            <p><span>ADDRESS</span><input type="text" name="custAdd" value="" /></p>
            <p><span>EMAIL</span><input type="text" name="custEmail" value="" /></p>
            <p><span>TEL. NO</span><input type="text" name="custTel" value="" /></p>


          
           
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="submit" for="a b"/></p>
          </div>
        </form>
        
      </div>
    </div>

<center><table>
  <tr>
    <th>CUSTOMER ID</th>
    <th>TYPE</th>
    <th>NAME</th>
    <th>MATRIC NO</th>
    <th>ADDRESS</th>
    <th>EMAIL</th>
    <th>TEL.NO</th>
    
    <th>MANAGE</th>
  </tr>
  <?php foreach($res as $row){ ?>
  <tr>
    <td><?php echo $row['custId']; ?></td>
    <td><?php echo $row['custType']; ?></td>
    <td><?php echo $row['custName']; ?></td>
    <td><?php echo $row['custMat']; ?></td>
    <td><?php echo $row['custAdd']; ?></td>
    <td><?php echo $row['custEmail']; ?></td>
    <td><?php echo $row['custTel']; ?></td>
    
    <td><a href="custUpdate.php?id=<?php echo $row['custId']; ?>">UPDATE</a> | <a href="deleteB.php?id=<?php echo $row['custId']; ?>">DELETE</a></td>
  </tr>
    <?php } ?>

</table></center>

    <div id="content_footer"></div>
    <div id="footer">
     
  </div>
</body>
</html>
