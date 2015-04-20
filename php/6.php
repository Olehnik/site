<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Високосный год</title>
</head>
<body>
<p>http://php720.com/task/6</p>
<h1>Инициалы</h1>
			<form method="post" action="">           
            <input type="text" name="fam">		
			<input type="text" name="name">	
			<input type="text" name="otc">	
            <input type="submit" value="Отправить" name="submit">        
			</form>
<?php			
	$fam = $_POST["fam"];
	$name = $_POST["name"];
	$otc = $_POST["otc"];
		if(isset($name,$fam,$otc))
			{
				echo $fam.' '.mb_substr($name, 0, 1, 'UTF-8').'.'.mb_substr($otc, 0, 1, 'UTF-8').'.';
			}
		else
			{
				echo "Вы не полностью заполнили...!";
			}				
?>
</body>
</html>
