<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Карты</title>
</head>
<body>
<p>http://php720.com/task/10</p>

<?php 
$karty = 0;
	if(isset($_POST['karty'])){
		$karty = (int)$_POST['karty'];
			if($karty >= 6 && $karty <=14){ 
				switch ("$karty") {
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
			else{						
					print '<h2><font color="red">Такой карты нет!</font><h2>';
				}	
	}
	else { 
?>
<h1>Введите число (6 - 14):</h1>
	<form method="post" action=""> 
		<input type="text" name="karty"> 
		<input type="submit" value="Отправить" name="submit"> 
	</form>
<?php } ?>

</body>
</html>