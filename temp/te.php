<?php
$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=localhost;dbname=roddom1', $user, $pass);
$qu = $db->query('SELECT * FROM test1');
$te = $qu->fetchAll(PDO::FETCH_ASSOC);
echo $te[1]['id'];
?>
