<?php
header("Content-Type: text/html; charset=UTF-8");?>
<p>http://php720.com/task/4</p>

<?php
$max = array(0,0);
$min = array(100,0);

for($i=0;$i<10;$i++){
	$numArray[] = rand(1,100);
}

foreach($numArray as $key => $val){

	if($max[0] < $val){
		$max[0] = $val;
		$max[1] = $key;
	}
	
	if($min[0] > $val){
		$min[0] = $val;
		$min[1] = $key;
	}
}

echo 'До изменений:<br/><br/>';
foreach($numArray as $val){
	echo $val.'<br/>';
}

$numArray[$max[1]] = $min[0];
$numArray[$min[1]] = $max[0];

echo 'После изменений:<br/><br/>';
foreach($numArray as $val){
	echo $val.'<br/>';
}

echo '<br/>Максимальное:'.$max[0].'<br/>';
echo 'Минимальное:'.$min[0].'<br/>';

?>