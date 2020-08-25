<?php

require_once 'vendor/autoload.php';

$key = require_once ('config.php');

\Stripe\Stripe::setApiKey($key['key']);

\Stripe\Customer::create([
    "description"=>'client',

    'email'=>"test@test.fr"
]);

$charge = \Stripe\Charge::create(array(
   "amount"=>5000,
    "currency"=>"eur",
    "source"=>$_POST['stripeToken'],
    "description"=>'client',
));

var_dump($charge->values());