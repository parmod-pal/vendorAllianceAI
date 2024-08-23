<?php
$indexHost = "quickstart-2ynjzoy.svc.aped-4627-b74a.pinecone.io";  // Replace with your actual index host
$apiKey = "c396b6ae-290f-4d30-a603-47841e650bf9";   // Replace with your actual API key

$apiUrl = "https://$indexHost/query";

$data = [
    "vector" => [0.32,0.88,0.11,0.36,0.61,0.88,0.52,0.8],
    "filter" => [
        "genre" => "comedy"
    ],
    "topK" => 10,
    "includeMetadata" => true,
    "namespace" => "ns2"
];

$headers = [
    "Api-Key: $apiKey",
    "Content-Type: application/json",
    "X-Pinecone-API-Version: 2024-07"
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HEADER, true);  // Include headers in the output

$response = curl_exec($ch);
echo '<pre>';print_r($response);die;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>
