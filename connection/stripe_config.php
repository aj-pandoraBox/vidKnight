<?php
require_once('../stripe-php-master/init.php');

$pk="pk_test_51HTIGeIzAAjh7LFfUgTHC3NklOyLLhrFZ3LZBNYiQL64Bst6pKn8NYLrgesuvdiE4O8iR08FEEbSIJzpGRgC9QZO00mqq9P2tG";
$sk="sk_test_51HTIGeIzAAjh7LFfVL5y4XunM0yCcoVVguSFwuqU938UrEa8pmpGFCsNXC3FnEBIwKQ96ufCK2yuxblagXAcREqA00jW1Ge8LV";


\Stripe\Stripe::setApiKey($sk);
?>