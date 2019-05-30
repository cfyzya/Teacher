<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	
		foreach ($data as $d) {
			print "<a href='/teacher/show/$d[id]'> $d[Name]  $d[SecondName]</a> <br>";
		}

	 ?>
	 
</body>
</html>