<?php
require_once 'config.php'; ?>
<html>
<head>
<title>Demo Integrate Stripe Payment Gateway using PHP - AllPHPTricks.com</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <title></title>
</head>
<body>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Charge <?php echo '$' .
            $itemPrice; ?> with Stripe</h3>
        
        <!-- Product Info -->
        <p><b>Item Name:</b> <?php echo $itemName; ?></p>
        <p><b>Price:</b> <?php echo '$' . $itemPrice . ' ' . $currency; ?></p>
    </div>
    <div class="panel-body">
        <!-- Display status message -->
        <div id="paymentResponse" class="hidden"></div>
        
        <!-- Display a payment form -->
        <form id="paymentFrm" class="hidden">
            <div class="form-group">
                <label>NAME</label>
                <input type="text" id="name" class="field" placeholder="Enter name" required="" autofocus="">
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" id="email" class="field" placeholder="Enter email" required="">
            </div>
            
            <div id="paymentElement">
                <!--Stripe.js injects the Payment Element-->
            </div>
            
            <!-- Form submit button -->
            <button id="submitBtn" class="btn btn-success">
                <div class="spinner hidden" id="spinner"></div>
                <span id="buttonText">Pay Now</span>
            </button>
        </form>
        
        <!-- Display processing notification -->
        <div id="frmProcess" class="hidden">
            <span class="ring"></span> Processing...
        </div>
        
        <!-- Display re-initiate button -->
        <div id="payReinit" class="hidden">
            <button class="btn btn-primary" onClick="window.location.href=window.location.href.split('?')[0]"><i class="rload"></i>Re-initiate Payment</button>
        </div>
    </div>
</div>

<br>
<div style="clear:both;"></div>
<p><strong>List of Testing Credit Cards Details</strong></p>
<p>Use the following Sandbox environment testing credit cards details to test the payment process.</p>
<p>
	<ul style="padding-left: 20px;">
		<li>Successful Payment Card VISA (Without 3D Secure) - 4242424242424242</li>
		<li>Requires Authentication Card VISA (With 3D Secure) - 4000002500003155</li>
		<li>Failed Payment Card VISA - 4000000000009995</li>	
	</ul>
</p>
<p>Select any future valid expiration date (month/year) & CVC is <strong>123</strong>.</p>

</div>
<!-- Stripe JS library -->
<script src="https://js.stripe.com/v3/"></script>
<!-- <script src="js/stripe-checkout.js" defer></script> -->
<script src="js/stripe-checkout.js" STRIPE_PUBLISHABLE_KEY="<?php echo STRIPE_PUBLISHABLE_KEY; ?>" defer></script>
</body>
</html>