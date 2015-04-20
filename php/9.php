<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Високосный год</title>
</head>
<body>
<p>http://php720.com/task/9</p>
<h1>Введите число:</h1>
			<form method="post" action="">           
            <input type="text" name="year">			
            <input type="submit" value="Отправить" name="submit">        
			</form>
<?php			
	$year = $_POST["year"];
		if($year >= 0 && $year <=9999)
			{				
				if ($year % 4 == 0)
					{
						echo "Год ".$year. " високосный!";
					}
				else
					{
						echo "Год ".$year. " не високосный!";
					}	
			}
		else
			{
				echo "Вы не ввели число!";
			}				
?>
</body>
</html>
