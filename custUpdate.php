<!DOCTYPE HTML>

<?php

include('connection.php');



$sql = "SELECT * FROM customer ";
$res = mysqli_query($link, $sql);


foreach($res as $row) { 
$custId=$row['custId'];
$custType=$row['custType'];
$custName=$row['custName'];
$custMat=$row['custMat'];
$custAdd=$row['custAdd'];
$custEmail=$row['custEmail'];
$custTel=$row['custTel'];

}

if (isset ($_POST['submit'])){
  $update="UPDATE customer SET custId='".$_POST[custId]."', custType='".$_POST[custType]."',
   custName='".$_POST[custName]."', custMat='".$_POST[custMat]."', 
  custAdd='".$_POST[custAdd]."', custEmail='".$_POST[custEmail]."', custTel='".$_POST[custTel]."' WHERE custId='$_REQUEST[id]';";
  
  if(mysqli_query($link, $update)){
  ?><html><script>
        alert("Records update successfully.");
    window.location.href="CUSTOMER.php";
      </script></html><?php
  } else{
  ?><html><script>
        alert("<?php echo 'ERROR: Could not able to execute $sql. ' . mysqli_error($link)?>");
    window.location.href="CUSTOMER.php";
      </script></html><?php
  }
}

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
          <h1><a href="CUSTOMER.php">PARCEL<span class="logo_colour">MANAGEMENT</span></a></h1>
          
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
        <h1>UPDATE</h1>
        
        <form method="post" oninput="x.value=parseInt(a.value)+(parseInt(a.value)*(parseInt(b.value)/100))">
          <div class="form_settings">
          	
         
            </p>
            <p><span>CUSTOMER ID</span><input type="text" name="custId" value="<?php echo $custId; ?>" /></p>

             <p><span>TYPE</span><select name="custType" />
                <option value="STAFF">STAFF</option>
                <option value="STUDENT">STUDENT</option>
               </select></p>
            <p><span>NAME</span><input type="text" name="custName" value="<?php echo $custName; ?>" /></p>
            <p><span>MATRIC NO</span><input type="text" name="custMat" value="<?php echo $custMat; ?>" /></p>
            <p><span>ADDRESS</span><input type="text" name="custAdd" value="<?php echo $custAdd; ?>" /></p>
            <p><span>EMAIL</span><input type="text" name="custEmail" value="<?php echo $custEmail; ?>" /></p>
             <p><span>TEL.NO</span><input type="text" name="custTel" value="<?php echo $custTel; ?>" /></p>
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="update" /></p>
          </div>
        </form>
        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
     
  </div>
</body>
</html>
