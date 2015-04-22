<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Стрелка</title>
</head>
<body>
<p>http://php720.com/task/7</p>

<?php 
$gradus = 0;
$hours =0;
	if(isset($_POST['gradus'])){
		$gradus = (int)$_POST['gradus'];
			if($gradus >= 0  && $gradus <= 360){ 
				$number = 43200*$gradus/360;	// 43200 - кол-во секунд в 12 часах 
				$h = $number /3600;
				$hours = round($h,0);
				
				
			} 
			else{						
					print '<p><font color="red">Данные неккоректны!</font></p><br>';
				}
				echo "Введено: ". $_POST['gradus']."!<br>";
				echo "Часы: "; 
				echo $hours;
			
	}
	else { 
?>
<h1>Введите градусы (0 - 360):</h1>
	<form method="post" action=""> 
		<input type="text" name="gradus"> 
		<input type="submit" value="Отправить" name="submit"> 
	</form>
<?php } ?>

</body>
</html>