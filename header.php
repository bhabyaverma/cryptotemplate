<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CryptoCoin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <style>
    /* Bitcoin Loader Styles */
    #btc-loader {
      position: fixed;
      width: 100%;
      height: 100%;
      background: white; 
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      color: white;
      font-size: 1.2rem;
      z-index: 9999;
      transition: opacity 0.5s ease-out;
    }

    .animated-coin {
      width: 100px;
      animation: coin-spin 2s linear infinite;
    }

    @keyframes coin-spin {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }



/*css for buy and sell Dropdown*/


 /* Dropdown styles */
    .dropdown-submenu {
      position: relative;
      cursor: pointer;
      padding: 8px 15px;
      display: block;
    }

    .dropdown-options {
      display: none;
      list-style: none;
      padding-left: 15px;
      margin-top: 5px;
    }

    .dropdown-options li {
      padding: 5px 0;
    }

    .show-options {
      display: block !important;
    }

    .dropdown-submenu a {
      text-decoration: none;
      color: #000;
      display: block;
      font-weight: 500;
    }

    .dropdown-submenu a:hover {
      color: #007bff;
    }



  </style>
</head>

<body>
  <!-- Bitcoin Loader -->
  <div id="btc-loader">
    <img src="https://upload.wikimedia.org/wikipedia/commons/4/46/Bitcoin.svg" alt="Bitcoin Coin" class="animated-coin">
  </div>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
      <h2 class="m-0 text-primary">
        <img class="img-fluid me-2" src="img/icon-1.png" alt="" style="width: 45px;">CryptoCoin
      </h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-4 py-lg-0">
        <a href="index.php" class="nav-item nav-link active">Home</a>
        <a href="about.php" class="nav-item nav-link active">About</a>


  

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Marketplace</a>
              <ul class="dropdown-menu">
                <!-- Buy Option -->
                <li class="dropdown-submenu buy-toggle">
                  <a href="#">Buy</a>
                  <ul class="dropdown-options" id="buy-options">
                   <li><a href="#">BTC</a></li>
                   <li><a href="#">ETH</a></li>
                   <li><a href="#">USDC</a></li>
                   <li><a href="#">USDT</a></li>

                  </ul>
                </li>

                <!-- Sell Option -->
                <li class="dropdown-submenu sell-toggle">
                  <a href="#">Sell</a>
                  <ul class="dropdown-options" id="sell-options">
                    <li><a href="#">BTC</a></li>
                   <li><a href="#">ETH</a></li>
                   <li><a href="#">USDC</a></li>
                   <li><a href="#">USDT</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>






        </div>



      <a href="wallet.php" class="nav-item nav-link">Wallet</a>


        <a href="review.php" class="nav-item nav-link">Review</a>


         

         <a href="./login.php" class="nav-item">Login</a>

         <a href="./adminlogin.php" class="nav-item nav-link">Admin Login</a>




      
      </div>
     
    </div>
  </nav>
  <!-- Navbar End -->

 

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      setTimeout(function () {
        var loader = document.getElementById("btc-loader");
        loader.style.opacity = "0";
        setTimeout(function () {
          loader.style.display = "none";
        }, 500);
      }, 2000);
    });


  </script>
  


    <script>
    document.addEventListener("DOMContentLoaded", function () {
      const buyToggle = document.querySelector(".buy-toggle");
      const sellToggle = document.querySelector(".sell-toggle");
      const buyOptions = document.getElementById("buy-options");
      const sellOptions = document.getElementById("sell-options");

      // Toggle Buy Options
      buyToggle.addEventListener("click", function (event) {
        event.preventDefault();
        buyOptions.classList.toggle("show-options");
        sellOptions.classList.remove("show-options");
      });

      // Toggle Sell Options
      sellToggle.addEventListener("click", function (event) {
        event.preventDefault();
        sellOptions.classList.toggle("show-options");
        buyOptions.classList.remove("show-options");
      });

      // Hide menus when clicking outside
      document.addEventListener("click", function (event) {
        if (!event.target.closest(".dropdown-submenu")) {
          buyOptions.classList.remove("show-options");
          sellOptions.classList.remove("show-options");
        }
      });

    });
  </script>



</body>

</html>
