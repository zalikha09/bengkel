<?php
include_once 'connection.php';

$sql = "DELETE FROM customer WHERE custId='$_REQUEST[id]'";
if(!mysqli_query($link,$sql))
{
	die('Could not connect: '.mysqli_connect_error());
}
else
{
	header('Location: CUSTOMER.php');
	//ysql_close($conn);
}
?>