<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>�����</title>
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
						echo "��������";
						break;
					case 7:
						echo "�������";
						break;
					case 8:
						echo "���������";
						break;
					case 9:
						echo "�������";
						break;
					case 10:
						echo "�������";
						break;
					case 11:
						echo "�����";
						break;
					case 12:
						echo "����";
						break;
					case 13:
						echo "������";
						break;
					case 14:
						echo "���";
						break;
					}
				
			} 
			else{						
					print '<h2><font color="red">����� ����� ���!</font><h2>';
				}	
	}
	else { 
?>
<h1>������� ����� (6 - 14):</h1>
	<form method="post" action=""> 
		<input type="text" name="karty"> 
		<input type="submit" value="���������" name="submit"> 
	</form>
<?php } ?>

</body>
</html>