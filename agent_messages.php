<?php
session_start();
include 'connection.php';

// Check if agent is logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

$username = $_SESSION["username"];

// Check if user is an agent
$sql = "SELECT agent_id FROM agent WHERE agent_id = '$username'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agent Messages</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- jQuery -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <style>
        .chat-container {
            display: flex;
            height: calc(100vh - 200px);
            margin-top: 20px;
        }
        .clients-list {
            width: 300px;
            border-right: 1px solid #ddd;
            overflow-y: auto;
        }
        .chat-area {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .client-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .client-item:hover {
            background-color: #f5f5f5;
        }
        .client-item.active {
            background-color: #e7f1ff;
            border-left: 4px solid #3498db;
        }
        .client-name {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .last-message {
            color: #888;
            font-size: 0.9rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .unread-indicator {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: #e74c3c;
            border-radius: 50%;
            margin-right: 5px;
        }
        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #f9f9f9;
        }
        .chat-input-area {
            padding: 15px;
            border-top: 1px solid #ddd;
            background-color: #fff;
        }
        .message-bubble {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 15px;
            margin-bottom: 15px;
            position: relative;
        }
        .client-bubble {
            background-color: #f1f1f1;
            float: left;
            clear: both;
            border-bottom-left-radius: 5px;
        }
        .agent-bubble {
            background-color: #3498db;
            color: white;
            float: right;
            clear: both;
            border-bottom-right-radius: 5px;
        }
        .message-time {
            font-size: 0.7rem;
            color: #888;
            margin-top: 5px;
            display: block;
        }
        .agent-time {
            text-align: right;
        }
        .client-time {
            text-align: left;
        }
        .message-input {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            resize: none;
            height: 80px;
        }
        .send-button {
            margin-top: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }
        .send-button:hover {
            background-color: #2980b9;
        }
        .no-messages {
            text-align: center;
            color: #888;
            margin-top: 100px;
        }
        .no-client-selected {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            color: #888;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        .client-info {
            padding: 15px;
            background-color: #f5f5f5;
            border-bottom: 1px solid #ddd;
        }
        .refresh-button {
            background-color: transparent;
            border: none;
            color: #3498db;
            cursor: pointer;
            float: right;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <?php include 'header.php'; ?>
        
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Client Messages</h1>
                    </div>
                </div>
                
                <div class="chat-container">
                    <!-- Clients List -->
                    <div class="clients-list" id="clientsList">
                        <div class="list-header" style="padding: 15px; background-color: #f5f5f5; border-bottom: 1px solid #ddd;">
                            <h4 style="margin: 0;">Clients</h4>
                            <button class="refresh-button" id="refreshClients"><i class="fa fa-refresh"></i> Refresh</button>
                        </div>
                        <!-- Client list will be loaded here -->
                        <div class="text-center" style="padding: 20px;">
                            <i class="fa fa-spinner fa-spin fa-2x"></i>
                            <p>Loading clients...</p>
                        </div>
                    </div>
                    
                    <!-- Chat Area -->
                    <div class="chat-area">
                        <div class="no-client-selected" id="noClientSelected">
                            <i class="fa fa-comments-o fa-4x"></i>
                            <p>Select a client to view messages</p>
                        </div>
                        
                        <div id="chatInterface" style="display: none; height: 100%; display: flex; flex-direction: column;">
                            <div class="client-info" id="clientInfo">
                                <!-- Client info will be displayed here -->
                            </div>
                            
                            <div class="chat-messages" id="chatMessages">
                                <!-- Messages will be loaded here -->
                            </div>
                            
                            <div class="chat-input-area">
                                <textarea class="message-input" id="messageInput" placeholder="Type your message here..."></textarea>
                                <button class="send-button" id="sendButton">Send</button>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
    
    <script>
        $(document).ready(function() {
            var currentClientId = null;
            
            // Load clients with messages
            loadClients();
            
            // Refresh clients list
            $('#refreshClients').click(function() {
                loadClients();
            });
            
            // Send message
            $('#sendButton').click(function() {
                sendMessage();
            });
            
            // Allow sending message with Enter key (Shift+Enter for new line)
            $('#messageInput').keydown(function(e) {
                if (e.keyCode === 13 && !e.shiftKey) {
                    e.preventDefault();
                    sendMessage();
                }
            });
            
            // Function to load clients with messages
            function loadClients() {
                $.ajax({
                    url: 'get_clients_with_messages.php',
                    type: 'GET',
                    success: function(response) {
                        $('#clientsList').html(response);
                        
                        // Add click event to client items
                        $('.client-item').click(function() {
                            $('.client-item').removeClass('active');
                            $(this).addClass('active');
                            
                            currentClientId = $(this).data('client-id');
                            var clientName = $(this).find('.client-name').text();
                            
                            // Show client info
                            $('#clientInfo').html('<h4>' + clientName + '</h4>');
                            
                            // Show chat interface
                            $('#noClientSelected').hide();
                            $('#chatInterface').show();
                            
                            // Load messages for this client
                            loadMessages(currentClientId);
                        });
                        
                        // If a client was previously selected, keep it selected
                        if (currentClientId) {
                            $('.client-item[data-client-id="' + currentClientId + '"]').addClass('active');
                        }
                    }
                });
            }
            
            // Function to load messages for a client
            function loadMessages(clientId) {
                $.ajax({
                    url: 'get_agent_messages.php',
                    type: 'GET',
                    data: {
                        client_id: clientId
                    },
                    success: function(response) {
                        $('#chatMessages').html(response);
                        
                        // Scroll to bottom of chat
                        $('#chatMessages').scrollTop($('#chatMessages')[0].scrollHeight);
                    }
                });
            }
            
            // Function to send message
            function sendMessage() {
                var messageContent = $('#messageInput').val().trim();
                if (messageContent !== '' && currentClientId) {
                    // Disable button while sending
                    $('#sendButton').prop('disabled', true);
                    
                    $.ajax({
                        url: 'send_agent_message.php',
                        type: 'POST',
                        data: {
                            client_id: currentClientId,
                            message_content: messageContent
                        },
                        success: function(response) {
                            // Clear textarea
                            $('#messageInput').val('');
                            
                            // Reload messages
                            loadMessages(currentClientId);
                            
                            // Enable button
                            $('#sendButton').prop('disabled', false);
                        },
                        error: function() {
                            alert('Error sending message. Please try again.');
                            $('#sendButton').prop('disabled', false);
                        }
                    });
                }
            }
            
            // Auto-refresh messages every 10 seconds
            setInterval(function() {
                if (currentClientId) {
                    loadMessages(currentClientId);
                }
            }, 10000);
            
            // Auto-refresh clients list every 30 seconds
            setInterval(function() {
                loadClients();
            }, 30000);
        });
    </script>
</body>
</html>
