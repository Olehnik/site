<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Стрелка</title>
</head>
<body>
<p>http://php720.com/task/2</p>
<h1>Введите число и цифру:</h1>
			<form method="post" action="">           
            <p>Число: <input type="text" name="x"></p>      
			<p>Цифра: <input type="text" name="y"></p>
            <input type="submit" value="Отправить" name="submit">        
			</form>
<?php			
	$x = $_POST["x"];
	$y = $_POST["y"];
		if($x >= 0 && $y >=0)
			{				
				echo 'Количество вхождений: '.substr_count($_POST["x"],$_POST["y"]);
			}
		else
			{
				echo "Вы не ввели числа!";
			}				
?>
</body>
</html>
