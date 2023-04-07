<?php
// API endpoint
$url = 'https://icanhazdadjoke.com/';

// Set headers to specify that we want to receive a JSON response
$options = array(
  'http' => array(
    'header' => "Accept: application/json\r\n"
  )
);

// Create a stream context to set the headers
$context = stream_context_create($options);

// Fetch the data from the API
$data = file_get_contents($url, false, $context);

// Decode the JSON response
$joke = json_decode($data, true);

// Display the joke
echo '<pre>';
print_r($joke["joke"]);
echo '</pre>';
?>