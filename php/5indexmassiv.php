<?php
error_reporting(-1);
header('Content-Type: text/html; charset=UTF-8');?>

<?php
# all elements 
$arrayAll = array();
# every second elements output
$array2 = null;
 
for ($i = 0 ; !($i > 3) ; $i++){
 $nr = mt_rand(1,100);
 $arrayAll[] = $nr ;
 $array2 .= $nr .'<br>';  
 $arrayAll[] = mt_rand(1,100) ;
}
 
echo 'Массив: <pre>';
print_r( $arrayAll );
echo  '</pre> Элементы массива не парный индекс:<p>' , $array2 , '</p>Произведение ' , array_product($arrayAll);
