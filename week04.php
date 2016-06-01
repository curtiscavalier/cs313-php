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
echo "<div class='tree'>";
while($c > 0){
while($gen[$c] == $gen[$c-1]){
	echo "<ul><li><a href ='#'>".$gn[$c]." ".$fn[$c];
	
$count++;
$c--;
}
echo "<ul><li><a href ='#'>".$fn[$c-1]." ".$fn[$c-1];
echo"</ul></li>";
if($count>0){
echo"</ul></li>";
$count --;
	
}
$c--;
}
echo "</div>";
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