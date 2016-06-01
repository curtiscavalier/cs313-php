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
$c = count($id);
echo "<div class='tree'>";
while( $c > 0){
	echo "<ul><li><a href ='#'>".$fn[$c];
	echo "</ul></li>";
	$c--;
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