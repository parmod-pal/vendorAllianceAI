<?php
$apiUrl = "https://api.pinecone.io/embed";
$apiKey = "c396b6ae-290f-4d30-a603-47841e650bf9";  // Replace with your actual API key

$data = [
    "model" => "multilingual-e5-large",
    "parameters" => [
        "input_type" => "query",
        "truncate" => "END"
    ],
    "inputs" => [
        [
            "text" => "The quick brown fox jumped over the lazy dog."
        ]
    ]
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

$response = curl_exec($ch);
echo '<pre>';print_r($response);die;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>
