<?php
$con=mysqli_connect("http://php-curtiscavalier.rhcloud.com/","adminSvJPw4q","278ZDqaQnCMU");
	mysqli_select_db($con, "skills");
	if(!$con){
	die('Could not connect: ' .mysql_error());
	}

?>