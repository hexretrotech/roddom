<?php
include '../../../include/sql_connect.php';
$free_hierarchy = 0;
$numh = $_POST["numh"];
$nname = $_POST["name"];
$query = $db->prepare("UPDATE menu SET label= :label WHERE hierarchy = :hierarchy");
$query->execute(array(':hierarchy' => $numh, ':label' => $nname));
$query->fetch();
?>
