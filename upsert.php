<?php
$indexHost = "quickstart-2ynjzoy.svc.aped-4627-b74a.pinecone.io";  // Replace with your actual index host
$apiKey = "c396b6ae-290f-4d30-a603-47841e650bf9";   // Replace with your actual API key

$apiUrl = "https://$indexHost/vectors/upsert";

$data = [
    "vectors" => [
        [
            "id" => "A",
            "values" => [0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1],
            "metadata" => ["genre" => "comedy", "year" => 2020]
        ],
        [
            "id" => "B",
            "values" => [0.2, 0.2, 0.2, 0.2, 0.2, 0.2, 0.2, 0.2],
            "metadata" => ["genre" => "documentary", "year" => 2019]
        ],
        [
            "id" => "C",
            "values" => [0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3],
            "metadata" => ["genre" => "comedy", "year" => 2019]
        ],
        [
            "id" => "D",
            "values" => [0.4, 0.4, 0.4, 0.4, 0.4, 0.4, 0.4, 0.4],
            "metadata" => ["genre" => "drama"]
        ]
        ],
    "namespace" => 'ns3'
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

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>
