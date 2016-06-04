<!doctype html>
<html><head>
<meta charset="UTF-8">
<title>Week04</title>
<link rel="stylesheet" type="text/css" href="style.php">
</head>


<body>

<p><center>My family</center></p>
<?php
require('login.php');


	getALL();
	
	function getALL() {
		global $gn;
		global $marriage;
		global $fn;
		global $id;
		global $re;
		global $gen;
		echo "<div class =\"tree\">";
		$size = (count($id)-1);
		for ($i =$size;$i >= 0;$i--) {
			if(empty($gen)){
				break;
			}
			
			if($gen[$i] == max($gen))
			{
				
				echo "<ul><li><a href =\"edit.php?data=".$id[$i]."\">".$id[$i]." ".$gn[$i]." ".$fn[$i]."</a>";
				if(!empty($re[$i])){
					$temp= explode(" ",$re[$i]);
					echo "<ul>";
					for ($x = 0; $x < count($temp); $x++) {
					
			    		getChild($temp[$x]);
					}
					echo "</ul>";
				}
				
				un($i);
				echo "</li></ul>";
			}
		}
	}
	

	mysqli_stmt_close($statement);
	mysqli_close($con);
	function un($var){
		
		global $gn;
		global $marriage;
		global $fn;
		global $id;
		global $re;
		global $gen;
	unset($gen[$var]);
	unset($id[$var]);
	unset($gn[$var]);
	unset($fn[$var]);
	unset($re[$var]);
	unset($marriage[$var]);
	unset($gen[$var]);
	}
	
	
	function getChild($t){
		global $gn;
		global $marriage;
		global $fn;
		global $id;
		global $re;
		global $size;
		for ($i = 0; $i <= $size; $i++) {
			if($id[$i] == $t)
			{
				echo "<li><a href =\"edit.php?data=".$id[$i]."\">".$id[$i]." ".$gn[$i].$fn[$i]."</a>";
				if(!empty($re[$i])){
					while ($re[$i]) {
						echo "<ul>";
						getChild($re[$i]);
					}
					
				}
				else {
					echo "</li>";
				}
				
				un($i);
			   return;
			}
		}
	}
		echo "</div>";

?>
<?php
	require('login.php');
	if(isset($_GET["data"]))
	{
		$data = $_GET["data"];
	}
	
?>

<div class "form">
<p> Add a new person</p>
<form action="insert.php" method = "post">
<input type = "hidden" name = "person_id" value = "">
  First name:<br>
  <input type="text" name="firstname" value="">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="">
  <br>
  Any children belongs to this person?:<br>
  <input type="text" name="relationship" value = "">
  <br>
  Generation:<br>
  <input type="text" name="generation" value= "">
  <br>
  Marriage (provide Marriage ID please):<br>
  <input type="text" name="marriage" value= "">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</div>
</body>
</html>