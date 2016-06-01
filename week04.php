<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Week04</title>
<link rel="stylesheet" type="text/css" href="style.php">
</head>
<p>My family</p>
<?php
require('login.php');

	$c = (count($id)-1);
	$count = 0;
	$final = 0;

	echo "<div class ='tree'><ul>";
	while($c > 0 ){
		if(($c-1)!=0){
			while($gen[$c] == $gen[$c-1]){
				echo "<li><a href ='#'>".$gn[$c]." 1 ".$fn[$c];
				if($re[$c]!=null){
					$temp= explode(" ",$re[$c]);
					$c--;
					echo $temp[0];
					echo "<ul>";
					for ($x = 0; $x < count($temp); $x++) {
	    				getChild($x);
					}
				}
				$c--;
				if($c == -1){
					break;
				}
			}
		}
	}
	echo "<div class ='tree'><ul>";
	function getChild($t){
		global $gn;
		global $marriage;
		global $fn;
		global $id;
		global $re;
		global $c;
		echo "<li><a href ='#'>".$gn[$t]." 2 ".$fn[$t];
		while ($re[$t]) {
			echo "<ul>";
			getChild($re[$t]);
		}
		un($t);
		echo "</div>";
		$c--;
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

?>

<body>

<div class="tree">
	<ul>
		<li>
			<a href="#">Parent</a>
			<ul>
				<li>
					<a href="#">Child</a>
					<ul>
						<li>
							<a href="#">Grand Child</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Child</a>
					<ul>
						<li><a href="#">Grand Child</a></li>
						<li>
							<a href="#">Grand Child</a>
							<ul>
								<li>
									<a href="#">Great Grand Child</a>
								</li>
								<li>
									<a href="#">Great Grand Child</a>
								</li>
								<li>
									<a href="#">Great Grand Child</a>
								</li>
							</ul>
						</li>
						<li><a href="#">Grand Child</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</div>

</body>
</html>