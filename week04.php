<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Week04</title>
<link rel="stylesheet" type = "text/css" href ="style.php"/>
</head>
<p>My family</p>

<?php
header('Content-type: text/css; charset:UTF-8');
require('login.php');



	/*$statement = mysqli_prepare($con,"SELECT * FROM family");
	mysqli_stmt_bind_param($statement);
	mysqli_stmt_execute($statement);
	
	mysqli_stmt_store_result($statement);
	
	mysqli_stmt_bind_result($statement,$id,);
	$profile = array();
	while (mysqli_stmt_fetch($statement)) {
		echo $id." : ";
		
		echo $Skills;
		echo "</br>";
	
	}
	mysqli_stmt_close($statement);
	mysqli_close($con);*/

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