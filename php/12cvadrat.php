<?php
header('Content-Type: text/html; charset=UTF-8');?>

<p>http://php720.com/task/12</p>

<?php
$kvd = range(1, 100);
$kvd = array_map(function($num) { return $num * $num; }, $kvd);
echo '[', join(', ', $kvd), ']';
?>