<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Сумма цифр в числе</title>
</head>
<body>
<p>http://php720.com/task/1</p>

<?php 
$chislo = 0;
$can_show_form = true;
	if(isset($_POST['chislo'])){
		echo 'Введено : ' . $_POST['chislo'] . '<br />';
		$chislo = (int)$_POST['chislo'];
		if($chislo >= 0){ 
		$can_show_form = false;
		echo "Сумма : ".array_sum(str_split($_POST['chislo']));	
		} else{						
			print '<p><font color="red">Данные неккоректны!</font><br>';
				}			
	}	
	?>
	 <?php if ($can_show_form): ?>
		<h1>Введите число :</h1>
		<form method="post" action=""> 
			<input type="text" name="chislo"> 
			<input type="submit" value="Отправить" name="submit"> 
		</form>
	<?php endif; ?>

</body>
</html>