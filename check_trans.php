<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.ozow.com/GetTransaction?siteCode=TSTSTE0001&transactionId=a97e8708-0a34-4590-876e-6076d1031829',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'ApiKey: EB5758F2C3B4DF3FF4F2669D5FF5B'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
