<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>update</title>
</head>

<body>
<?php
$con=mysqli_connect("www.secretvoice1.com","secretvo_11","c12345");
	mysqli_select_db($con, "secretvo_11");
	if(!$con){
	die('Could not connect: ' .mysql_error());
	}
	
	$gn = $_POST["firstname"];
	$fn = $_POST["lastname"];
	$re = $_POST["relationship"];
	$marriage = $_POST["marriage"];
	$gen = $_POST["generation"];
	$person = $_POST["person_id"];
	$sql = "UPDATE family SET given_name = '".$fn."' , family_name = '".$fn."', 
	generation = '".$gen."', 
	relation = '".$re.
	"', marriage_id = '".$marriage."'
	 WHERE person_id = '".$person."'";
	 echo $sql;
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
/*	$statement = mysqli_prepare($con, "UPDATE family SET");
	
	if ( !$statement ) {
  		die('mysqli error: '.mysqli_error($con));
	}
	
	mysqli_stmt_bind_param($statement, "sss", $name, $password, $email);
	mysqli_stmt_execute($statement);
	mysqli_stmt_close($statement);*/
?>
</body>
</html>