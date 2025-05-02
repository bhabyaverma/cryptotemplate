<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .bodyb {
      font-family: "Segoe UI", sans-serif;
      margin: 0;
      background-color: #f8f9fa;
      color: #333;
    }

    .crypto-box {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
    }

    .currency-tabs {
      display: flex;
      gap: 12px;
      margin-bottom: 30px;
    }

    .currency-button {
      padding: 8px 16px;
      border-radius: 20px;
      background-color: #eee;
      border: none;
      cursor: pointer;
      font-weight: 600;
    }

    .currency-button.active-tab {
      background-color: #000;
      color: #fff;
    }

    .filter-section {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 30px;
      align-items: center;
    }

    .filter-input, .filter-dropdown {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
    }

    .merchant-wrapper {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      border-radius: 8px;
      overflow: hidden;
    }

    .merchant-header, .merchant-body-row {
      display: grid;
      grid-template-columns: 2fr 1fr 2fr 2fr 1fr;
      padding: 15px 20px;
      align-items: center;
      border-bottom: 1px solid #eee;
    }

    .merchant-header {
      background-color: #f0f0f0;
      font-weight: 700;
    }

    .merchant-body-row:last-child {
      border-bottom: none;
    }

    .merchant-title {
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .payment-icons-new img {
      height: 20px;
      margin-right: 5px;
    }

    .btn-buy-now {
      background-color: #16D5FF;
      color: #fff;
      border: none;
      padding: 10px 16px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
      transition: background 0.3s ease;
    }

    .btn-buy-now:hover {
      background-color: #16D5FF;
    }

    @media (max-width: 768px) {
      .merchant-header, .merchant-body-row {
        grid-template-columns: 1fr;
        gap: 8px;
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <div class="bodyb">
    <div class="crypto-box">
      <!-- Currency Tabs -->
      <div class="currency-tabs" id="currencyTabs">
        <button class="currency-button active-tab" data-currency="usdt">USDT</button>
        <button class="currency-button" data-currency="btc">BTC</button>
        <button class="currency-button" data-currency="eth">ETH</button>
        <button class="currency-button" data-currency="kcs">KCS</button>
        <button class="currency-button" data-currency="usdc">USDC</button>
      </div>

      <!-- Filter Bar -->
      <div class="filter-section">
        <input type="number" placeholder="Enter amount" class="filter-input" />
        <select class="filter-dropdown">
          <option>$ USD</option>
          <option>₹ INR</option>
        </select>
        <select class="filter-dropdown">
          <option>Payment Methods</option>
          <option>PayPal</option>
          <option>Bank Transfer</option>
          <option>UPI</option>
        </select>
      </div>

      <!-- Merchant Table -->
      <div class="merchant-wrapper">
        <div class="merchant-header">
          <div>Merchant</div>
          <div>Price</div>
          <div>Available | Order Limit</div>
          <div>Payment Methods</div>
          <div></div>
        </div>

        <!-- Merchant Rows for USDT -->
        <div id="usdt" class="merchant-body">
          <div class="merchant-body-row">
            <div class="merchant-title">COINIX 👑</div>
            <div>1.08 USD</div>
            <div>600 USDT<br>100 - 1,000 USD</div>
            <div class="payment-icons-new">
              <img src="https://img.icons8.com/color/32/000000/neteller.png" alt="Neteller" />
              <img src="https://img.icons8.com/color/32/000000/paypal.png" alt="PayPal" />
            </div>
            <div><button class="btn-buy-now">Buy</button></div>
          </div>
        </div>

        <!-- Merchant Rows for BTC -->
        <div id="btc" class="merchant-body" style="display:none;">
          <div class="merchant-body-row">
            <div class="merchant-title">BTC Express</div>
            <div>39,000 USD</div>
            <div>1.2 BTC<br>500 - 40,000 USD</div>
            <div class="payment-icons-new">
              <img src="https://img.icons8.com/color/32/000000/bank.png" alt="Bank" />
            </div>
            <div><button class="btn-buy-now">Buy</button></div>
          </div>
        </div>

        <!-- Merchant Rows for ETH -->
        <div id="eth" class="merchant-body" style="display:none;">
          <div class="merchant-body-row">
            <div class="merchant-title">ETH Hub</div>
            <div>2,500 USD</div>
            <div>10 ETH<br>200 - 25,000 USD</div>
            <div class="payment-icons-new">
              <img src="https://img.icons8.com/color/32/000000/sepa.png" alt="SEPA" />
            </div>
            <div><button class="btn-buy-now">Buy</button></div>
          </div>
        </div>

        <!-- Merchant Rows for KCS -->
        <div id="kcs" class="merchant-body" style="display:none;">
          <div class="merchant-body-row">
            <div class="merchant-title">Kucoin Trader</div>
            <div>10 USD</div>
            <div>150 KCS<br>50 - 1,500 USD</div>
            <div class="payment-icons-new">
              <img src="https://img.icons8.com/color/32/000000/revolut.png" alt="Revolut" />
            </div>
            <div><button class="btn-buy-now">Buy</button></div>
          </div>
        </div>

        <!-- Merchant Rows for USDC -->
        <div id="usdc" class="merchant-body" style="display:none;">
          <div class="merchant-body-row">
            <div class="merchant-title">Stable Pay</div>
            <div>1.01 USD</div>
            <div>3000 USDC<br>100 - 3,000 USD</div>
            <div class="payment-icons-new">
              <img src="https://img.icons8.com/color/32/000000/paypal.png" alt="PayPal" />
              <img src="https://img.icons8.com/color/32/000000/bank.png" alt="Bank Transfer" />
            </div>
            <div><button class="btn-buy-now">Buy</button></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const buttons = document.querySelectorAll(".currency-button");
    const merchantBodies = document.querySelectorAll(".merchant-body");

    buttons.forEach(button => {
      button.addEventListener("click", () => {
        // Remove active-tab class from all buttons
        buttons.forEach(btn => btn.classList.remove("active-tab"));
        button.classList.add("active-tab");

        // Hide all merchant-body sections
        merchantBodies.forEach(section => section.style.display = "none");

        // Show selected section
        const currency = button.getAttribute("data-currency");
        document.getElementById(currency).style.display = "block";
      });
    });
  </script>
</body>
</html>
<?php include "footer.php"; ?>
