<?php
header('Content-Type: application/json');

// Your mNotify API key
$apiKey = "HAJaVctgnWql8bPMtAga3R3fB";

// Get POST data
$to = isset($_POST['to']) ? $_POST['to'] : '';
$msg = isset($_POST['msg']) ? $_POST['msg'] : '';

if (!$to || !$msg) {
    echo json_encode(['status' => 'error', 'message' => 'Missing phone number or message']);
    exit;
}

// Build the mNotify API URL
$url = "https://apps.mnotify.net/smsapi?key=$apiKey&to=$to&msg=" . urlencode($msg);

// Send SMS
$response = file_get_contents($url);

// Return the response
echo $response;
?>
