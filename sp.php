<?php

  require_once 'shurjoPay.php';

  // Merchant Return URL
  $return_url = 'http://localhost:84/sp2-sandbox/return.php';


  $amount = (float) $_POST['pamount'];
  $spObject = new shurjoPay();

  $payload = array(

      'currency' => 'BDT',
      'return_url' => $return_url,
      'cancel_url' => $return_url,
      'amount' => $amount,                
      // Order information
      'prefix' => 'NOK',
      'order_id' => 'NOK'.uniqid(),
      'discsount_amount' => 0,
      'disc_percent' => 0,
      // Customer information
      'client_ip' => '127.0.0.1',                
      'customer_name' =>  'CUSTOMER NAME',
      'customer_phone' => '01818555555' ,
      'email' => 'test@example.com',
      'customer_address' => 'Dhaka',                
      'customer_city' => 'Dhaka',
      'customer_state' => 'Dhaka',
      'customer_postcode' => '1207',
      'customer_country' => 'Bangladesh',
      'value1' => 'value1',
      'value2' => 'value2',
      'value3' => 'value3',
      'value4' => 'value4'
  );

  // var_dump($payload);exit;

  $spObject->generate_shurjopay_form($payload);


?>