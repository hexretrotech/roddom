<?php
include "./sql_connect.php";
	$query = $db->prepare("
SELECT count(ip) FROM statistic WHERE date= :date0
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date1
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date2
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date3
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date4
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date5
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date6
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date7
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date8
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date9
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date10
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date11
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date12
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date13
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date14
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date15
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date16
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date17
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date18
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date19
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date20
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date21
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date22
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date23
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date24
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date25
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date26
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date27
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date28
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date29
UNION ALL 
SELECT count(ip) FROM statistic WHERE date= :date30
");
$query->execute(array( 
':date0' => '1' . date('.m.Y'),
':date1' => '2' . date('.m.Y'),
':date2' => '3' . date('.m.Y'),
':date3' => '4' . date('.m.Y'),
':date4' => '5' . date('.m.Y'),
':date5' => '6' . date('.m.Y'),
':date6' => '7' . date('.m.Y'),
':date7' => '8' . date('.m.Y'),
':date8' => '9' . date('.m.Y'),
':date9' => '10' . date('.m.Y'),
':date10' => '11' . date('.m.Y'),
':date11' => '12' . date('.m.Y'),
':date12' => '13' . date('.m.Y'),
':date13' => '14' . date('.m.Y'),
':date14' => '15' . date('.m.Y'),
':date15' => '16' . date('.m.Y'),
':date16' => '17' . date('.m.Y'),
':date17' => '18' . date('.m.Y'),
':date18' => '19' . date('.m.Y'),
':date19' => '20' . date('.m.Y'),
':date20' => '21' . date('.m.Y'),
':date21' => '22' . date('.m.Y'),
':date22' => '23' . date('.m.Y'),
':date23' => '24' . date('.m.Y'),
':date24' => '25' . date('.m.Y'),
':date25' => '26' . date('.m.Y'),
':date26' => '27' . date('.m.Y'),
':date27' => '28' . date('.m.Y'),
':date28' => '29' . date('.m.Y'),
':date29' => '30' . date('.m.Y'),
':date30' => '31' . date('.m.Y')
));
$all_mounth = $query->fetchAll();

	$query = $db->prepare("
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date0
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date1
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date2
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date3
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date4
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date5
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date6
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date7
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date8
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date9
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date10
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date11
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date12
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date13
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date14
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date15
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date16
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date17
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date18
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date19
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date20
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date21
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date22
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date23
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date24
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date25
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date26
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date27
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date28
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date29
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE date= :date30
");
$query->execute(array( 
':date0' => '1' . date('.m.Y'),
':date1' => '2' . date('.m.Y'),
':date2' => '3' . date('.m.Y'),
':date3' => '4' . date('.m.Y'),
':date4' => '5' . date('.m.Y'),
':date5' => '6' . date('.m.Y'),
':date6' => '7' . date('.m.Y'),
':date7' => '8' . date('.m.Y'),
':date8' => '9' . date('.m.Y'),
':date9' => '10' . date('.m.Y'),
':date10' => '11' . date('.m.Y'),
':date11' => '12' . date('.m.Y'),
':date12' => '13' . date('.m.Y'),
':date13' => '14' . date('.m.Y'),
':date14' => '15' . date('.m.Y'),
':date15' => '16' . date('.m.Y'),
':date16' => '17' . date('.m.Y'),
':date17' => '18' . date('.m.Y'),
':date18' => '19' . date('.m.Y'),
':date19' => '20' . date('.m.Y'),
':date20' => '21' . date('.m.Y'),
':date21' => '22' . date('.m.Y'),
':date22' => '23' . date('.m.Y'),
':date23' => '24' . date('.m.Y'),
':date24' => '25' . date('.m.Y'),
':date25' => '26' . date('.m.Y'),
':date26' => '27' . date('.m.Y'),
':date27' => '28' . date('.m.Y'),
':date28' => '29' . date('.m.Y'),
':date29' => '30' . date('.m.Y'),
':date30' => '31' . date('.m.Y')
));
$one_mounth = $query->fetchAll();
?>
