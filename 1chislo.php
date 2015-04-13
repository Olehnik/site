<?php
error_reporting(-1);
header('Content-Type: text/html; charset=UTF-8');
$val = 2233;
echo array_sum(str_split($val));
?>