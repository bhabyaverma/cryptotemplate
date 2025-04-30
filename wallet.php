 <?php include "header.php";?>


 <style>
        .service-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .service-item {
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            background: #f8f9fa;
            padding: 30px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .service-item:hover {
            transform: translateY(-5px);
        }

        .service-icon {
            font-size: 50px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .service-text {
            flex-grow: 1; /* Makes text area expand evenly */
        }




/*
        .hero-header {
            text-align: center;
            background-color: #f8f9fa;
            padding: 60px 0;
        }
*/
        /* Button Styling */
       .btn-primary {
            border: none;
            padding: 12px 24px;
            font-size: 18px;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
            color: white;
            font-weight: bold;
            display: inline-block;
            animation: fadeInUp 1s ease-in-out, blinkColor 2s infinite alternate;
        }

        .btn-primary:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.8);
        }

        /* Button Multi-Color Blinking */
        @keyframes blinkColor {
            0% { background-color: #007bff; }   /* Blue */
            25% { background-color: #28a745; }  /* Green */
            50% { background-color: #ffc107; }  /* Yellow */
            75% { background-color: #dc3545; }  /* Red */
            100% { background-color: #17a2b8; } /* Cyan */
        }

        /* Fade-in Up Effect */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

<div class="container-fluid hero-header bg-light py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 mb-3 animated slideInDown">Wallet</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb mb-3">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="about.php">About</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wallet</li>
                    </ol>
                </nav>
                <!-- Multi-Color Animated Button -->
                <a href="signup.php" class="btn btn-primary btn-lg">Get Your Free Bitcoin Wallet</a>
            </div>
            <div class="col-lg-6 text-center animated fadeIn">
                <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/hero-2.png" alt="">
            </div>
        </div>
    </div>
</div>

    <!-- Header End -->


    <!-- Service Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6">Benefits</h1>
            <p class="text-primary fs-5 mb-5">
                Here’s why you should choose our platform. Our dedication to user experience shines through our thorough verification process, strong security measures, and responsive customer support.
            </p>
        </div>
        <div class="row g-4 service-container">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <i class="fas fa-shield-alt service-icon"></i>
                    <h5 class="mb-3">Safety</h5>
                    <p class="service-text">
                        Our platform ensures a secure trading environment by building trust and offering dedicated support. With a robust reputation system, you can easily identify reliable traders, while our dispute resolution service safeguards your transactions.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <i class="fas fa-lock service-icon"></i>
                    <h5 class="mb-3">Security</h5>
                    <p class="service-text">
                        We prioritize your security with multiple protective measures to safeguard your account and transactions. Our platform employs two-factor authentication (2FA), advanced encryption, and a secure escrow system.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <i class="fas fa-headset service-icon"></i>
                    <h5 class="mb-3">Support</h5>
                    <p class="service-text">
                        Our responsive customer support team is always ready to assist you. Whether you need help with transactions, account issues, or general inquiries, our 24/7 support ensures you receive the guidance you need.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Service End -->
<?php include "footer.php";?>