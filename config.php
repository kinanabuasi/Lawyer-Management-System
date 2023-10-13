<?php 
//Stripe Credentials Configuration
define("STRIPE_API_KEY", "sk_test_51Nv4cLLrIeqvhE1AnISiisLa6ygyFAP3MR3XcCkj2SmV6EuW4smqZaltOpaFB2AzYRdoOtOWW1q42qDpW8G0D2fz00iPVNxVHU");
define("STRIPE_PUBLISHABLE_KEY","pk_test_51Nv4cLLrIeqvhE1Axnc0Qdrlsn3kkhLqlIJQYB91Kuf6WmfOwhguT7i2LTJqikmPwtQFGzNcQxqoCHK6uEWIW9qX008zPgRWrH" );

//Sample Product Details
// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemPrice = 25;  
$currency = "USD";

// Database Credentials Configuration 
define('DB_HOST', 'localhost');
define('DB_NAME', 'lawyermanagement');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
?>