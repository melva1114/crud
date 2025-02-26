<?php
header('Acces-Control-Allow-Origin: *');

$db_name = "sekolah";
$db_server = "localhost";
$db_user = "root";
$db_pass = "";

$db = new PDO("mysql:host={$db_server};dbname={$db_nname};charset=utf8", $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_EMULATE_PREAPERS, false);
$db->setAttribute(POD::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>