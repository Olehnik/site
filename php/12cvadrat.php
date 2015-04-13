<?php
error_reporting(-1);
header('Content-Type: text/html; charset=UTF-8');
$kvd = range(1, 17);
$kvd = array_map(function($num) { return $num * $num; }, $kvd);
echo '[', join(', ', $kvd), ']';
?>