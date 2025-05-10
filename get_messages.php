<?php
session_start();
include 'connection.php';

// Determine client ID based on login status
if (isset($_SESSION["username"])) {
    // For logged-in users
    $client_id = $_SESSION["username"];
    $client_type = "client";
} elseif (isset($_SESSION["guest_id"])) {
    // For guests who have sent a message
    $client_id = $_SESSION["guest_id"];
    $client_type = "guest";
} else {
    // For new visitors - create a temporary guest ID
    $client_id = 'guest_' . time() . '_' . rand(1000, 9999);
    $_SESSION["guest_id"] = $client_id;
    $client_type = "guest";
    
    echo "<div class='no-messages'>
            <i class='fa fa-comments-o fa-3x'></i>
            <p>No messages yet. Start a conversation!</p>
          </div>";
    exit;
}

// Get messages for this client/guest
// First try to get messages for this specific client
$sql = "SELECT * FROM messages WHERE client_id = ? ORDER BY timestamp ASC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $client_id);

// If no results, check if there was a database error
if ($result === FALSE) {
    echo "<!-- SQL Error: " . $conn->error . " -->";
}

if ($result->num_rows > 0) {
    // Output messages
    while($row = $result->fetch_assoc()) {
        // Determine message class based on sender
        if ($row["sent_by"] == "client" || $row["sent_by"] == "guest") {
            $message_class = "client-message";
            $timestamp_class = "client-timestamp";
        } else {
            $message_class = "agent-message";
            $timestamp_class = "agent-timestamp";
        }
        
        $timestamp = date("M d, g:i a", strtotime($row["timestamp"]));
        
        echo "<div class='message-container'>";
        echo "<div class='chat-message $message_class'>" . htmlspecialchars($row["message_content"]) . "</div>";
        echo "<div class='timestamp $timestamp_class'>" . $timestamp . "</div>";
        echo "</div>";
    }
    
    // Mark messages as read if they were sent by agent
    $sql = "UPDATE messages SET is_read = 1 WHERE client_id = ? AND sent_by = 'agent' AND is_read = 0";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $client_id);
    $stmt->execute();
    $stmt->close();


} else {
    echo "<div class='no-messages'>
            <i class='fa fa-comments-o fa-3x'></i>
            <p>No messages yet. Start a conversation!</p>
          </div>";
}

$conn->close();
?>
