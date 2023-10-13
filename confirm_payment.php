<?php
$paymentMethodId = $_POST['payment_method_id'];

$paymentIntent = \Stripe\PaymentIntent::retrieve('PAYMENT_INTENT_ID');
$paymentIntent->confirm([
    'payment_method' => $paymentMethodId,
]);
?>