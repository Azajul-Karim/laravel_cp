<?php
require_once 'paypal/Transaction.php';
require_once 'stripe/Transaction.php';

use paymentGetway\paypal\Transaction as PaypalTransaction;
use paymentGetway\stripe\Transaction as StripeTransaction;

class paymentService {

 public function createTransaction($transactionMethod){
   if($transactionMethod == 'paypal'){
      $transaction = new PaypalTransaction();
      
    }else if($transactionMethod == 'stripe'){
      $transaction = new StripeTransaction();
    }
}
}