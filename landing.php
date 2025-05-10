<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aegon Life Insurance - Home</title>

    <!-- BOOTSTRAP & FONTAWESOME CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .hero-section {
            background-color: #f8f9fa;
            padding: 80px 0;
            margin-bottom: 40px;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: #333;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #666;
        }
        .services-section {
            padding: 60px 0;
        }
        .service-card {
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
        }
        .contact-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }
        .navbar-custom {
            background-color: #2c3e50;
            padding: 15px 0;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #fff;
        }
        .navbar-custom .nav-link:hover {
            color: #3498db;
        }
        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        .footer {
            background-color: #2c3e50;
            color: #fff;
            padding: 40px 0;
        }
        .footer h5 {
            color: #3498db;
        }
        .footer a {
            color: #ecf0f1;
        }
        .footer a:hover {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="landing.php">Aegon Life</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon text-light">☰</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="landing.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="packages.php">Packages</a></li>
                <li class="nav-item"><a class="nav-link" href="faq.php">FAQs</a></li>
                <li class="nav-item"><a class="nav-link" href="payment_info.php">Payment Info</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-light" href="index.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Secure Your Future with Aegon Life</h1>
                <p>We provide comprehensive life insurance solutions tailored to your needs. Protect your loved ones and ensure financial security for your family.</p>
                <a href="#" class="btn btn-primary btn-lg">Explore Our Packages</a>
            </div>
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500x350" alt="Life Insurance" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Our Services</h2>
            <p>Comprehensive insurance solutions for every stage of life</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service-card text-center">
                    <i class="fa fa-shield fa-4x mb-3 text-primary"></i>
                    <h4>Life Protection</h4>
                    <p>Secure financial protection for your loved ones in case of unforeseen events.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card text-center">
                    <i class="fa fa-graduation-cap fa-4x mb-3 text-primary"></i>
                    <h4>Education Planning</h4>
                    <p>Ensure your children's education is secured regardless of life's uncertainties.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card text-center">
                    <i class="fa fa-home fa-4x mb-3 text-primary"></i>
                    <h4>Retirement Planning</h4>
                    <p>Plan for a comfortable retirement with our specialized insurance packages.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Our Mission</h2>
                <p>At Aegon Life, our mission is to provide financial security and peace of mind to our clients through reliable insurance solutions. We believe in building long-term relationships based on trust, transparency, and exceptional service.</p>
                <p>With decades of experience in the insurance industry, we understand the unique needs of individuals and families at different stages of life.</p>
            </div>
            <div class="col-md-6">
                <h2>Why Choose Us?</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light"><i class="fa fa-check text-primary mr-2"></i> Customized insurance solutions</li>
                    <li class="list-group-item bg-light"><i class="fa fa-check text-primary mr-2"></i> Transparent policies with no hidden fees</li>
                    <li class="list-group-item bg-light"><i class="fa fa-check text-primary mr-2"></i> Quick and hassle-free claims process</li>
                    <li class="list-group-item bg-light"><i class="fa fa-check text-primary mr-2"></i> Dedicated customer support</li>
                    <li class="list-group-item bg-light"><i class="fa fa-check text-primary mr-2"></i> Competitive premium rates</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Contact Us</h3>
                <p><i class="fa fa-map-marker mr-2"></i> 123 Insurance Street, Financial District</p>
                <p><i class="fa fa-phone mr-2"></i> +1 (123) 456-7890</p>
                <p><i class="fa fa-envelope mr-2"></i> info@aegonlife.com</p>
            </div>
            <div class="col-md-4">
                <h3>Business Hours</h3>
                <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p>Saturday: 10:00 AM - 2:00 PM</p>
                <p>Sunday: Closed</p>
            </div>
            <div class="col-md-4">
                <h3>Quick Links</h3>
                <p><a href="#">FAQs</a></p>
                <p><a href="#">Insurance Packages</a></p>
                <p><a href="#">Payment Information</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Aegon Life Insurance</h5>
                <p>Providing reliable insurance solutions since 1995.</p>
            </div>
            <div class="col-md-3">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Connect With Us</h5>
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook mr-3"></i></a>
                    <a href="#"><i class="fa fa-twitter mr-3"></i></a>
                    <a href="#"><i class="fa fa-linkedin mr-3"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr class="my-4">
        <div class="text-center">
            <p>&copy; 2025 Aegon Life Insurance. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Chat Functionality -->
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
        display: none;
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
        display: none;
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
        // Show chat window by default for testing
        $('#chatBody').addClass('active');
        $('#chatInput').addClass('active');
        
        // Load messages when page loads
        loadMessages();
        
        // Toggle chat window
        $('.toggle-chat').click(function() {
            $('#chatBody').toggleClass('active');
            $('#chatInput').toggleClass('active');
            
            // If chat is opened, load messages
            if ($('#chatBody').hasClass('active')) {
                loadMessages();
                console.log('Chat opened');
            } else {
                console.log('Chat closed');
            }
        });
        
        // Ensure the chat icon is clickable
        $('.chat-header').css('cursor', 'pointer');
        
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
</body>
</html>
