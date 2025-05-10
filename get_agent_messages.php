<?php
session_start();
include 'connection.php';

// Check if agent is logged in
if (!isset($_SESSION["username"])) {
    echo "<div class='no-messages'>Please log in to view messages</div>";
    exit;
}

$agent_id = $_SESSION["username"];
$client_id = $_GET['client_id'] ?? '';

if (empty($client_id)) {
    echo "<div class='no-messages'>Invalid client selected</div>";
    exit;
}

// Verify this client is assigned to this agent
$sql = "SELECT name FROM client WHERE client_id = '$client_id' AND agent_id = '$agent_id'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<div class='no-messages'>You are not authorized to view messages for this client</div>";
    exit;
}

// Get messages between this agent and client
$sql = "SELECT * FROM messages WHERE client_id = '$client_id' AND agent_id = '$agent_id' ORDER BY timestamp ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output messages
    while($row = $result->fetch_assoc()) {
        $message_class = ($row["sent_by"] == "client") ? "client-bubble" : "agent-bubble";
        $time_class = ($row["sent_by"] == "client") ? "client-time" : "agent-time";
        $timestamp = date("M d, g:i a", strtotime($row["timestamp"]));
        
        echo "<div class='message-bubble $message_class'>";
        echo htmlspecialchars($row["message_content"]);
        echo "<span class='message-time $time_class'>" . $timestamp . "</span>";
        echo "</div>";
        echo "<div class='clearfix'></div>";
    }
    
    // Mark messages as read if they were sent by client
    $sql = "UPDATE messages SET is_read = 1 WHERE client_id = '$client_id' AND agent_id = '$agent_id' AND sent_by = 'client' AND is_read = 0";
    $conn->query($sql);
} else {
    echo "<div class='no-messages'>";
    echo "<i class='fa fa-comments-o fa-3x'></i>";
    echo "<p>No messages yet with this client</p>";
    echo "</div>";
}

$conn->close();
?>
