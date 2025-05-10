<?php
// Debugging script to check message flow
session_start();
include 'connection.php';

echo "<h2>Chat Debugging Information</h2>";

// Check session variables
echo "<h3>Session Data:</h3>";
echo "Guest ID: " . (isset($_SESSION['guest_id']) ? $_SESSION['guest_id'] : "Not set") . "<br>";
echo "Username: " . (isset($_SESSION['username']) ? $_SESSION['username'] : "Not set") . "<br>";

// Check messages in database
echo "<h3>Messages in Database:</h3>";
$sql = "SELECT * FROM messages ORDER BY timestamp DESC LIMIT 20";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Client ID</th><th>Agent ID</th><th>Content</th><th>Sent By</th><th>Time</th><th>Read</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["message_id"] . "</td>";
        echo "<td>" . $row["client_id"] . "</td>";
        echo "<td>" . $row["agent_id"] . "</td>";
        echo "<td>" . $row["message_content"] . "</td>";
        echo "<td>" . $row["sent_by"] . "</td>";
        echo "<td>" . $row["timestamp"] . "</td>";
        echo "<td>" . $row["is_read"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No messages found in the database.";
}

// Check messages table structure
echo "<h3>Messages Table Structure:</h3>";
$sql = "SHOW COLUMNS FROM messages";
$result = $conn->query($sql);

if ($result) {
    echo "<table border='1'>";
    echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Field"] . "</td>";
        echo "<td>" . $row["Type"] . "</td>";
        echo "<td>" . $row["Null"] . "</td>";
        echo "<td>" . $row["Key"] . "</td>";
        echo "<td>" . $row["Default"] . "</td>";
        echo "<td>" . (isset($row["Extra"]) ? $row["Extra"] : "") . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Error getting table structure: " . $conn->error;
}

$conn->close();
?>
