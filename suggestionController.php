<?php

// BoredAPI endpoint URL
$url = 'https://www.boredapi.com/api/activity';

// Fetch the data from the API endpoint
$response = file_get_contents($url);

// Process the response
$data = json_decode($response, true); // Convert the JSON response to a PHP array

// Display the data on the page
echo '<pre>';
print_r($data["activity"]);
echo '</pre>';

?>