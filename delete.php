<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST["person_id"]))
	{
		$data = $_POST["person_id"];
	}
	
	$con=mysqli_connect("www.secretvoice1.com","secretvo_11","c12345");
		mysqli_select_db($con, "secretvo_11");
		if(!$con){
		die('Could not connect: ' .mysql_error());
		}
		$sql = "DELETE FROM family WHERE person_id = ".$data;
		if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
</body>
</html>