<?php

include 'config.php';

$curl = curl_init();


if(isset($_GET['transaction_id'])){
  $transaction_id = $_GET['transaction_id'];
}

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.ozow.com/GetTransaction?siteCode='.$siteCode.'&transactionId='.$transaction_id,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'ApiKey: '.$ApiKey
  ),
));

$response = curl_exec($curl);
$jsonData = json_decode($response,true);


curl_close($curl);

$currency = "R";

?>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>OzPay</title>
    <!-- CSS files -->
    <link rel="shortcut icon" href="https://dev.geniusocean.net/genius_wallet/assets/images/5480339181644482400.png">
    <link rel="stylesheet" href="style/font-awsome.min.css">
    <link href="style/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="style/demo.min.css" rel="stylesheet"/>
    <link href="style/custom.css" rel="stylesheet"/>
    <link href="style/table.io.mini.css" rel="stylesheet"/>
     
  </head>
  
  <body>
    <div class="wrapper">
          <header class="navbar navbar-expand-xl navbar-light d-print-none">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
      <a href="check_all_trans.php">
        <h4> Go Back </h4>
      </a>
    </h1>

  </div>
</header>
        <div class="page-wrapper">
            <div class="container-xl">
              <!-- Page title -->
              <div class="page-header text-white d-print-none">
                <div class="row align-items-center">
                  <div class="col">
                    <h2 class="page-title">Transaction Details: <?php echo $jsonData['transactionId'];?></h2>
                  </div>
                  <!-- Page title actions -->
                  <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                     </div>
                  </div>
                </div>
              </div>
            </div>



<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card" >
        <div class="card-body">
          <div class="container">
            <div class="row">
              <ul class="list-unstyled">
              <li class="text-muted mt-1"><span class="text-black">Bank From: </span><?php echo $jsonData['bankName'];?></li>
              <li class="text-muted mt-1"><span class="text-black">Bank To: </span><?php echo $jsonData['toBankName'];?></li>
              <li class="text-muted mt-1"><span class="text-black">To Paid Account: </span><?php echo $jsonData['toAccountNumber'];?></li>
              <li class="text-muted mt-1"><span class="text-black">Amount: </span><?php echo $currency.$jsonData['amount'];?></li>
              <li class="text-muted mt-1"><span class="text-black">Referrence: </span><?php echo $jsonData['transactionReference'];?></li>
              <li class="text-muted mt-1"><span class="text-black">Payment Date: </span>  <?php echo $jsonData['paymentDate'];?></li>
              <li class="text-muted mt-1"><span class="text-black">Payment Status: </span>  <?php echo $jsonData['status'];?></li>
              </ul>  
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



</body>
</html>
