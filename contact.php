<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aegon Life Insurance - Contact Us</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet">
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet">
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
        .navbar-custom {
            background-color: #2c3e50;
            padding: 15px 0;
        }
        .navbar-custom .navbar-brand {
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
        }
        .navbar-custom .nav-link {
            color: #fff;
            font-size: 1.1rem;
            margin: 0 10px;
        }
        .navbar-custom .nav-link:hover {
            color: #3498db;
        }
        .contact-header {
            background-color: #f8f9fa;
            padding: 50px 0;
            margin-bottom: 30px;
        }
        .contact-info-card {
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .contact-info-card:hover {
            transform: translateY(-10px);
        }
        .contact-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #3498db;
        }
        .footer {
            background-color: #2c3e50;
            color: #fff;
            padding: 40px 0;
            margin-top: 50px;
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
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        .btn-contact {
            background-color: #3498db;
            border-color: #3498db;
            padding: 10px 25px;
            font-weight: bold;
        }
        .btn-contact:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        #map {
            height: 400px;
            width: 100%;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="landing.php">Aegon Life</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="landing.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="packages.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="payment_info.php">Payment Info</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light" href="index.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Header -->
    <header class="contact-header">
        <div class="container text-center">
            <h1>Contact Us</h1>
            <p class="lead">We're here to help with any questions you may have</p>
        </div>
    </header>

    <!-- Contact Information Section -->
    <section class="container mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h4>Our Location</h4>
                    <p>123 Insurance Street<br>Financial District<br>City, State 12345</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h4>Phone Numbers</h4>
                    <p>Main Office: +1 (123) 456-7890<br>Customer Support: +1 (123) 456-7891<br>Claims: +1 (123) 456-7892</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h4>Email Addresses</h4>
                    <p>General Inquiries: info@aegonlife.com<br>Customer Support: support@aegonlife.com<br>Claims: claims@aegonlife.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="container mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Send Us a Message</h2>
                <form id="contactForm" action="process_contact.php" method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select class="form-control" id="subject" name="subject" required>
                            <option value="">Select a subject</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Policy Question">Policy Question</option>
                            <option value="Claims">Claims</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-contact">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="mb-4">Our Location</h2>
                <div id="map" class="mb-4">
                    <!-- Map will be replaced with an image for simplicity -->
                    <img src="assets/img/map.jpg" alt="Office Location Map" class="img-fluid" style="height: 400px; width: 100%; object-fit: cover; border-radius: 5px;" onerror="this.src='assets/img/user.png'">
                </div>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Business Hours</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM</li>
                            <li><strong>Saturday:</strong> 10:00 AM - 2:00 PM</li>
                            <li><strong>Sunday:</strong> Closed</li>
                        </ul>
                        <p class="mb-0">Our customer support hotline is available 24/7 for emergencies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="container mb-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Frequently Asked Contact Questions</h4>
            </div>
            <div class="card-body">
                <div class="accordion" id="contactFaqAccordion">
                    <div class="card mb-0 border-0">
                        <div class="card-header" id="contactHeadingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#contactCollapseOne" aria-expanded="true" aria-controls="contactCollapseOne">
                                    What is the typical response time for inquiries?
                                </button>
                            </h5>
                        </div>
                        <div id="contactCollapseOne" class="collapse show" aria-labelledby="contactHeadingOne" data-parent="#contactFaqAccordion">
                            <div class="card-body">
                                We strive to respond to all inquiries within 24-48 hours during business days. For urgent matters, please call our customer support hotline.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 border-0">
                        <div class="card-header" id="contactHeadingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#contactCollapseTwo" aria-expanded="false" aria-controls="contactCollapseTwo">
                                    How can I schedule an appointment with an insurance advisor?
                                </button>
                            </h5>
                        </div>
                        <div id="contactCollapseTwo" class="collapse" aria-labelledby="contactHeadingTwo" data-parent="#contactFaqAccordion">
                            <div class="card-body">
                                You can schedule an appointment by calling our office, using the contact form on this page, or by emailing us at appointments@aegonlife.com. Please provide your preferred date and time, and we'll confirm availability.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 border-0">
                        <div class="card-header" id="contactHeadingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#contactCollapseThree" aria-expanded="false" aria-controls="contactCollapseThree">
                                    Do you have multiple branch locations?
                                </button>
                            </h5>
                        </div>
                        <div id="contactCollapseThree" class="collapse" aria-labelledby="contactHeadingThree" data-parent="#contactFaqAccordion">
                            <div class="card-body">
                                Yes, we have several branch offices throughout the region. Please call our main office for information about the branch nearest to you.
                            </div>
                        </div>
                    </div>
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
                        <li><a href="landing.php">Home</a></li>
                        <li><a href="packages.php">Packages</a></li>
                        <li><a href="faq.php">FAQs</a></li>
                        <li><a href="contact.php">Contact</a></li>
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

    <!-- SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        // Form validation
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                // Basic form validation would go here
                // For now, just prevent the form from submitting since we don't have a backend processor
                e.preventDefault();
                alert('Thank you for your message. We will get back to you soon!');
                $('#contactForm')[0].reset();
            });

            // Bootstrap 4 accordion functionality
            $('.btn-link').click(function() {
                $(this).toggleClass('collapsed');
                var target = $(this).data('target');
                $(target).toggleClass('show');
            });
        });
    </script>
</body>
</html>
