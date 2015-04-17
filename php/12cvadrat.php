<?php
header('Content-Type: text/html; charset=UTF-8');?>
<p>http://php720.com/task/12</p>
<?php
$x = range(1, 50);
$x = array_map(function($num) { return $num * $num; }, $x);
echo '[', implode(', ', $x), ']';
echo '<br>';
echo '<br>';
echo 'Сумма элементов массива: '.array_sum($x);
?>