










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
      <a href="#">
        <img src="https://dev.geniusocean.net/genius_wallet/assets/images/1558572841646281442.png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
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
                    <h2 class="page-title"> Checkout</h2>
                  </div>
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
    <div class="row row-deck row-cards">
        <div class="col-12">
            <div class="card">
            <div class="card-body">
                <form action="payment.php" id="form" method="get">
                     <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-label">Customer Name <span class="ms-2 check"></span></div>
                            <div class="input-group">
                                <input type="text" value="Dingaan" name="cname" id="cname" class="form-control shadow-none" required>
                            </div><br>
                            <div class="form-label">Referrence <span class="ms-2 check"></span></div>
                            <div class="input-group">
                                <input type="text" value="Savings" name="ref" id="ref" class="form-control shadow-none" required>
                            </div><br>
                            <div class="form-label">Enter Amount <span class="ms-2 check"></span></div>
                            <div class="input-group">
                                <input type="text" value="0.50" name="amount" id="amount" class="form-control shadow-none" required>
                            </div><br>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-label">&nbsp;</div>
                            <button type="submit" class="btn btn-success w-50 transfer">
                                Pay with Ozow </button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
            </div>
          </div>
      </div>

</body>
</html>