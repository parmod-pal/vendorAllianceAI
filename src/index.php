<?php
require_once 'PineconeClient.php';
require_once 'ProductSearch.php';

// Configuration
$apiKey = "c396b6ae-290f-4d30-a603-47841e650bf9"; // Replace with your actual API key
$indexUrl = "https://vendoralliance-2ynjzoy.svc.aped-4627-b74a.pinecone.io"; // Replace with your actual index host

// Initialize clients
$pineconeClient = new PineconeClient($apiKey, $indexUrl);
$productSearch = new ProductSearch($pineconeClient);

$products = [
    [
        "id" => "A",
        "description" => "A beautiful Christmas gift for a client.",
        "metadata" => ["occasion" => "Christmas", "type" => "gift"]
    ],
    [
        "id" => "B",
        "description" => "An elegant and thoughtful gift for holiday celebrations.",
        "metadata" => ["occasion" => "Christmas", "type" => "gift"]
    ],    
    [
        "id" => "C",
        "description" => "A delightful birthday present for a colleague.",
        "metadata" => ["occasion" => "Birthday", "type" => "gift"]
    ],
    [
        "id" => "D",
        "description" => "A sophisticated anniversary gift for a special friend.",
        "metadata" => ["occasion" => "Anniversary", "type" => "gift"]
    ],
    [
        "id" => "E",
        "description" => "A cheerful New Year's Eve gift for a party host.",
        "metadata" => ["occasion" => "New Year's Eve", "type" => "gift"]
    ],
    [
        "id" => "F",
        "description" => "A lovely Valentine's Day gift for a partner.",
        "metadata" => ["occasion" => "Valentine's Day", "type" => "gift"]
    ],
    [
        "id" => "G",
        "description" => "A thoughtful Thanksgiving gift for a family member.",
        "metadata" => ["occasion" => "Thanksgiving", "type" => "gift"]
    ],
    [
        "id" => "H",
        "description" => "A festive Easter gift for a child.",
        "metadata" => ["occasion" => "Easter", "type" => "gift"]
    ],
    [
        "id" => "I",
        "description" => "A memorable wedding gift for a close friend.",
        "metadata" => ["occasion" => "Wedding", "type" => "gift"]
    ],
    [
        "id" => "J",
        "description" => "A creative graduation gift for a new graduate.",
        "metadata" => ["occasion" => "Graduation", "type" => "gift"]
    ],
    [
        "id" => "K",
        "description" => "A special Mother's Day gift for a loving mom.",
        "metadata" => ["occasion" => "Mother's Day", "type" => "gift"]
    ],
    [
        "id" => "L",
        "description" => "A charming Father's Day gift for a caring dad.",
        "metadata" => ["occasion" => "Father's Day", "type" => "gift"]
    ],
    [
        "id" => "M",
        "description" => "A fun Halloween gift for a trick-or-treater.",
        "metadata" => ["occasion" => "Halloween", "type" => "gift"]
    ],
    [
        "id" => "N",
        "description" => "A cozy winter holiday gift for a friend.",
        "metadata" => ["occasion" => "Winter Holiday", "type" => "gift"]
    ],
    [
        "id" => "O",
        "description" => "A thoughtful housewarming gift for a new homeowner.",
        "metadata" => ["occasion" => "Housewarming", "type" => "gift"]
    ]
];


// Upsert products
//$productSearch->upsertProducts($products);

// Query for top 5 Christmas gift products
$query = "gift for new homeowner";
$searchResults = $productSearch->searchProducts($query,5);

echo '<pre>'; print_r($searchResults); echo '</pre>';
