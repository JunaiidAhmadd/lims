<?php
session_start();
include 'connection.php';

// Get message content from POST request
$message_content = $_POST['message_content'] ?? '';

// Validate message content
if (empty($message_content)) {
    echo "Message cannot be empty";
    exit;
}

// Check if user is logged in
if (isset($_SESSION["username"])) {
    // Get client ID from session for logged-in users
    $client_id = $_SESSION["username"];
    
    // Get agent ID assigned to this client
    $sql = "SELECT agent_id FROM client WHERE client_id = '$client_id'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $client_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $agent_id = $row["agent_id"];
        
        // Insert message into database
        $sql = "INSERT INTO messages (client_id, agent_id, message_content, sent_by)
                VALUES (?, ?, ?, 'client')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $client_id, $agent_id, $message_content);
        
        if ($conn->query($sql) === TRUE) {
            echo "Message sent successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Client not found";
    }
} elseif (isset($_SESSION["guest_id"])) {
    // For guests who already have a session ID
    $client_id = $_SESSION["guest_id"];
    
    // Get a default agent (first agent in the system)
    $sql = "SELECT agent_id FROM agent LIMIT 1"; // No input used here, so no need for prepared statement on this specific query.
    $result = $conn->query($sql); // However, using prepared statements consistently is a good practice.
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $agent_id = $row["agent_id"];
        
        // Insert message into database
        $sql = "INSERT INTO messages (client_id, agent_id, message_content, sent_by)
                VALUES (?, ?, ?, 'guest')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $client_id, $agent_id, $message_content);

        
        if ($conn->query($sql) === TRUE) {
            echo "Message sent successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "No agents available";
    }
} else {
    // For new guests without a session ID
    $client_id = 'guest_' . time() . '_' . rand(1000, 9999); // Generate a temporary guest ID
    
    // Get a default agent (first agent in the system)
    $sql = "SELECT agent_id FROM agent LIMIT 1"; // No input used here, so no need for prepared statement on this specific query.
    $result = $conn->query($sql); // However, using prepared statements consistently is a good practice.
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $agent_id = $row["agent_id"];
        
        // Insert message into database
        $sql = "INSERT INTO messages (client_id, agent_id, message_content, sent_by)
                VALUES (?, ?, ?, 'guest')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $client_id, $agent_id, $message_content);

        
        if ($conn->query($sql) === TRUE) {
            // Store the guest ID in a session for continuity
            $_SESSION['guest_id'] = $client_id;
            echo "Message sent successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "No agents available";
    }
}

$conn->close();
?>
