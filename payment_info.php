<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aegon Life Insurance - Payment Information</title>
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
        .payment-header {
            background-color: #f8f9fa;
            padding: 50px 0;
            margin-bottom: 30px;
        }
        .payment-method {
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .payment-method:hover {
            transform: translateY(-5px);
        }
        .payment-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #3498db;
        }
        .bank-details {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 5px;
            margin-top: 30px;
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
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0,0,0,.05);
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
                    <li class="nav-item active">
                        <a class="nav-link" href="payment_info.php">Payment Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light" href="index.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Payment Header -->
    <header class="payment-header">
        <div class="container text-center">
            <h1>Payment Information</h1>
            <p class="lead">Learn about our payment options, methods, and procedures</p>
        </div>
    </header>

    <!-- Payment Methods Section -->
    <section class="container mb-5">
        <h2 class="mb-4">Payment Methods</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="payment-method text-center">
                    <div class="payment-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <h4>Credit/Debit Card</h4>
                    <p>We accept Visa, MasterCard, American Express, and Discover cards. Your card information is securely processed.</p>
                    <ul class="list-unstyled text-left">
                        <li><i class="fa fa-check text-success mr-2"></i> Instant processing</li>
                        <li><i class="fa fa-check text-success mr-2"></i> Secure transactions</li>
                        <li><i class="fa fa-check text-success mr-2"></i> Auto-renewal option</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-method text-center">
                    <div class="payment-icon">
                        <i class="fa fa-university"></i>
                    </div>
                    <h4>Bank Transfer</h4>
                    <p>Make direct transfers to our bank account. Please include your policy number as a reference.</p>
                    <ul class="list-unstyled text-left">
                        <li><i class="fa fa-check text-success mr-2"></i> No additional fees</li>
                        <li><i class="fa fa-check text-success mr-2"></i> Convenient for large payments</li>
                        <li><i class="fa fa-check text-success mr-2"></i> Suitable for recurring payments</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-method text-center">
                    <div class="payment-icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <h4>Cash/Check</h4>
                    <p>Visit our office to make payments in cash or by check. A receipt will be provided immediately.</p>
                    <ul class="list-unstyled text-left">
                        <li><i class="fa fa-check text-success mr-2"></i> No online transaction needed</li>
                        <li><i class="fa fa-check text-success mr-2"></i> Immediate confirmation</li>
                        <li><i class="fa fa-check text-success mr-2"></i> Personal assistance available</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Procedures -->
    <section class="container mb-5">
        <h2 class="mb-4">Payment Procedures</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Premium Payment Schedule</h4>
                    </div>
                    <div class="card-body">
                        <p>Your premium payment schedule depends on the frequency option you selected:</p>
                        <ul>
                            <li><strong>Monthly:</strong> Due on the same day each month</li>
                            <li><strong>Quarterly:</strong> Due every three months from the policy start date</li>
                            <li><strong>Semi-annually:</strong> Due every six months from the policy start date</li>
                            <li><strong>Annually:</strong> Due once a year on the policy anniversary date</li>
                        </ul>
                        <p><strong>Grace Period:</strong> A 30-day grace period is provided for all premium payments. If payment is not received within this period, your policy may lapse.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Late Payment Policy</h4>
                    </div>
                    <div class="card-body">
                        <p>If you miss a payment deadline:</p>
                        <ol>
                            <li>You have a 30-day grace period to make the payment without penalty</li>
                            <li>After the grace period, a late fee may be applied</li>
                            <li>If payment is not received within 90 days, your policy may lapse</li>
                            <li>A lapsed policy may be reinstated within a certain period by paying all outstanding premiums plus interest</li>
                        </ol>
                        <p>We recommend setting up automatic payments to avoid missing deadlines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bank Details -->
    <section class="container mb-5">
        <div class="bank-details">
            <h2 class="mb-4">Bank Account Details</h2>
            <p>For direct bank transfers, please use the following account information:</p>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Bank Name:</th>
                        <td>National Bank</td>
                    </tr>
                    <tr>
                        <th scope="row">Account Name:</th>
                        <td>Aegon Life Insurance Company Ltd.</td>
                    </tr>
                    <tr>
                        <th scope="row">Account Number:</th>
                        <td>1234567890123</td>
                    </tr>
                    <tr>
                        <th scope="row">Branch Code:</th>
                        <td>001234</td>
                    </tr>
                    <tr>
                        <th scope="row">SWIFT/BIC Code:</th>
                        <td>NATBANKXXX</td>
                    </tr>
                    <tr>
                        <th scope="row">IBAN:</th>
                        <td>NB12 3456 7890 1234 5678 90</td>
                    </tr>
                </tbody>
            </table>
            <div class="alert alert-info mt-3">
                <i class="fa fa-info-circle mr-2"></i> Please include your policy number as a reference when making a bank transfer.
            </div>
        </div>
    </section>

    <!-- Payment FAQs -->
    <section class="container mb-5">
        <h2 class="mb-4">Payment FAQs</h2>
        <div class="accordion" id="paymentFaqAccordion">
            <div class="card mb-3">
                <div class="card-header" id="paymentHeadingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#paymentCollapseOne" aria-expanded="true" aria-controls="paymentCollapseOne">
                            How can I check if my payment was received?
                        </button>
                    </h5>
                </div>
                <div id="paymentCollapseOne" class="collapse show" aria-labelledby="paymentHeadingOne" data-parent="#paymentFaqAccordion">
                    <div class="card-body">
                        <p>You can verify your payment status in several ways:</p>
                        <ul>
                            <li>Log in to your account on our website</li>
                            <li>Contact our customer service at 1-800-123-4567</li>
                            <li>Check your email for payment confirmation (if you've provided an email address)</li>
                            <li>Visit our office with your policy number and ID</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header" id="paymentHeadingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#paymentCollapseTwo" aria-expanded="false" aria-controls="paymentCollapseTwo">
                            Can I change my payment method or frequency?
                        </button>
                    </h5>
                </div>
                <div id="paymentCollapseTwo" class="collapse" aria-labelledby="paymentHeadingTwo" data-parent="#paymentFaqAccordion">
                    <div class="card-body">
                        <p>Yes, you can change your payment method or frequency at any time:</p>
                        <ul>
                            <li>Log in to your account and update your payment preferences</li>
                            <li>Contact our customer service to request the change</li>
                            <li>Visit our office and fill out a payment preference form</li>
                        </ul>
                        <p>Note that changes to payment frequency may only take effect from the next policy anniversary date.</p>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header" id="paymentHeadingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#paymentCollapseThree" aria-expanded="false" aria-controls="paymentCollapseThree">
                            Are there any discounts for paying annually?
                        </button>
                    </h5>
                </div>
                <div id="paymentCollapseThree" class="collapse" aria-labelledby="paymentHeadingThree" data-parent="#paymentFaqAccordion">
                    <div class="card-body">
                        <p>Yes, we offer a 5% discount on the total premium amount when you choose to pay annually instead of monthly, quarterly, or semi-annually. This discount is automatically applied when you select the annual payment option.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact for Payment Issues -->
    <section class="container mb-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Payment Support</h4>
            </div>
            <div class="card-body">
                <p>If you have any questions or issues regarding payments, please contact our dedicated payment support team:</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone mr-2"></i> Phone: 1-800-123-4567 (Monday-Friday, 9 AM - 5 PM)</li>
                    <li><i class="fa fa-envelope mr-2"></i> Email: payments@aegonlife.com</li>
                    <li><i class="fa fa-comment mr-2"></i> Live Chat: Available on our website during business hours</li>
                </ul>
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
</body>
</html>
