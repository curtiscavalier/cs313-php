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

echo "<div class ='tree'>";;
	$size = (count($id)-1);
	for ($i =$size;$i >= 0;$i--) {
		if(empty($gen)){
			break;
		}
		
		if($gen[$i] == max($gen))
		{
			if(!empty($marriage[$i])){
			echo "<ul><li><a href ='edit.php?data=".$id[$i]."'>".$id[$i]." ".$gn[$i]." ".$fn[$i]."</a>";
			}
			else {
				$data = $marriage[$i];
				require('getRow.php');
				echo "<ul><li><a href ='edit.php?data=".$id[$i]."'>".$id[$i]." ".$gn[$i]." ".$fn[$i]." married ".
				$profile["person_id"].$profile["given_name"]."</a>";
			}
			if(!empty($re[$i])){
				$temp= explode(" ",$re[$i]);
			
				for ($x = 0; $x < count($temp); $x++) {
		    		getChild($temp[$x]);
				}
				un($i);
			echo "</li></ul>";
			}
			if(!empty($marriage[$i])){
				$temp= explode(" ",$profile["re"]);
			
				for ($x = 0; $x < count($temp); $x++) {
		    		getChild($temp[$x]);
				}
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
				echo "<ul><li><a href ='edit.php?data=".$id[$i]."'>".$id[$i]." ".$gn[$i].$fn[$i]."</a></li>";
				if(!empty($re[$i])){
					while ($re[$i]) {
						getChild($re[$i]);
					}
					echo "</li></ul>";
				}
				echo "</ul>";
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