<?php

/*
    MerchentID : 36 کاراکتر دلخواه - 
    پیش فرض همین مقدار برای مرچنت کافیست
*/
$curl = curl_init();
$data = array(
    'MerchantID' => 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX',
    'Amount' => 2000,
    'CallbackURL' => 'http://example.com/verify.php', // change exmaple.com to your site domain and must be redirect to verify.php
    'Description' => 'خرید تست'
);
$jsonData = json_encode($data);
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox.zarinpal.com/pg/rest/WebGate/PaymentRequest.json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$jsonData,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Accept: application/json'
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
$response = json_decode($response, true, JSON_PRETTY_PRINT);
curl_close($curl);

if($response["Status"] === 100){
    $auth = $response['Authority'];
    $url  = "https://sandbox.zarinpal.com/pg/StartPay/" . $auth;
    header("Location: $url");
}