<?php
use Stripe\Stripe;
use App\Classses\Session;

$stripe = array(
'secret_key' => $_ENV['STRIPE'],
'publishable_key' => $_ENV['STRIPE_PUBLISHER_KEY']
);

Session::add('publishable_key', $stripe['publishable_key']);

Stripe::setApiKey($stripe['secret_key']);