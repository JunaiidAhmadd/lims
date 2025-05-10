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

// Verify this client is assigned to this agent
$sql = "SELECT client_id FROM client WHERE client_id = ? AND agent_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $client_id, $agent_id);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

if ($result->num_rows == 0) {
    echo "You are not authorized to send messages to this client";
    exit;
}

// Insert message into database
$sql = "INSERT INTO messages (client_id, agent_id, message_content, sent_by)
        VALUES (?, ?, ?, 'agent')";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $client_id, $agent_id, $message_content);

if ($stmt->execute()) {
    echo "Message sent successfully";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
