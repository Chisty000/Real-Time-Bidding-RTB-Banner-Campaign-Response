<?php

// Step 1: Read the JSON data from the file (replace 'bid.json' with the correct path to your file)
$jsonString = file_get_contents('bid.json');

// Step 2: Decode the JSON string into a PHP associative array
$data = json_decode($jsonString, true);

// Step 3: Check if the 'imp' key exists in the data
print_r($data)
?>