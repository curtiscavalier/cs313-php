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
				un($i);
			echo "</li></ul>";
			
			
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
	/*$c = (count($id)-1);
	$count = 0;
	$final = 0;

	echo "<div class ='tree'><ul>";
	
	while($c > 0 ){
		if(empty($gn[$c])){
			break;
		}
	
		if(($c-1)!=0){
			if($gen[$c] == $gen[$c-1]){
				while($gen[$c] == $gen[$c-1]){
					echo "<li><a href ='edit.php?data=".$c."'>".($c+1)." ".$gn[$c].$fn[$c]."</a>";
					if(!empty($re[$c])){
						$temp= explode(" ",$re[$c]);
						echo "<ul>";
						for ($x = 0; $x < count($temp); $x++) {
	    					getChild($x);
						}
					}
					un($c);
					$c--;
					echo "</li></ul>";
					if($c == -1){
						break;
					}
				}
			}
		}
	if($c == -1){
			break;
	}
	if(empty($gn[$c])){
		break;
	}
			echo "<li><a href ='edit.php?data=".$c."'>".($c+1)." ".$gn[$c].$fn[$c]."</a>";
		if(!empty($re[$c])){
			$temp= explode(" ",$re[$c]);
			echo "<ul>";
			for ($x = 0; $x < count($temp); $x++) {
		   		getChild($x);
			}
		}
		echo "</li></ul>";
		un($c);
		$c--;
	}
	function getChild($t){
		global $gn;
		global $marriage;
		global $fn;
		global $id;
		global $re;
		global $c;
		if(empty($gn[$t])){
			return;
		}
			echo "<li><a href ='edit.php?data=".$t."'>".($t+1)." ".$gn[$t].$fn[$t]."</a>";
		if(!empty($re[$t])){
			while ($re[$t]) {
				echo "<ul>";
				getChild($re[$t]);
			}
			echo "</li></ul>";
		}
		un($t);
	
		
	}
	function un($var){
		global $gn;
		global $marriage;
		global $fn;
		global $id;
		global $re;
	unset($gen[$var]);
	unset($id[$var]);
	unset($gn[$var]);
	unset($fn[$var]);
	unset($re[$var]);
	unset($marriage[$var]);
	}	
	echo "</div>";
*/
	}
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