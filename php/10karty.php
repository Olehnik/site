<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Достоинства игральных карт</title>
</head>
<body>
<p>http://php720.com/task/10</p>
<h1>Введите число (6 - 14):</h1>
			<form method="post" action="">           
            <input type="text" name="karty">            
            <input type="submit" value="Отправить" name="submit">        
			</form>
<?php			
	$a = $_POST["karty"];
		if($a >= 6 && $a <=14)
			{				
				switch ("$a") {
					case 6:
						echo "шестерка";
						break;
					case 7:
						echo "семерка";
						break;
					case 8:
						echo "восьмерка";
						break;
					case 9:
						echo "девятка";
						break;
					case 10:
						echo "десятка";
						break;
					case 11:
						echo "валет";
						break;
					case 12:
						echo "дама";
						break;
					case 13:
						echo "король";
						break;
					case 14:
						echo "туз";
						break;
						}

			}
		else
			{
				echo "Вы не ввели число от 6 до 14";
			}				
?>
</body>
</html>
