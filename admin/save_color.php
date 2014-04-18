<?php
    $data = $_POST["result"];
    $data = json_decode("$data",true);
print_r($data);
include 'sql_connect.php';
$query = $db->query("DELETE FROM page WHERE id=1");
$query = $db->prepare("INSERT INTO color VALUES ('', :q , :w , :e , :r , :t )");
		$query->execute(array(':q' => $data[1], ':w' => $data[2], ':e' => $data[3], ':r' => $data[4], ':t' => $data[5]));
		$query->fetch();
echo	$background_title;
 echo	$background_top_menu;
 echo	$background_bottom_menu;
 echo	$background_content;
echo	$background_body;
?>
