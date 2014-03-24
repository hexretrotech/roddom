<?php 
    $data = $_POST["result"];
    $data = json_decode("$data",true);
	$edit_id = $_POST["id"];
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
			$menu[$m][nextgroup] = $item[nextgroup];
			$a = 0;
			
		}
		else
		{
			$a++;
			$menu[$m][podpunkt][$a][hierarchy] = $item[hierarchy];
			$menu[$m][podpunkt][$a][src] = $item[src];
			$menu[$m][podpunkt][$a][label] = $item[label];
			$menu[$m][podpunkt][$a][group] = $item[group];
			$menu[$m][podpunkt][$a][nextgroup] = $item[nextgroup];
			
		}
	}

	$menu_backup = $menu;
	unset($menu[$edit_id][podpunkt]);

	for($i=0; $i <= count($data); $i++)
	{
		$menu[$edit_id][podpunkt][$i][hierarchy] = $menu_backup[$edit_id][podpunkt][$data[$i]][hierarchy];
		$menu[$edit_id][podpunkt][$i][src] = $menu_backup[$edit_id][podpunkt][$data[$i]][src];
		$menu[$edit_id][podpunkt][$i][label] = $menu_backup[$edit_id][podpunkt][$data[$i]][label];
		$menu[$edit_id][podpunkt][$i][group] = $menu_backup[$edit_id][podpunkt][$data[$i]][group];
		$menu[$edit_id][podpunkt][$i][nextgroup] = $menu_backup[$edit_id][podpunkt][$data[$i]][nextgroup];
	}
	//print_r($menu[$edit_id][podpunkt]);
	$query = $db->query("TRUNCATE TABLE menu");
	for($i = 0; $i <= count($menu); $i++) {
		$p = $i;
		$query = $db->prepare("INSERT INTO menu VALUES ('', :hierarchy , :label , :src , :group, :nextgroup )");
		$query->execute(array(':hierarchy' => $menu[$p][hierarchy], ':label' => $menu[$p][label], ':src' => $menu[$p][src], ':group' => $menu[$p][group], ':nextgroup' => $menu[$p][nextgroup]));
		$query->fetch();
		
		if($menu[$p][podpunkt] != 0) {
			for($t = 0; $t <= count($menu[$p][podpunkt]); $t++) {
				$query = $db->prepare("INSERT INTO menu VALUES ('', :hierarchy , :label , :src , :group, :nextgroup )");
				$query->execute(array(':hierarchy' => $menu[$p][podpunkt][$t][hierarchy], ':label' => $menu[$p][podpunkt][$t][label], ':src' => $menu[$p][podpunkt][$t][src], ':group' => $menu[$p][podpunkt][$t][group], ':nextgroup' => $menu[$p][podpunkt][$t][nextgroup]));
				$query->fetch();
			}
		}	
	}
?>
