<?php
$montharr = array('январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь');
include "./sql_connect.php";
	$query = $db->prepare("
SELECT count(ip) FROM statistic WHERE date LIKE :date0
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date1
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date2
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date3
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date4
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date5
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date6
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date7
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date8
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date9
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date10
UNION ALL 
SELECT count(ip) FROM statistic WHERE date LIKE :date11

");
$query->execute(array( 
':date0' => '%01' . date('.Y'),
':date1' => '%02' . date('.Y'),
':date2' => '%03' . date('.Y'),
':date3' => '%04' . date('.Y'),
':date4' => '%05' . date('.Y'),
':date5' => '%06' . date('.Y'),
':date6' => '%07' . date('.Y'),
':date7' => '%08' . date('.Y'),
':date8' => '%09' . date('.Y'),
':date9' => '%10' . date('.Y'),
':date10' => '%11' . date('.Y'),
':date11' => '%12' . date('.Y'),

));
$all_year = $query->fetchAll();
	$query = $db->prepare("
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date0
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date1
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date2
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date3
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date4
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date5
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date6
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date7
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date8
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date9
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date10
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date LIKE :date11

");
$query->execute(array( 
':date0' => '%01' . date('.Y'),
':date1' => '%02' . date('.Y'),
':date2' => '%03' . date('.Y'),
':date3' => '%04' . date('.Y'),
':date4' => '%05' . date('.Y'),
':date5' => '%06' . date('.Y'),
':date6' => '%07' . date('.Y'),
':date7' => '%08' . date('.Y'),
':date8' => '%09' . date('.Y'),
':date9' => '%10' . date('.Y'),
':date10' => '%11' . date('.Y'),
':date11' => '%12' . date('.Y'),

));
$one_year = $query->fetchAll();
?>
