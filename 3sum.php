<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>цикл</title>
</head>
<body>
<?php 
//$text = 'Джон';
//$text .=', inpost';
//echo $text;

/*$login = 'inpost';
$pass = 'test';

if($login == 'inpost'){
	if($pass == 'test'){
		echo 'Вы авторизованы';
		} else{
			echo 'Вы ввели неправильный пароль';
		}
		
	} else{	echo 'вы неверно ввели логин';
	}*/
	$sum = 0;
	for($i = 20; $i <= 45; $i++){
		if($i%5 == 0) {
			$sum += $i;
		}
	}
	echo $sum;
	

?>

	</body>
</html>