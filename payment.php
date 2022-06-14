<?php 


include 'config.php';

$ref = $_GET['ref'];
$cname = $_GET['cname'];
$amount = $_GET['amount'];

$ref = $ref."_".generateRandomString(2); // generating two letters/numbers to make the referrence unique

$postData = array('SiteCode' => $siteCode,
                    'CountryCode' => 'ZA',
                    'CurrencyCode' => 'ZAR',
                    'Amount' => $amount,
                    'TransactionReference' => $ref,
                    'BankReference' => $ref,
                    'CancelUrl' => 'http://localhost/ozpay/payment_not_success.php',
                    'ErrorUrl' => 'http://localhost/ozpay/payment_not_success.php',
                    'SuccessUrl' => 'http://localhost/ozpay/payment_success.php',
                    'NotifyUrl' => 'http://test.i-pay.co.za/responsetest.php',
                    'IsTest' => $IsTest);

$hashString = strtolower(implode('', $postData) . $privateKey);
$hashCheck = hash('sha512', $hashString);
$postData['HashCheck'] = $hashCheck;
$ozowResult = getPaymentLinkModel($postData, $ApiKey);

$_SESSION['payRef'] = $ref; //Store Ref in session for later. 
$_SESSION['hash'] = $hashCheck;


if (!empty($ozowResult->errorMessage)) {
    die($ozowResult->errorMessage);
}

header('Location:'. $ozowResult->url, true);
die();

function getPaymentLinkModel($postData, $ApiKey)
{
    $jsonRequest = json_encode($postData);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Accept: application/json',
        'ApiKey:' . $ApiKey,
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
