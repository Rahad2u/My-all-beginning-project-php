<?php

// Adaptar design pattern
interface Paymentgetway{
    function sendPayment($payment);
}

class Payment_procesor{
    private $getway;
    function __construct(Paymentgetway $pg)
    {
        $this->getway = $pg;
    }
    function processProduct($amount){
        $this->getway->sendPayment($amount);
    }
}

class Paypal implements Paymentgetway{
    function sendPayment($payment){
        echo "Your payment alredy send $payment in paypal";
    }
    
}

class Stripe{
    function makePayment($amount, $currency=null){
        echo "Your payment alredy send $amount Cripto Currency";
    } 
}

class StripeAdaptar implements Paymentgetway{
    private $stripe;
    function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }
function sendPayment($payment)
{
    $this->stripe->makePayment($payment);
}
}

$ob  = new Paypal();
$ob3 = new Stripe();
$ob4 = new StripeAdaptar($ob3);
$ob2 = new Payment_procesor($ob);

$ob2->processProduct('$34');