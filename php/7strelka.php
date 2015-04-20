<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Стрелка</title>
</head>
<body>
<p>http://php720.com/task/2</p>
<h1>Введите градусы (0 - 360):</h1>
			<form method="post" action="">           
            <input type="text" name="gradus">            
            <input type="submit" value="Отправить" name="submit">        
			</form>
<?php			
	$a = $_POST["gradus"];
		if($a >= 0 && $a <=360)
			{				
				$number = 43200*$a/360;	
				$h   = $number /3600;
				$hours = round($h,0);
				$min = $number % 3600 / 60; 
				$sec = $number % 3600 % 60;
				echo "Введено $a градусов<br>";
				echo "Время:<br>"; 
				echo "$hours : $min : $sec";
			}
		else
			{
				echo "Вы не ввели число от 0 до 360";
			}				
?>
</body>
</html>
