<?php
$testUrl = "https://quickstart-2ynjzoy.svc.aped-4627-b74a.pinecone.io";
$apiKey = "c396b6ae-290f-4d30-a603-47841e650bf9"; // Use the same API key as in your working script

$headers = [
    "Api-Key: $apiKey",
    "Content-Type: application/json",
    "X-Pinecone-API-Version: 2024-07"
];

$ch = curl_init($testUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Optional: Match the cURL settings from your working script
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo "Connection successful";
    echo $response;
}

curl_close($ch);

?>
