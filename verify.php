<?php
$curl = curl_init();

$Authority = $_GET['Authority'];
$data = array(
    'MerchantID' => 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX',
    'Amount' => 2000,
    'Authority' => $Authority
);
$jsonData = json_encode($data);
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox.zarinpal.com/pg/rest/WebGate/PaymentVerification.json',
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

curl_close($curl);
echo $response;