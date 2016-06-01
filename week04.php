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

	$c = (count($id)-1);
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
					echo "<li><a href ='edit.php?data=".$c."'>".$gn[$c]." 1 ".$fn[$c]."</a>";
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
		echo "<li><a href ='#'>".$gn[$c]." 4 ".$fn[$c]."</a>";
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
		echo "<li><a href ='#'>".$gn[$t]." 2 ".$fn[$t]."</a>";
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

?>

</body>
</html>