<?php
$apiUrl = "https://api.pinecone.io/indexes";
$apiKey = "c396b6ae-290f-4d30-a603-47841e650bf9";  // Replace with your actual API key

$data = [
    "name" => "vendoralliance",
    "dimension" => 1024,  // Replace with your model dimension
    "metric" => "euclidean",  // Replace with your model metric
    "spec" => [
        "serverless" => [
            "cloud" => "aws",
            "region" => "us-east-1"
        ]
    ]
];

$headers = [
    "Accept: application/json",
    "Content-Type: application/json",
    "Api-Key: $apiKey"
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>
