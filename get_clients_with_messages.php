<?php
session_start();
include 'connection.php';

// Check if agent is logged in
if (!isset($_SESSION["username"])) {
    echo "<div class='text-center' style='padding: 20px;'>Please log in to view clients</div>";
    exit;
}

$agent_id = $_SESSION["username"];

// Get clients who have sent messages to this agent
$sql = "SELECT DISTINCT c.client_id, c.name, 
        (SELECT COUNT(*) FROM messages WHERE client_id = c.client_id AND agent_id = '$agent_id' AND sent_by = 'client' AND is_read = 0) as unread_count,
        (SELECT message_content FROM messages WHERE client_id = c.client_id AND agent_id = '$agent_id' ORDER BY timestamp DESC LIMIT 1) as last_message,
        (SELECT timestamp FROM messages WHERE client_id = c.client_id AND agent_id = '$agent_id' ORDER BY timestamp DESC LIMIT 1) as last_timestamp
        FROM client c
        INNER JOIN messages m ON c.client_id = m.client_id
        WHERE c.agent_id = '$agent_id'
        GROUP BY c.client_id
        ORDER BY last_timestamp DESC";

$result = $conn->query($sql);

// Header for clients list
echo "<div class='list-header' style='padding: 15px; background-color: #f5f5f5; border-bottom: 1px solid #ddd;'>";
echo "<h4 style='margin: 0;'>Clients</h4>";
echo "<button class='refresh-button' id='refreshClients'><i class='fa fa-refresh'></i> Refresh</button>";
echo "</div>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $unread_indicator = ($row["unread_count"] > 0) ? "<span class='unread-indicator'></span>" : "";
        $last_message = $row["last_message"] ?? "No messages yet";
        
        echo "<div class='client-item' data-client-id='" . $row["client_id"] . "'>";
        echo $unread_indicator . "<div class='client-name'>" . htmlspecialchars($row["name"]) . "</div>";
        echo "<div class='last-message'>" . htmlspecialchars(substr($last_message, 0, 40)) . (strlen($last_message) > 40 ? "..." : "") . "</div>";
        echo "</div>";
    }
} else {
    // Get all clients assigned to this agent even if they haven't sent messages
    $sql = "SELECT client_id, name FROM client WHERE agent_id = '$agent_id' ORDER BY name";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='client-item' data-client-id='" . $row["client_id"] . "'>";
            echo "<div class='client-name'>" . htmlspecialchars($row["name"]) . "</div>";
            echo "<div class='last-message'>No messages yet</div>";
            echo "</div>";
        }
    } else {
        echo "<div class='text-center' style='padding: 20px;'>";
        echo "<p>No clients assigned to you</p>";
        echo "</div>";
    }
}

$conn->close();
?>
