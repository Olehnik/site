<?php
header('Content-Type: text/html; charset=UTF-8');?>
<?php
$lottery = array(); 
for ($i = 0; $i < 10; $i++) 
{
$lottery [$i] = mt_rand(1,100);
}
echo "<pre>";
print_r ($lottery);
echo "</pre>";   
	echo "</br>";
echo "Произведение всех элементов: " . array_product($lottery) . "\n";// Произведение всех элементов массива.
	echo "</br>";
echo "Сумма всех элементов:        " . array_sum($lottery);// Сумму всех элементов массива.
	echo "<br>"; 
echo 'Четные элементы:';/* Выводим парные */     
    echo'<br>';
	
	
foreach ($lottery as $key => $value) {
        if (($key + 1) % 2 == 0) {
            echo $value . '<br>';			
        }		
    }		
	echo'<br>'; 
	
echo 'Нечетные элементы:';/* Выводим не парные */
	echo'<br>';    
foreach ($lottery as $key => $value) {
        if (($key + 1) % 2 != 0) {            
			echo $value . '<br>';
        }
    }

?>