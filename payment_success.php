
<?php 
//http://test.i-pay.co.za/responsetest.php?
//SiteCode=WDT-WDT-001
//&TransactionId=6fc6e9a6-9842-4794-bf18-3139252dd296
//&TransactionReference=Savings
//&Amount=0.50
//&Status=Complete
//&Optional1=&Optional2=&Optional3=&Optional4=&Optional5=
//&CurrencyCode=ZAR
//&IsTest=false
//&StatusMessage=
//&Hash=770ed3fa7149d3fc128e5840a871e290b1e1284b6c54391f0ff84f411ed12203187b9e5618f04fce1cb1a7d8f7ff8a41931e486cc15afa212d64037aad8c99c7


$Amount = $_GET['Amount'];
$Status = $_GET['Status'];
$TransactionId = $_GET['TransactionId'];
$TransactionReference = $_GET['TransactionReference'];



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

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style type="text/css">

    body
    {
        background:#f2f2f2;
    }

    .payment
	{
		border:1px solid #FFFFFF;
        border-radius:20px;
        background:#fff;
        padding-bottom:25px;

        
	}
   .payment_header
   {
	   background:#00B525;
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
        padding-bottom:25px;
    }

    .content a
    {
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        transition:all ease-in-out 0.3s;
    }

    .content a:hover
    {
        text-decoration:none;
        background:#000;
    }

    .padding {
      padding-right:25px;
      padding-left:25px;
    }
   
</style>
     
  </head>
  
  <body>
    <div class="wrapper">
          <header class="navbar navbar-expand-xl navbar-light d-print-none">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
      <a href="#">
        <h4> OzPay </h4>
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
                    <h2 class="page-title">Payment Response</h2>
                  </div>
                  <!-- Page title actions -->
                  <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                     </div>
                  </div>
                </div>
              </div>
            </div>

                    <div class="row">
                        <div class="col-md-6 mx-auto mt-5">
                          <div class="payment">
                              <div class="payment_header">
                                <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                              </div>
                              <div class="content">
                                <h1>Payment Success!</h1>
                                <div class="container padding"> 
                                <div class="row"> 
                              
                                <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col">Amount</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Transaction Reference</th>
                                          <th scope="col">Transaction Id</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">R<?php echo $Amount; ?></th>
                                          <td scope="row"><?php echo $Status; ?></td>
                                          <td scope="row"><?php echo $TransactionReference; ?></td>
                                          <td scope="row"><?php echo $TransactionId; ?></td>
                                        </tr>
                                      
                                      </tbody>
                                 </table>

                                </div>
                                </div>
                                <p>Thank you. We have recieved your payment, your order/donation will be processed shortly!</p>
                                <a class ="btn btn-info" href="check_trans.php?transaction_id=<?php echo $TransactionId; ?>">Check Transaction</a>
                              </div>
                              
                          </div>
                        </div>
                    </div>
                  </div>
          

</body>
</html>