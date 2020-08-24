
<?php



use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

require_once '../vendor/autoload.php';

$email = 'abc@abc.fr';

Stripe::setApiKey('sk_test_LgZBATKRdH41pyA60Bi3yxT600KSnzL8bW');
$token = $_POST['stripeToken'];

// Create a Customer
$customer = Customer::create(array(
"email" => $email,
"source" => $token,
));
// Save the customer id in your own database!

// Charge the Customer instead of the card
$charge = Charge::create(array(
"amount" => 3000,
"currency" => "eur",
"customer" => $customer->id
));
