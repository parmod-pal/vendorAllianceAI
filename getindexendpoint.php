<?php
$apiUrl = "https://api.pinecone.io/indexes/quickstart";  // Replace with your actual API URL
$apiKey = "c396b6ae-290f-4d30-a603-47841e650bf9";   // Replace with your actual API key

$headers = [
    "Api-Key: $apiKey"
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HTTPGET, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>
