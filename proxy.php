<?php
header('Content-Type: application/json');

$card = $_GET['card'] ?? '';
$lab_id = $_GET['lab_id'] ?? '';

if (!$card || !$lab_id) {
    echo json_encode(["error" => "Missing parameters"]);
    exit;
}

$infinityfree_url = "https://intellilab.infinityfreeapp.com/test_RFID.php?card=$card&lab_id=$lab_id";

$response = file_get_contents($infinityfree_url);

echo $response;
