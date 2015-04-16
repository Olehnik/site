<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>цикл</title>
</head>
<body>
<p>http://php720.com/task/3</p>
<?php 
	$sum = 0;		
	for($i = 20; $i <= 45; $i++){
		if( fmod($i,5) == 0 ) {
			$sum += $i;
		}
	}	
	echo $sum;?>
	</body>
</html>