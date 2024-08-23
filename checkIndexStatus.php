<?php
$indexHost = "quickstart-2ynjzoy.svc.aped-4627-b74a.pinecone.io";  // Replace with your actual index host
$apiKey = "c396b6ae-290f-4d30-a603-47841e650bf9";   // Replace with your actual API key

$apiUrl = "https://$indexHost/describe_index_stats";

$headers = [
    "Api-Key: $apiKey",
    "X-Pinecone-API-Version: 2024-07"
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>
