<?php include "header.php";?> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .kh-main-bg { background-color: #eef2f3; min-height: 100vh; }
    .kh-container { padding: 40px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-top: 30px; }
    .kh-header { text-align: center; margin-bottom: 30px; color: #333; font-weight: bold; }
    .kh-search-box { max-width: 400px; margin: 0 auto 20px; border-radius: 20px; border: 2px solid #007bff; }
    .kh-card { transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; border: none; background: linear-gradient(135deg, #007bff, #00c6ff); color: white; border-radius: 10px; }
    .kh-card:hover { transform: scale(1.05); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); }
    .kh-expand-btn { cursor: pointer; color: #ffdd57; font-weight: bold; }
    .kh-expand-btn:hover { text-decoration: underline; }
    .kh-card-body p { color: #f8f9fa; }
</style>

</head>
<body class="kh-main-bg">
    <div class="container">
        <div class="kh-container">
            <h2 class="kh-header">Knowledge Hub</h2>

            <!-- Uncomment to use search feature -->
            <!-- <input type="text" class="form-control kh-search-box" id="searchInput" placeholder="Search topics..."> -->

            <div class="row mt-4" id="kh-knowledgeList">
                <div class="col-md-4">
                    <div class="card kh-card">
                        <div class="card-body kh-card-body">
                            <h5 class="card-title">Artificial Intelligence</h5>
                            <p class="card-text">Learn how AI is shaping the future.</p>
                            <span class="kh-expand-btn" onclick="khToggleDetails('aiDetails')">Read More</span>
                            <p id="aiDetails" class="d-none">Artificial Intelligence is transforming various industries by automating tasks and enhancing decision-making.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card kh-card">
                        <div class="card-body kh-card-body">
                            <h5 class="card-title">Cybersecurity</h5>
                            <p class="card-text">Stay safe online with these tips.</p>
                            <span class="kh-expand-btn" onclick="khToggleDetails('cyberDetails')">Read More</span>
                            <p id="cyberDetails" class="d-none">Cybersecurity protects networks and systems from digital attacks and unauthorized access.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card kh-card">
                        <div class="card-body kh-card-body">
                            <h5 class="card-title">Blockchain Technology</h5>
                            <p class="card-text">Understand the power of decentralization.</p>
                            <span class="kh-expand-btn" onclick="khToggleDetails('blockchainDetails')">Read More</span>
                            <p id="blockchainDetails" class="d-none">Blockchain is a secure, decentralized ledger system used in cryptocurrencies and other applications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function khToggleDetails(id) {
            var element = document.getElementById(id);
            element.classList.toggle('d-none');
        }

        // Uncomment for search functionality
        // document.getElementById("searchInput").addEventListener("input", function() {
        //     let filter = this.value.toLowerCase();
        //     let cards = document.querySelectorAll(".kh-card");
        //     cards.forEach(card => {
        //         let title = card.querySelector(".card-title").textContent.toLowerCase();
        //         if (title.includes(filter)) {
        //             card.parentElement.style.display = "block";
        //         } else {
        //             card.parentElement.style.display = "none";
        //         }
        //     });
        // });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include "footer.php";?> 
