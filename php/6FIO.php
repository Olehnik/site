<?php
header("Content-Type: text/html; charset=UTF-8");?>
<p>http://php720.com/task/6</p>

<?php
echo 'Иванов Иван Иванович';
echo '<br>';
$val['con_name_f'] = 'Фамилия';
$val['con_name_n'] = 'Имя';
$val['con_name_s'] = 'Отчество';
echo $val['con_name_f'].' '.mb_substr($val['con_name_n'], 0, 1, 'UTF-8').'.'.mb_substr($val['con_name_s'], 0, 1, 'UTF-8').'.';

?>