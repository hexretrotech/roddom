<?php

include 'sql_connect.php';
	
	$m = 0;
	$a = 0;
	$query = $db->query("SELECT * FROM menu");
	while($item = $query->fetch(PDO::FETCH_ASSOC))
	{
		if($item[group] == 1) 
		{
			$m++;
			$menu[$m][hierarchy] = $item[hierarchy];
			$menu[$m][src] = $item[src];
			$menu[$m][label] = $item[label];
			$menu[$m][group] = $item[group];
			$a = 0;
			
		}
		else
		{
			$a++;
			$menu[$m][podpunkt][$a][hierarchy] = $item[hierarchy];
			$menu[$m][podpunkt][$a][src] = $item[src];
			$menu[$m][podpunkt][$a][label] = $item[label];
			$menu[$m][podpunkt][$a][group] = $item[group];
			
		}
	}
$max_hi = 0;
for($i=0; $i <= count($menu[3][podpunkt]); $i++) {
	$num = (int)preg_replace('/.[^\d]+/', '', $menu[4][podpunkt][$i][hierarchy]);
	if($max_hi < $num) { $max_hi = $num; }
}
echo $max_hi;
?>
