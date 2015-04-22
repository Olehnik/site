<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Високосный год</title>
</head>
<body>
<p>http://php720.com/task/9</p>

<?php 
$year = 0;
	if(isset($_POST['year'])){
		$year = (int)$_POST['year'];
			if($year >= 0 && $year <=9999){ 
				if ($year % 4 == 0)
					{
						echo "Год ".$year. " високосный!";
					}
				else
					{
						echo "Год ".$year. " не високосный!";
					}					
				} 
			else{						
					print '<h2><font color="red">Данные неккоректны!</font><h2>';
				}			
	}
	else { 
?>
<h1>Введите год :</h1>
	<form method="post" action=""> 
		<input type="text" name="year"> 
		<input type="submit" value="Отправить" name="submit"> 
	</form>
<?php } ?>

</body>
</html>