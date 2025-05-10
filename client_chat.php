<?php
// Include this file to display the chat box
session_start();
// No login check needed - chat works for all users
?>
<!-- Ensure jQuery is loaded -->
<script>
    if (typeof jQuery === 'undefined') {
        document.write('<script src="https://code.jquery.com/jquery-3.6.0.min.js"><\/script>');
    }
</script>
<style>
    .chat-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 300px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        z-index: 9999;
        background-color: #fff;
        overflow: hidden;
        display: block !important;
    }
    .chat-header {
        background-color: #2c3e50;
        color: white;
        padding: 10px 15px;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .chat-body {
        height: 300px;
        overflow-y: auto;
        padding: 15px;
        display: block !important;
    }
    .chat-body.active {
        display: block !important;
    }
    .chat-message {
        margin-bottom: 10px;
        padding: 8px 12px;
        border-radius: 15px;
        max-width: 80%;
        word-wrap: break-word;
    }
    .client-message {
        background-color: #3498db;
        color: white;
        margin-left: auto;
    }
    .agent-message {
        background-color: #f1f1f1;
        color: #333;
    }
    .chat-input {
        display: block !important;
        padding: 10px;
        border-top: 1px solid #eee;
    }
    .chat-input.active {
        display: block !important;
    }
    .chat-input textarea {
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 8px;
        resize: none;
        height: 60px;
    }
    .chat-input button {
        width: 100%;
        background-color: #3498db;
        color: white;
        border: none;
        padding: 8px 0;
        margin-top: 5px;
        border-radius: 5px;
        cursor: pointer;
    }
    .chat-input button:hover {
        background-color: #2980b9;
    }
    .timestamp {
        font-size: 0.7rem;
        margin-top: 3px;
        color: #888;
    }
    .client-timestamp {
        text-align: right;
    }
    .agent-timestamp {
        text-align: left;
    }
    .message-container {
        display: flex;
        flex-direction: column;
    }
    .no-messages {
        text-align: center;
        color: #888;
        margin-top: 120px;
    }
</style>

<div class="chat-container">
    <div class="chat-header">
        <span>Chat with Agent</span>
        <span class="toggle-chat"><i class="fa fa-comments"></i></span>
    </div>
    <div class="chat-body" id="chatBody">
        <!-- Messages will be loaded here -->
        <div class="no-messages" id="noMessages">
            <i class="fa fa-comments-o fa-3x"></i>
            <p>No messages yet. Start a conversation!</p>
        </div>
    </div>
    <div class="chat-input" id="chatInput">
        <textarea id="messageContent" placeholder="Type your message here..."></textarea>
        <button id="sendMessage">Send Message</button>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Load messages when page loads
        loadMessages();
        
        // Toggle chat window
        $('.toggle-chat').click(function() {
            $('#chatBody').toggleClass('active');
            $('#chatInput').toggleClass('active');
            
            // If chat is opened, load messages
            if ($('#chatBody').hasClass('active')) {
                loadMessages();
            }
        });
        
        // Send message
        $('#sendMessage').click(function() {
            sendMessage();
        });
        
        // Allow sending message with Enter key (Shift+Enter for new line)
        $('#messageContent').keydown(function(e) {
            if (e.keyCode === 13 && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });
        
        // Function to send message
        function sendMessage() {
            var messageContent = $('#messageContent').val().trim();
            if (messageContent !== '') {
                // Disable button while sending
                $('#sendMessage').prop('disabled', true);
                
                $.ajax({
                    url: 'send_message.php',
                    type: 'POST',
                    data: {
                        message_content: messageContent
                    },
                    success: function(response) {
                        // Clear textarea
                        $('#messageContent').val('');
                        
                        // Reload messages
                        loadMessages();
                        
                        // Enable button
                        $('#sendMessage').prop('disabled', false);
                    },
                    error: function() {
                        alert('Error sending message. Please try again.');
                        $('#sendMessage').prop('disabled', false);
                    }
                });
            }
        }
        
        // Function to load messages
        function loadMessages() {
            $.ajax({
                url: 'get_messages.php',
                type: 'GET',
                success: function(response) {
                    $('#chatBody').html(response);
                    
                    // Scroll to bottom of chat
                    $('#chatBody').scrollTop($('#chatBody')[0].scrollHeight);
                    
                    // Hide "no messages" if there are messages
                    if ($('.message-container').length > 0) {
                        $('#noMessages').hide();
                    } else {
                        $('#noMessages').show();
                    }
                }
            });
        }
        
        // Auto-refresh messages every 10 seconds when chat is open
        setInterval(function() {
            if ($('#chatBody').hasClass('active')) {
                loadMessages();
            }
        }, 10000);
    });
</script>
