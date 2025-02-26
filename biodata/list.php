<?php
header('Content-Type: application/json');
include "konekdb.php";

$stmt = $db->preapre("SELECT id, nis,nama,tplahir,tglahir,kelamin,agama,alamat FROM siswa");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
?>