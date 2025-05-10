<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aegon Life Insurance - Packages</title>
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
        .packages-header {
            background-color: #f8f9fa;
            padding: 50px 0;
            margin-bottom: 30px;
        }
        .package-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .package-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .package-header {
            padding: 20px;
            color: white;
        }
        .basic-package .package-header {
            background: linear-gradient(135deg, #3498db, #2980b9);
        }
        .standard-package .package-header {
            background: linear-gradient(135deg, #9b59b6, #8e44ad);
        }
        .premium-package .package-header {
            background: linear-gradient(135deg, #f1c40f, #f39c12);
        }
        .package-price {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0;
        }
        .package-period {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        .package-features {
            padding: 0;
            list-style: none;
        }
        .package-features li {
            padding: 12px 20px;
            border-bottom: 1px solid #eee;
        }
        .package-features li:last-child {
            border-bottom: none;
        }
        .feature-icon {
            margin-right: 10px;
            color: #27ae60;
        }
        .package-footer {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .btn-package {
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
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
        .package-badge {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #e74c3c;
            color: white;
            padding: 5px 15px;
            font-size: 0.8rem;
            font-weight: bold;
            border-bottom-left-radius: 10px;
        }
        .compare-table {
            margin-top: 50px;
        }
        .compare-table th {
            background-color: #f8f9fa;
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
                    <li class="nav-item active">
                        <a class="nav-link" href="packages.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQs</a>
                    </li>
                    <li class="nav-item">
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

    <!-- Packages Header -->
    <header class="packages-header">
        <div class="container text-center">
            <h1>Our Insurance Packages</h1>
            <p class="lead">Choose the perfect insurance plan to secure your future</p>
        </div>
    </header>

    <!-- Packages Section -->
    <section class="container mb-5">
        <div class="row">
            <!-- Basic Package -->
            <div class="col-md-4">
                <div class="card package-card basic-package">
                    <div class="package-header text-center">
                        <h3>Basic Plan</h3>
                        <p class="package-price">$3,000</p>
                        <p class="package-period">Annual Premium</p>
                    </div>
                    <div class="card-body">
                        <ul class="package-features">
                            <li><i class="fa fa-check feature-icon"></i> Coverage: $500,000</li>
                            <li><i class="fa fa-check feature-icon"></i> Term: 10 years</li>
                            <li><i class="fa fa-check feature-icon"></i> Age Limit: 50 years</li>
                            <li><i class="fa fa-check feature-icon"></i> 100% Coverage</li>
                            <li><i class="fa fa-check feature-icon"></i> Cash/Check Payment</li>
                            <li><i class="fa fa-times text-danger mr-2"></i> No Critical Illness Benefit</li>
                            <li><i class="fa fa-times text-danger mr-2"></i> No Accidental Death Benefit</li>
                        </ul>
                    </div>
                    <div class="package-footer text-center">
                        <a href="contact.php" class="btn btn-primary btn-package">Get Started</a>
                    </div>
                </div>
            </div>
            
            <!-- Standard Package -->
            <div class="col-md-4">
                <div class="card package-card standard-package">
                    <div class="package-badge">POPULAR</div>
                    <div class="package-header text-center">
                        <h3>Standard Plan</h3>
                        <p class="package-price">$6,500</p>
                        <p class="package-period">Annual Premium</p>
                    </div>
                    <div class="card-body">
                        <ul class="package-features">
                            <li><i class="fa fa-check feature-icon"></i> Coverage: $1,000,000</li>
                            <li><i class="fa fa-check feature-icon"></i> Term: 10 years</li>
                            <li><i class="fa fa-check feature-icon"></i> Age Limit: 50 years</li>
                            <li><i class="fa fa-check feature-icon"></i> 100% Coverage</li>
                            <li><i class="fa fa-check feature-icon"></i> Cash/Check Payment</li>
                            <li><i class="fa fa-check feature-icon"></i> Critical Illness Benefit</li>
                            <li><i class="fa fa-times text-danger mr-2"></i> No Accidental Death Benefit</li>
                        </ul>
                    </div>
                    <div class="package-footer text-center">
                        <a href="contact.php" class="btn btn-primary btn-package">Get Started</a>
                    </div>
                </div>
            </div>
            
            <!-- Premium Package -->
            <div class="col-md-4">
                <div class="card package-card premium-package">
                    <div class="package-header text-center">
                        <h3>Premium Plan</h3>
                        <p class="package-price">$13,000</p>
                        <p class="package-period">Annual Premium</p>
                    </div>
                    <div class="card-body">
                        <ul class="package-features">
                            <li><i class="fa fa-check feature-icon"></i> Coverage: $2,000,000</li>
                            <li><i class="fa fa-check feature-icon"></i> Term: 10 years</li>
                            <li><i class="fa fa-check feature-icon"></i> Age Limit: 50 years</li>
                            <li><i class="fa fa-check feature-icon"></i> 100% Coverage</li>
                            <li><i class="fa fa-check feature-icon"></i> Cash/Check Payment</li>
                            <li><i class="fa fa-check feature-icon"></i> Critical Illness Benefit</li>
                            <li><i class="fa fa-check feature-icon"></i> Accidental Death Benefit</li>
                        </ul>
                    </div>
                    <div class="package-footer text-center">
                        <a href="contact.php" class="btn btn-primary btn-package">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Packages -->
        <h2 class="text-center mt-5 mb-4">Specialized Insurance Plans</h2>
        <div class="row">
            <!-- Child Education Plan -->
            <div class="col-md-6">
                <div class="card package-card mb-4">
                    <div class="card-header bg-info text-white">
                        <h3 class="mb-0">Child Education Plan</h3>
                    </div>
                    <div class="card-body">
                        <p>Secure your child's educational future with our specialized education insurance plan.</p>
                        <h5>Benefits:</h5>
                        <ul>
                            <li>Guaranteed education funding</li>
                            <li>Flexible premium payment options</li>
                            <li>Coverage continues even if parent is no longer able to pay</li>
                            <li>Additional bonus on maturity</li>
                        </ul>
                        <h5>Premium:</h5>
                        <p>Starting from $4,500 annually</p>
                    </div>
                    <div class="card-footer bg-light">
                        <a href="contact.php" class="btn btn-info">Learn More</a>
                    </div>
                </div>
            </div>
            
            <!-- Retirement Plan -->
            <div class="col-md-6">
                <div class="card package-card mb-4">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0">Retirement Plan</h3>
                    </div>
                    <div class="card-body">
                        <p>Plan for a comfortable retirement with our specialized retirement insurance plan.</p>
                        <h5>Benefits:</h5>
                        <ul>
                            <li>Regular income after retirement</li>
                            <li>Tax benefits on premium payments</li>
                            <li>Option to receive lump sum or periodic payments</li>
                            <li>Protection against inflation</li>
                        </ul>
                        <h5>Premium:</h5>
                        <p>Starting from $5,200 annually</p>
                    </div>
                    <div class="card-footer bg-light">
                        <a href="contact.php" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Package Comparison -->
    <section class="container mb-5">
        <h2 class="text-center mb-4">Package Comparison</h2>
        <div class="table-responsive">
            <table class="table table-bordered compare-table">
                <thead>
                    <tr>
                        <th>Features</th>
                        <th class="text-center">Basic Plan</th>
                        <th class="text-center">Standard Plan</th>
                        <th class="text-center">Premium Plan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Coverage Amount</td>
                        <td class="text-center">$500,000</td>
                        <td class="text-center">$1,000,000</td>
                        <td class="text-center">$2,000,000</td>
                    </tr>
                    <tr>
                        <td>Annual Premium</td>
                        <td class="text-center">$3,000</td>
                        <td class="text-center">$6,500</td>
                        <td class="text-center">$13,000</td>
                    </tr>
                    <tr>
                        <td>Term Period</td>
                        <td class="text-center">10 years</td>
                        <td class="text-center">10 years</td>
                        <td class="text-center">10 years</td>
                    </tr>
                    <tr>
                        <td>Age Limit</td>
                        <td class="text-center">50 years</td>
                        <td class="text-center">50 years</td>
                        <td class="text-center">50 years</td>
                    </tr>
                    <tr>
                        <td>Critical Illness Benefit</td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Accidental Death Benefit</td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Premium Waiver Benefit</td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Hospital Cash Benefit</td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="container mb-5">
        <div class="jumbotron text-center">
            <h2>Not sure which plan is right for you?</h2>
            <p class="lead">Our insurance experts are ready to help you choose the perfect plan for your needs.</p>
            <a href="contact.php" class="btn btn-primary btn-lg">Contact Us Today</a>
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
