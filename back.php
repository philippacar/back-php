<?php
// Receiving data from a POST request
$data = json_decode(file_get_contents('php://input'), true);

// Check for data availability
if (isset($data['message'])) {
     // Process the data (in this case, just return it back)
     $response = array('status' => 'success', 'message' => $data['message']);
} else {
     // If the data is missing, generate an error
     $response = array('status' => 'error', 'message' => 'No message received');
}

// Set headers for the correct response in JSON format
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allow cross-domain requests

// Return the result in JSON format
echo json_encode($response);
?>
