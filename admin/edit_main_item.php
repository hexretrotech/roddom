<?php 
include 'sql_connect.php';
$query = $db->query("SELECT * FROM menu");
	
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
    $data = $_POST["result"];
    $data = json_decode("$data",true);
	
	$query = $db->query("TRUNCATE TABLE menu");
	for($i = 0; $i <= count($data); $i++) {
		$p = $data[$i];
		$query = $db->prepare("INSERT INTO menu VALUES ('', :hierarchy , :label , :src , :group )");
		$query->execute(array(':hierarchy' => $menu[$p][hierarchy], ':label' => $menu[$p][label], ':src' => $menu[$p][src], ':group' => $menu[$p][group]));
		$query->fetch();
		
		if($menu[$p][podpunkt] != 0) {
			for($t = 0; $t <= count($menu[$p][podpunkt]); $t++) {
				$query = $db->prepare("INSERT INTO menu VALUES ('', :hierarchy , :label , :src , :group )");
				$query->execute(array(':hierarchy' => $menu[$p][podpunkt][$t][hierarchy], ':label' => $menu[$p][podpunkt][$t][label], ':src' => $menu[$p][podpunkt][$t][src], ':group' => $menu[$p][podpunkt][$t][group]));
				$query->fetch();
			}
		}	
	}
?>
