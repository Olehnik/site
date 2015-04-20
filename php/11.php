<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Китайский календарь</title>
</head>
<body>
<p>http://php720.com/task/11</p>
<h1>Введите год:</h1>
			<form method="post" action="">           
            <input type="text" name="year">			
            <input type="submit" value="Отправить" name="submit">        
			</form>
<?php			
	$year = $_POST["year"];
		if($year >= 1924)
			{				
				$animal = array("крысы","коровы","тигра","зайца","дракона","змеи","лошади","овцы","обезьяны","курицы","собаки","свиньи");
				echo "Это год ".$animal[(($year-1984)%12)]."!";
			}
		else
			{
				echo "Вы не ввели год!";
			}				
?>
</body>
</html>
