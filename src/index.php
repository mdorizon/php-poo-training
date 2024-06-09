<?php 

require_once('./class/Cart.php');

$cart = new Cart(0, 100);
$cart->discount(5);

var_dump($cart->getTotalPrice());