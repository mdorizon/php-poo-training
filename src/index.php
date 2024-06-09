<?php 

require_once('./Class/Paypal/Payment.php');
require_once('./Class/Stripe/Payment.php');
require_once('./Class/Users/User.php');

use Class\Stripe\Payment;
use \Class\Paypal\Payment as PaypalPayment;

$paymentPaypal = new PaypalPayment();
$paymentStripe = new Payment();

var_dump($paymentPaypal);
var_dump($paymentStripe);