<?php
	$query = $db->prepare("
SELECT count(ip) FROM statistic WHERE hours=0 AND date= :date0
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=1 AND date= :date1
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=2 AND date= :date2
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=3 AND date= :date3
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=4 AND date= :date4
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=5 AND date= :date5
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=6 AND date= :date6
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=7 AND date= :date7
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=8 AND date= :date8
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=9 AND date= :date9
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=10 AND date= :date10
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=11 AND date= :date11
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=12 AND date= :date12
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=13 AND date= :date13
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=14 AND date= :date14
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=15 AND date= :date15
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=16 AND date= :date16
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=17 AND date= :date17
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=18 AND date= :date18
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=19 AND date= :date19
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=20 AND date= :date20
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=21 AND date= :date21
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=22 AND date= :date22
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=23 AND date= :date23
");
$query->execute(array(':date0' => date('j.m.Y'), 
':date0' => date('j.m.Y'),
':date1' => date('j.m.Y'),
':date2' => date('j.m.Y'),
':date3' => date('j.m.Y'),
':date4' => date('j.m.Y'),
':date5' => date('j.m.Y'),
':date6' => date('j.m.Y'),
':date7' => date('j.m.Y'),
':date8' => date('j.m.Y'),
':date9' => date('j.m.Y'),
':date10' => date('j.m.Y'),
':date11' => date('j.m.Y'),
':date12' => date('j.m.Y'),
':date13' => date('j.m.Y'),
':date14' => date('j.m.Y'),
':date15' => date('j.m.Y'),
':date16' => date('j.m.Y'),
':date17' => date('j.m.Y'),
':date18' => date('j.m.Y'),
':date19' => date('j.m.Y'),
':date20' => date('j.m.Y'),
':date21' => date('j.m.Y'),
':date22' => date('j.m.Y'),
':date23' => date('j.m.Y'),

));
$all_today = $query->fetchAll();

	$query = $db->prepare("
SELECT count(DISTINCT ip) FROM statistic WHERE hours=0 AND date= :date0
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=1 AND date= :date1
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=2 AND date= :date2
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=3 AND date= :date3
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=4 AND date= :date4
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=5 AND date= :date5
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=6 AND date= :date6
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=7 AND date= :date7
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=8 AND date= :date8
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=9 AND date= :date9
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=10 AND date= :date10
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=11 AND date= :date11
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=12 AND date= :date12
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=13 AND date= :date13
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=14 AND date= :date14
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=15 AND date= :date15
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=16 AND date= :date16
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=17 AND date= :date17
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=18 AND date= :date18
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=19 AND date= :date19
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=20 AND date= :date20
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=21 AND date= :date21
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=22 AND date= :date22
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=23 AND date= :date23
");
$query->execute(array(':date0' => date('j.m.Y'), 
':date0' => date('j.m.Y'),
':date1' => date('j.m.Y'),
':date2' => date('j.m.Y'),
':date3' => date('j.m.Y'),
':date4' => date('j.m.Y'),
':date5' => date('j.m.Y'),
':date6' => date('j.m.Y'),
':date7' => date('j.m.Y'),
':date8' => date('j.m.Y'),
':date9' => date('j.m.Y'),
':date10' => date('j.m.Y'),
':date11' => date('j.m.Y'),
':date12' => date('j.m.Y'),
':date13' => date('j.m.Y'),
':date14' => date('j.m.Y'),
':date15' => date('j.m.Y'),
':date16' => date('j.m.Y'),
':date17' => date('j.m.Y'),
':date18' => date('j.m.Y'),
':date19' => date('j.m.Y'),
':date20' => date('j.m.Y'),
':date21' => date('j.m.Y'),
':date22' => date('j.m.Y'),
':date23' => date('j.m.Y'),

));
$one_today = $query->fetchAll();
?>
