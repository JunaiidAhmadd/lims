<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aegon Life Insurance - FAQs</title>

    <!-- BOOTSTRAP & FONTAWESOME CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Aegon Life Insurance - FAQs</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
        .faq-header {
            background-color: #f8f9fa;
            padding: 50px 0;
            margin-bottom: 30px;
        }
        .accordion-button:not(.collapsed) {
            background-color: #e7f1ff;
            color: #0c63e4;
        }
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,.125);
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
        .accordion-item {
            margin-bottom: 10px;
            border-radius: 5px;
            overflow: hidden;
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
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light" href="index.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- FAQ Header -->
    <header class="faq-header">
        <div class="container text-center">
            <h1>Frequently Asked Questions</h1>
            <p class="lead">Find answers to common questions about our insurance policies and services</p>
        </div>
    </header>

    <!-- FAQ Section -->
    <section class="container mb-5">
        <div class="accordion" id="faqAccordion">
            <!-- General Questions -->
            <h3 class="mb-4">General Questions</h3>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is life insurance and why do I need it?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Life insurance is a contract between you and an insurance company where, in exchange for premium payments, the insurance company provides a lump-sum payment (death benefit) to beneficiaries upon the insured's death.</p>
                        <p>You need life insurance to:</p>
                        <ul>
                            <li>Replace lost income for your dependents</li>
                            <li>Cover funeral and burial expenses</li>
                            <li>Pay off debts and mortgages</li>
                            <li>Provide for your children's education</li>
                            <li>Create an inheritance for your heirs</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How much life insurance coverage do I need?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>The amount of life insurance you need depends on several factors, including:</p>
                        <ul>
                            <li>Your current income and future earning potential</li>
                            <li>Your debts and financial obligations</li>
                            <li>Your family's living expenses</li>
                            <li>Future education costs for your children</li>
                            <li>Funeral and end-of-life expenses</li>
                        </ul>
                        <p>A common rule of thumb is to have coverage that's 10-15 times your annual income, but we recommend speaking with our insurance advisors for a personalized assessment.</p>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What types of life insurance does Aegon Life offer?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Aegon Life offers several types of life insurance policies:</p>
                        <ul>
                            <li><strong>Term Life Insurance:</strong> Provides coverage for a specific period (term) with lower premiums.</li>
                            <li><strong>Whole Life Insurance:</strong> Provides lifelong coverage with a savings component.</li>
                            <li><strong>Endowment Plans:</strong> Offers both insurance coverage and savings benefits.</li>
                            <li><strong>Unit-Linked Insurance Plans (ULIPs):</strong> Combines insurance coverage with investment options.</li>
                            <li><strong>Child Plans:</strong> Specifically designed to secure your child's future.</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Policy Questions -->
            <h3 class="mb-4 mt-5">Policy Questions</h3>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How do I apply for a life insurance policy?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Applying for a life insurance policy with Aegon Life is simple:</p>
                        <ol>
                            <li>Contact one of our agents or visit our office</li>
                            <li>Fill out an application form with your personal details</li>
                            <li>Complete a medical examination (if required)</li>
                            <li>Submit necessary documents (ID proof, address proof, income proof)</li>
                            <li>Pay the first premium</li>
                            <li>Receive your policy document</li>
                        </ol>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Can I change my beneficiaries after purchasing a policy?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Yes, you can change your beneficiaries at any time during the policy term. To do so:</p>
                        <ol>
                            <li>Contact your insurance agent or our customer service</li>
                            <li>Fill out a beneficiary change form</li>
                            <li>Submit the form along with required identification documents</li>
                            <li>Receive confirmation of the change</li>
                        </ol>
                        <p>It's important to keep your beneficiary information up-to-date, especially after major life events like marriage, divorce, or the birth of a child.</p>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        What happens if I miss a premium payment?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>If you miss a premium payment:</p>
                        <ul>
                            <li>Most policies have a grace period (usually 30 days) during which you can make the payment without penalties</li>
                            <li>If payment is not made during the grace period, your policy may lapse</li>
                            <li>A lapsed policy means you lose your insurance coverage</li>
                            <li>Some policies can be reinstated within a certain period by paying all outstanding premiums plus interest</li>
                        </ul>
                        <p>We recommend setting up automatic payments to avoid missing premium payments.</p>
                    </div>
                </div>
            </div>
            
            <!-- Claims Questions -->
            <h3 class="mb-4 mt-5">Claims Questions</h3>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        How do beneficiaries file a claim?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>To file a claim, beneficiaries should:</p>
                        <ol>
                            <li>Notify Aegon Life as soon as possible after the insured's death</li>
                            <li>Complete a claim form (available from our website or offices)</li>
                            <li>Submit the claim form along with required documents, including:
                                <ul>
                                    <li>Original death certificate</li>
                                    <li>Original policy document</li>
                                    <li>ID proof of the beneficiary</li>
                                    <li>Bank account details for payment transfer</li>
                                </ul>
                            </li>
                        </ol>
                        <p>Our claims team will process the claim and provide assistance throughout the process.</p>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        How long does it take to process a claim?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>At Aegon Life, we strive to process claims as quickly as possible:</p>
                        <ul>
                            <li>Standard claims with complete documentation are typically processed within 7-10 business days</li>
                            <li>Claims requiring additional investigation may take longer</li>
                            <li>Payment is usually made within 2-3 business days after claim approval</li>
                        </ul>
                        <p>We understand this is a difficult time for families, and our claims team is dedicated to providing prompt and compassionate service.</p>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Are there situations where a claim might be denied?
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>While we aim to honor all legitimate claims, there are some situations where a claim might be denied:</p>
                        <ul>
                            <li>Death occurs during the policy's contestability period (usually first 2 years) due to a pre-existing condition that wasn't disclosed</li>
                            <li>Death by suicide within the first 1-2 years of the policy (varies by policy)</li>
                            <li>Misrepresentation or fraud in the insurance application</li>
                            <li>Death occurs while engaging in excluded activities (varies by policy)</li>
                            <li>Policy had lapsed due to non-payment of premiums</li>
                        </ul>
                        <p>We recommend reviewing your policy document carefully to understand any exclusions or limitations.</p>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Bootstrap 4 accordion functionality
            $('.accordion-button').click(function() {
                $(this).toggleClass('collapsed');
                var target = $(this).data('target');
                $(target).toggleClass('show');
            });
        });
    </script>
</body>
</html>
