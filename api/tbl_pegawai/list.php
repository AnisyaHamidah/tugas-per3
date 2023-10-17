<?php
header('Access-Control-Allow-Origin: *');
$connection = new mysqli("localhost", "root", "", "tbl_pegawai");
$data = mysqli_query($connection, "SELECT * FROM tabel_pegawai");
$response = array();

if ($data) {
    while ($row = mysqli_fetch_assoc($data)) {
        $row['Avatar'] = $row['Avatar'];
        $response[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode(['data' => $response]);
