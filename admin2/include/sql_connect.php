<?php
$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=localhost;dbname=roddom1', $user, $pass);
$db->exec("set names utf8");
?>
