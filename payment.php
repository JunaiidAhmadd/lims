<!DOCTYPE html>

<html>
<head>
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
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left:2%;
	display:block;
	float: center;
}
.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	margin-left:0%;
	font-size:110%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
}
</style>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payments</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
 <!-- BOOTSTRAP & FONTAWESOME CDN -->
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>









       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Payment Informations 
						<button class="btn" align="center"> 
						<a href="addPayment.php" class="btn">Add Payment</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->

<?php

	
	$sql = "SELECT recipt_no,client_id,month,amount,due,fine, agent_id FROM payment";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>RECIPT NO</th>\n";
    echo "    <th>CLIENT ID</th>\n";
    echo "    <th>MONTH</th>\n";
    echo "    <th>AMOUNT</th>\n";
	echo "    <th>DUE</th>\n";
    echo "    <th>FINE</th>\n";
	echo "    <th>UPDATE</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["recipt_no"]."</td>\n";
		echo "    <td>".$row["client_id"]."</td>\n";
		echo "    <td>".$row["month"]."</td>\n";
		echo "    <td>".$row["amount"]."</td>\n";
		echo "    <td>".$row["due"]."</td>\n";
		echo "    <td>".$row["fine"]."</td>\n";
		
		if($row["agent_id"]== $username || "ahmed" == $username){
			echo "<td>"."<a href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>Edit</a>"."</td>\n";
		}else{
			echo "<td>"."<a class=\"dis\" href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>Edit</a>"."</td>\n";
		}
		
		
	}
	
	echo "</table>\n";
	echo "\n";
	
	} else {
    echo "0 results";
}
$conn->close();
?>


            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	
</body>
</html>
