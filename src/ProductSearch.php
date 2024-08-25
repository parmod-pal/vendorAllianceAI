<?php
class ProductSearch {
    private $pineconeClient;

    public function __construct($pineconeClient) {
        $this->pineconeClient = $pineconeClient;
    }

    public function upsertProducts($products) {
        foreach ($products as $product) {
            $embedding = $this->pineconeClient->getEmbedding($product['description']);
            if (isset($embedding['data'][0]['values'])) {
                $vector = [
                    "id" => $product['id'],
                    "values" => $embedding['data'][0]['values'],
                    "metadata" => $product['metadata'] ?? []
                ];
                $upsertStatus = $this->pineconeClient->upsertVectors([$vector]);
                echo "Upserted Product ID: " . $product['id'] . "\n";
            } else {
                echo "Failed to get embedding for Product ID: " . $product['id'] . "\n";
            }
        }
    }

    public function searchProducts($query, $topK = 5) {
        $embedding = $this->pineconeClient->getEmbedding($query);
        if (isset($embedding['data'][0]['values'])) {
            $searchData = [
                "namespace" => "product",
                "topK" => $topK,                
                "vector" => $embedding['data'][0]['values'],
                "includeValues" => true,
                "includeMetadata" => true
            ];
            $results = $this->pineconeClient->searchData($searchData);
            $productDetails = [];
            foreach ($results['matches'] as $match) {
                $productDetails[] = [
                    'id' => $match['id'],                    
                    'occasion' => $match['metadata']['occasion'],
                    'type' => $match['metadata']['type']
                ];
            }

            return $productDetails;
        } else {
            throw new Exception("Failed to get embedding for search query.");
        }
    }
}
