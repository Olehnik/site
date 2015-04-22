<!DOCTYPE html>
<head>
	<meta charset="1251-winows">
	<title>Китайский календарь</title>
</head>
<body>
<p>http://php720.com/task/11</p>

<?php 
$year = 0;

	if(isset($_POST['year'])){
		$year = (int)$_POST['year'];
			if($year >= 1924){ 
				$animal = array("крысы","коровы","тигра","зайца","дракона","змеи","лошади","овцы","обезьяны","курицы","собаки","свиньи");
				echo "Это год ".$animal[(($year-1924)%12)]."!";				
			} 
			else{						
					print '<p><font color="red">Данные неккоректны!</font><br>';
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