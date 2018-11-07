<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "bengkel");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

/*$check = "SELECT * FROM item";
$res = mysqli_query($link,$check);

foreach($res as $row){
	
	if($_POST['itemID']==$row['itemID']){
		echo "duplicate itemID";}
	else if($_POST['brandID']==$row['brandID']){
		echo "duplicate brandID";}
	else if($_POST['serialNO']==$row['serialNO']){
		echo "duplicate serialNO";}	
	else {}
}*/

 
 
// Escape user inputs for security
//$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
//$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
//$email = mysqli_real_escape_string($link, $_REQUEST['email']);
// attempt insert query execution
$sql = "INSERT INTO customer (custId, custType, custName, custMat, custAdd, custEmail, custTel, date) 
VALUES ('".$_POST[custId]."', '".$_POST[custType]."', '".$_POST[custName]."', UCASE('".$_POST[custMat]."'),  '".$_POST[custAdd]."', '".$_POST[custEmail]."', '".$_POST[custTel]."',  NOW())";

if(mysqli_query($link, $sql)){
	?><html><script>
        alert("Records added successfully.");
		window.location.href="CUSTOMER.php";
      </script></html><?php
} else{
	?><html><script>
        alert("<?php echo 'ERROR: Could not able to execute $sql. ' . mysqli_error($link)?>");
		window.location.href="CUSTOMER.php";
      </script></html><?php
}
 
// close connection
mysqli_close($link);
?>