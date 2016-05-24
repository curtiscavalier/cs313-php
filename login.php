<?php
	$con=mysqli_connect("www.secretvoice1.com","secretvo_11","c12345");
	mysqli_select_db($con, "secretvo_11");
	if(!$con){
	die('Could not connect: ' .mysql_error());
	}
	else{
echo "hi";
}
?>