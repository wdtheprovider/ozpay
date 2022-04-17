<?php 


$ref = $_GET['ref'];
$cname = $_GET['cname'];
$amount = $_GET['amount'];

$siteCode = 'TSTSTE0001';
$privateKey = '215114531AFF7134A94C88CEEA48E';
$apiKey = 'EB5758F2C3B4DF3FF4F2669D5FF5B';





$postData = array('SiteCode' => $siteCode,
                    'CountryCode' => 'ZA',
                    'CurrencyCode' => 'ZAR',
                    'Amount' => $amount,
                    'TransactionReference' => $ref,
                    'BankReference' => $ref,
                    'CancelUrl' => 'http://test.i-pay.co.za/responsetest.php',
                    'ErrorUrl' => 'http://test.i-pay.co.za/responsetest.php',
                    'SuccessUrl' => 'http://test.i-pay.co.za/responsetest.php',
                    'NotifyUrl' => 'http://test.i-pay.co.za/responsetest.php',
                    'IsTest' => 'false');

$hashString = strtolower(implode('', $postData) . $privateKey);
$hashCheck = hash('sha512', $hashString);
$postData['HashCheck'] = $hashCheck;
$ozowResult = getPaymentLinkModel($postData, $apiKey);


if (!empty($ozowResult->errorMessage)) {
    die($ozowResult->errorMessage);
}

header('Location:'. $ozowResult->url, true);
die();

function getPaymentLinkModel($postData, $apiKey)
{
    $jsonRequest = json_encode($postData);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Accept: application/json',
        'ApiKey:' . $apiKey,
        'Content-Type: application/json'
    ));

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonRequest);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://api.ozow.com/postpaymentrequest');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $requestResult = curl_exec($ch);

    if ($requestResult === false) {
        die('Error generating Ozow URL: curl error');
    }

    return json_decode($requestResult);

}
?>