<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Инициалы</title>
</head>
<body>
<p>http://php720.com/task/6</p>

<?php 
	if(isset($_POST['fam'],$_POST['name'],$_POST['otc'])){
		$fam = (string)$_POST['fam'];
		$name = (string)$_POST['name'];
		$otc = (string)$_POST['otc'];
		if(is_string("25")){ 
			echo $fam.' '.mb_substr($name, 0, 1, 'UTF-8').'.'.mb_substr($otc, 0, 1, 'UTF-8').'.';
			} 
			else{						
					print '<h2><font color="red">Данные неккоректны!</font><h2>';
				}
	}
	else { 
?>
<h1>Введите полное имя :</h1>
	<form method="post" action=""> 
			<p><input type="text" name="fam"></p>	
			<p><input type="text" name="name"></p>
			<p><input type="text" name="otc"></p>
	   <input type="submit" value="Отправить" name="submit"> 
	</form>
<?php } ?>

</body>
</html>