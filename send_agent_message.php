<?php
session_start();
include 'connection.php';

// Check if agent is logged in
if (!isset($_SESSION["username"])) {
    echo "Not logged in";
    exit;
}

$agent_id = $_SESSION["username"];
$client_id = $_POST['client_id'] ?? '';
$message_content = $_POST['message_content'] ?? '';

// Validate input
if (empty($client_id) || empty($message_content)) {
    echo "Missing required parameters";
    exit;
}

// Sanitize input
$client_id = mysqli_real_escape_string($conn, $client_id);
$message_content = mysqli_real_escape_string($conn, $message_content);

// Verify this client is assigned to this agent
$sql = "SELECT client_id FROM client WHERE client_id = '$client_id' AND agent_id = '$agent_id'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "You are not authorized to send messages to this client";
    exit;
}

// Insert message into database
$sql = "INSERT INTO messages (client_id, agent_id, message_content, sent_by) 
        VALUES ('$client_id', '$agent_id', '$message_content', 'agent')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
