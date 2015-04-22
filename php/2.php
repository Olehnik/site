<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Кол-во цифр в числе</title>
</head>
<body>
<p>http://php720.com/task/2</p>

<?php 
$x = 0;
$y = 0;
	if(isset($_POST['x'],$_POST['y'])){
		$x = (int)$_POST['x'];
		$y = (int)$_POST['y'];
			if($x >= 0  && $y >= 0){ 
				echo 'Количество вхождений цифры в число : '.substr_count($_POST["x"],$_POST["y"]);
			} 
			else{						
					print '<h2><font color="red">Данные неккоректны!</font></h2>';
				}
				
			
	}
	else { 
?>
<h1>Ввод числа и цифры :</h1>
	<form method="post" action=""> 
	<p>Число : <input type="text" name="x"></p>
	<p>Цифра : <input type="text" name="y"></p>
	   <input type="submit" value="Отправить" name="submit"> 
	</form>
<?php } ?>

</body>
</html>