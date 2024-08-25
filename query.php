<?php
$indexHost = "vendoralliance-2ynjzoy.svc.aped-4627-b74a.pinecone.io";  // Replace with your actual index host
$apiKey = "c396b6ae-290f-4d30-a603-47841e650bf9";   // Replace with your actual API key

$apiUrl = "https://$indexHost/query";

$data = [
    "vector" => [0.81,0.13,0.96,0.52,0.23,0.44,0.73,0.23,0.87,0.64,0.66,0.99,0.96,0.16,0.88,0.67,0.35,0.29,0.04,0.06,0.1,0.77,0.64,0.2,0.69,0.28,0.2,0.1,0.89,0.08,0.32,0.75,0.19,0.28,0.53,0.29,0.67,0.27,0.56,0.9,0.17,0.58,0.39,0.1,0.88,0.4,0.25,0.28,0.68,0.23,0.31,0.99,1,0.71,0.66,0.29,0.7,0.84,0.33,0.41,0.29,0.22,0.18,0.11,0.96,0.42,0.15,0.95,0.55,0.03,0.53,0.27,0.08,0.63,0.72,0.9,0.14,0.77,0.46,0.64,0.28,0.15,0.7,0.96,0.19,0.77,0.42,0.99,0.86,0.49,0.99,0.25,0.19,0.29,0.81,0.9,0.04,0.66,0.52,0.89,0.25,0.94,0.48,0.03,0.42,0.85,0.97,0.97,0.78,0.29,0.61,0.88,0.27,0.49,0.62,0.55,0.61,0.53,0.61,0.64,0.71,0.87,0.72,0.96,0.85,0.23,0.95,0.15,0.24,0.43,0.4,0.3,0.45,0.68,0.48,0.79,0.19,0.3,0.67,0.64,0.31,0.94,0.6,0.11,0.86,0.42,0.38,0.25,0.08,0.74,0.09,0.88,0.12,0.65,0.27,0.08,0.69,0.08,0.93,0.1,0.03,0.92,0.85,0.01,0.19,0.27,0.98,0.1,0.18,0.91,0.86,0.01,0.19,0.47,0.89,0.98,0.55,0.75,0.05,0.56,0.75,0.2,0.48,0.65,0.46,0.07,0.39,0.37,0.21,0.88,0.59,0.03,0.84,0.41,0.19,0.44,0.1,0.52,0.34,0.22,0.81,0.66,0.51,0.32,0.14,0.77,0.49,0.44,0.82,0.92,0.19,0.11,0.72,0.6,0.92,0.87,0.15,0.12,0.11,0.66,0.44,0.57,0.2,0.67,0.55,0.51,0.63,0.09,0.25,0.47,0.74,0.78,0.02,0.85,0.76,0.17,0.37,0.12,0.66,0.97,0.84,0.45,0.16,0.06,0.71,0.44,0.8,0.43,0.71,0.67,0.09,0.35,0.17,0.59,0.8,0.35,0.07,0.52,0.26,0.49,0.03,0.35,0.95,0.58,0.12,0.37,1,0.17,0.21,0.26,0.22,0.92,0.85,0.32,0.98,0.8,0.35,0.71,0.65,0.3,0.25,0.71,0.98,0.97,0.93,0.89,0.72,0.13,0.43,0.14,0.51,0.51,0.84,0.2,0.04,0.81,0.7,0.23,0.15,0.89,0.01,0.76,0.5,0.18,0.48,0.35,0.55,0.27,0.98,0.69,0.16,0.24,0.81,0.49,0.2,0.2,0.98,0.3,0.09,0.89,0.14,0.13,0.69,0.55,0.46,0.52,0.77,0.99,0.77,0.23,0.34,0.62,0.83,0.45,0.31,0.19,0.62,0.49,0.96,0.33,0.78,0.28,0.8,0.28,0.66,0.74,0.42,0.2,0.53,0.61,0.97,0.92,0.03,0.54,0.47,0.01,0.43,0.89,0.84,0.48,0.78,0.98,0.78,0.91,0.35,0.77,0.27,0.03,0.76,0.71,0.74,0.26,0.06,0.16,0.63,0.32,0.74,0.52,0.07,0.97,0.3,0.61,0.2,0.58,0.89,0.93,0.34,0.72,0.88,0.99,0.9,0.68,0.53,0.43,0.55,0.78,0.35,0.79,0.08,0.84,0.71,0.14,0.85,0.91,0.16,0.1,0.37,0.4,0.99,0.85,0.38,0.77,0.6,0.11,0.7,0.93,0.96,0.69,0.69,0.49,0.9,0.92,0.12,0.09,0.46,0.33,0.41,0.72,0.03,0.28,0,0.17,0.05,0.47,0.45,0.06,0.58,0.28,0.56,0.18,0.2,0.33,0.78,0.13,0.32,0.73,0.38,0.96,0.84,0.01,0.91,0.08,0.9,0.94,0.06,0.18,0.32,0.64,0.05,0.96,0.42,0.91,0.49,0.84,0.32,0.52,0.14,0.97,0.88,0.8,0.27,0.6,0.03,0.48,0.92,0.17,0.02,0,0.89,0.2,0.32,0.44,0.82,0.85,0.68,0.53,0.3,0.1,0.19,0.97,0.31,0.45,0.52,0.76,0.84,0.57,0.69,0.74,0.72,0.68,0.01,0.75,0.03,0.87,0.47,0.94,0.02,0.46,0.9,0.59,0.15,0.74,0.27,0.49,0.66,0.7,0.65,0.83,0.16,0.39,0.09,0.53,0.59,0.4,0.44,0.79,0.25,0.82,0.86,0.77,0.43,0.99,0.31,0.51,0.57,0.04,0.27,0.85,0.59,0.28,0.31,0.55,0.31,0.94,0.19,0.96,0.79,0.16,0.61,0.81,0.51,0.51,0.64,0.3,0.94,0.38,0.79,0.9,0.59,0.22,0.23,0.61,0.04,0.77,0.14,0.18,0.52,0.03,0.68,0.89,0.89,0.22,0.44,0.2,0.39,0.44,0.35,0.45,0.06,0.03,0.79,0.93,0.26,0.15,0.3,0.25,0.33,0.08,0.49,0.59,0.97,1,0.08,0.14,0.06,0.48,0.26,0.47,0.66,0.34,0.8,0.91,0.74,0.65,0.69,0.93,0.16,0.14,0.21,0.26,0.39,0.75,0.84,0.46,0.56,0.06,0.28,0.42,0.28,0.58,0.26,0.16,0.05,0.98,0.56,0.1,0.45,0.91,0.38,0.55,0.56,0.92,0.9,0.46,0.69,0.27,0.44,0.39,0.9,0.31,0.08,0.55,0.17,0.13,0.6,0.86,0.78,0.92,0.54,0.25,0.58,0.15,0.91,0.64,0.6,0.59,0.99,0.46,0.73,0.06,0.46,0.44,0.99,0.09,0.71,0.8,0.4,0.48,0.06,0.52,0.8,0.99,0.2,0.42,0.88,0.15,0.53,0.91,0.77,0.36,0.58,0.97,0.98,0.06,0.22,0.32,1,0.82,0.17,0.54,0.41,0.77,0.93,0.31,0.34,0.68,0.54,0.4,0.3,0.26,0.13,0.3,0.21,0.26,0.8,0.57,0.07,0.9,0.22,0.68,0.09,0.41,0.86,0.72,0.67,0.44,0.06,0.6,0.91,0.77,0.55,0.92,0.71,0.35,0.37,0.96,0.21,0.53,0.78,0.78,0.64,0.49,0.16,0.66,0.7,0.25,0.8,0.6,0.04,0.32,0.39,0.11,0.31,0.83,0.14,0.28,0.92,0.58,0.35,0.35,0.82,0.47,0.26,0.38,0.58,0.91,0.36,0.51,0.42,0.37,0.64,0.24,0.36,0.95,0.84,0.56,0.01,0.05,0.41,0.09,0.96,0.46,0.42,0.82,0.72,0.17,0.02,0.77,0.21,0.18,0.3,0.59,0.72,0.17,0.33,0.36,0.12,0.93,0.91,0.21,0.67,0.54,0.58,0.89,0.69,0.78,0.35,0.14,0.13,0.26,0.59,0.21,0.97,0.01,0.17,0.35,0.67,0.49,0.76,0.07,0.42,0.49,0.56,0.57,0.49,0.2,0.49,0.99,0.91,0.36,0.3,0.21,0.04,0.56,0.35,0.63,0.09,0.74,0.94,0.24,0.64,0.37,0.73,0.41,0.68,0.34,0.79,0.07,0.87,0.56,0.55,0.86,0.3,0.66,0.7,0.76,0.13,0.93,0.38,0.57,0.64,0.41,0.95,0.59,0.29,0.16,0.15,0.98,0.02,0.31,0.09,0.2,0.9,0.6,0.95,0.1,0.32,0.95,0.34,0.98,0.72,0.66,0.32,0.93,0.14,0.13,0.53,0.84,0.55,0.48,0.31,0.26,0.27,0.98,0.29,0.16,0.04,0.27,0.54,0.44,0.9,0.35,0.26,0.13,0.42,0.38,0.37,0.76,0.58,0.79,0.52,0.66,0.45,0.02,0.52,0.18,0.86,0.76,0.88,0.02,0.01,0.22,0.5,0.78,0.82,0.2,0.16,0.93,0.4,0.34,0.24,0.22,0.92,0.58,0.16,0.51,0.13,0.84,0.64,0.59,0.56,0.95,0.15,0.93,0.65,0.89,0.86,0.03,1,0.05,0.55,0.63,0.84,0.25,0.21,0.98,0.72,0.08,0.68,0.59,0.1,0.25,0.44,0.57,0.18,0.54,0.99,0.54,0.85,0.4,0.88,0.69,0.8,0.17,0.72,0.63,0.94,0.23,0.35,0.06,0.37,0.27,0.17,0.25,0.66,1,0.05,0.53,0.18,0.25,0.64,0.39,0.77,0.36,0.34,0.29,0.6,0.67,0.63,0.43,0.26,0.48,0.59,0.02,0.18,0.19,0.63,0.14,0.22,0.54,0.78,0.66,0.78,1,0.39,0.85,0.25,0.08,0.91,0.77,0.31,0.93,0.32,0.51,0.41,0.92,0.3,0.34,0.03,0.68,0.08,0.04,0.19,0.54],    
    "topK" => 5,
    "includeMetadata" => true,
    "namespace" => "product",
    "includeValues" => true
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

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>
