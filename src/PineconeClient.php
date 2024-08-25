<?php
class PineconeClient {
    private $apiKey;
    private $indexUrl;

    public function __construct($apiKey, $indexUrl) {
        $this->apiKey = $apiKey;
        $this->indexUrl = $indexUrl;
    }

    protected function sendRequest($url, $data, $isPost = true) {
        // Ensure using HTTPS
        $url = preg_replace("/^http:/i", "https:", $url);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Api-Key: ' . $this->apiKey,
            'Content-Type: application/json',
            'X-Pinecone-API-Version: 2024-07'
        ]);

        // Set a longer timeout and enable verbose logging
        curl_setopt($ch, CURLOPT_TIMEOUT, 300); // 300 seconds
        curl_setopt($ch, CURLOPT_VERBOSE, true);

        if ($isPost) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }

        $retryCount = 3;
        $attempt = 0;

        do {
            $response = curl_exec($ch);
            $attempt++;
            if (curl_errno($ch)) {
                echo 'Attempt ' . $attempt . ': cURL Error: ' . curl_error($ch) . "\n";
                sleep(2); // Wait before retrying
            }
        } while (curl_errno($ch) && $attempt < $retryCount);

        if ($attempt >= $retryCount) {
            throw new Exception('Failed after ' . $retryCount . ' attempts');
        }

        curl_close($ch);

        return json_decode($response, true);
    }

    public function getEmbedding($text) {
        $url = "https://api.pinecone.io/embed";
        $data = [
            "model" => "multilingual-e5-large",
            "parameters" => [
                "input_type" => "query",
                "truncate" => "END"
            ],
            "inputs" => [
                ["text" => $text]
            ]
        ];
        return $this->sendRequest($url, $data);
    }

    public function upsertVectors($vectors) {
        $url = $this->indexUrl . "/vectors/upsert";
        $data = [
            "vectors" => $vectors,
            "namespace" => 'product'
        ];
        return $this->sendRequest($url, $data);
    }

    public function searchData($data){
        $url = $this->indexUrl . "/query";
        return $this->sendRequest($url, $data);
    }
}
