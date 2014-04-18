<?php
    $data = $_POST["result"];
    $data = json_decode("$data",true);
	include '../../../include/sql_connect.php';
	$query = $db->query("DELETE FROM page WHERE id=1");
	$query = $db->prepare("INSERT INTO color VALUES ('', :q , :w , :e , :r , :t, :y, :u, :i, :o )");
	$query->execute(array(':q' => $data[1], ':w' => $data[2], ':e' => $data[3], ':r' => $data[4], ':t' => $data[5], ':y' => $data[6], ':u' => $data[9], ':i' => $data[7], ':o' => $data[8]));
	$query->fetch();
?>
