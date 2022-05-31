
<?php

$curl = curl_init();
$currency = "R";

include 'config.php';


$sDate = date('Y-m-d', strtotime($date. ' - 17 days'));
$eDate = date("Y-m-d");

if(isset($_POST['sDate'])){

  $sDate = $_POST['sDate'];
  $eDate = $_POST['eDate'];

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.ozow.com/GetTransactionReport?siteCode='.$siteCode.'&startDate='.$sDate.'&endDate='.$eDate,
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

curl_close($curl);

$data = json_decode($response,true);


} else{

  
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.ozow.com/GetTransactionReport?siteCode='.$siteCode.'&startDate='.$sDate.'&endDate='.$eDate,
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

curl_close($curl);

$data = json_decode($response,true);
}

?>




<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>OzPay - Transactions</title>
    <!-- CSS files -->
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

    <a href="index.php">
        <h4> Go Back To Checkout</h4>
      </a>
    </h1>

  </div>
</header>
        <div class="page-wrapper">
            <div class="container-xl">
              <!-- Page title -->
              <div class="page-header text-white d-print-none">
                <div class="row align-items-center">
                  <!-- Page title actions -->
                  <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                     </div>
                  </div>
                </div>
              </div>
            </div>
<div class="page-body">
  <div class="container-xl">
    <div class="row row-deck row-cards mt-3">
        <div class="col-md-6">
            <h2>List Transactions</h2>
        </div>
        <div class="col-md-6">
        
     
    <form action="" method="POST">
        <div class = "row">

            <div class="col-md-4">
            <div class="form-group">
                <label for="sDate">From Date:</label>
                <input type="date" id="sDate" min="01/01/2020" required name="sDate" class="input-group"  
                value="<?php if(isset($_POST['sDate'])){ echo $_POST['sDate'];}else{ echo date('Y-m-d', strtotime($date. ' - 14 days')); }?>">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                <label for="eDate">To Date:</label>
                <input type="date" required name="eDate" id="eDate" class="input-group"
                value="<?php if(isset($_POST['eDate'])){ echo $_POST['eDate'];
    
                } else {echo date("Y-m-d");}?>"> 
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <br>
              <input type="submit"  name="filter" value="Apply Filter" class="btn btn-primary">
            </div>
            </div>
        </div>
    </form>

        </div>
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                  <table class="table table-vcenter card-table table-striped">
                    <thead>
                      <tr>
                        <th>Bank From</th>
                        <th>Bank To</th>
                        <th>Amount</th>
                        <th>Referrence</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php foreach($data as $node){?>
                        <tr>
                           <td><?php echo $node['bankFromName']; ?></td>
                           <td><?php echo $node['bankToName']; ?></td>
                           <td><?php echo $currency.$node['amount']; ?></td>
                           <td><?php echo $node['fromReference']; ?></td>
                           <td><span class="badge"><?php echo $node['status']; ?></span></td>
                           <td><a class="btn btn-info" href="check_trans.php?transaction_id=<?php echo $node['id']; ?>" >View</a></td>
                          <td></td>
                       </tr>

                       <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
          </div>
      </div>

</body>
</html>