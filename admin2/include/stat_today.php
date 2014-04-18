<?php
	$query = $db->prepare("
SELECT count(ip) FROM statistic WHERE hours=0 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=1 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=2 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=3 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=4 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=5 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=6 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=7 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=8 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=9 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=10 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=11 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=12 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=13 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=14 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=15 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=16 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=17 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=18 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=19 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=20 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=21 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=22 AND date= :date
UNION ALL 
SELECT count(ip) FROM statistic WHERE hours=23 AND date= :date
");
$query->execute(array(':date' => date('j.m.Y')));
$all_today = $query->fetchAll();

	$query = $db->prepare("
SELECT count(DISTINCT ip) FROM statistic WHERE hours=0  AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=1 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=2 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=3 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=4 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=5 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=6 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=7 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=8 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=9 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=10 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=11 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=12 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=13 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=14 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=15 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=16 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=17 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=18 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=19 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=20 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=21 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=22 AND date= :date
UNION ALL 
SELECT count(DISTINCT ip) FROM statistic WHERE hours=23 AND date= :date
");
$query->execute(array(':date' => date('j.m.Y')));
$one_today = $query->fetchAll();
?>
