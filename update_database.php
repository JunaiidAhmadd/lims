<?php
// Script to update the messages table to support guest chat functionality
include 'connection.php';

// SQL to alter the messages table
$sql = "ALTER TABLE `messages` 
        MODIFY COLUMN `sent_by` enum('client','agent','guest') NOT NULL;";

// Execute the SQL
if ($conn->query($sql) === TRUE) {
    echo "Messages table updated successfully to support guest chat!";
} else {
    echo "Error updating messages table: " . $conn->error;
}

$conn->close();
?>
