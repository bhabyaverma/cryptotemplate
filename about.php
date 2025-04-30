<?php include "header.php";?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Core Values</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Core Values</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/hero-2.png"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Core Values Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/about.png" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Core Values</h1>
                        <p class="text-primary fs-5 mb-4">Our guiding principles</p>

                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-building bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>We build the foundations of the new digital economy</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check-circle bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>We commit to impeccable standards</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-users bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>We’re people-powered to our core</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-globe bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>We facilitate global access that grows local prosperity</span>
                        </div>
                        
                        <a class="btn btn-primary py-3 px-4" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core Values End -->

    <!-- FAQ Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h2 class="text-center mb-5">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-question-circle me-2"></i> What is FutureNext?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            FutureNext is a peer-to-peer cryptocurrency marketplace that connects buyers and sellers directly.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fa fa-user-check me-2"></i> How to verify your FutureNext account?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            To verify your FutureNext account, go to settings, upload a valid ID, and complete the verification process.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fa fa-headset me-2"></i> How to contact FutureNext's 24/7 global customer support?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can contact FutureNext support via live chat on the website or email them at support@futurenext.com.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="fa fa-money-bill-wave me-2"></i> How to make money with Arbitrage on FutureNext?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Arbitrage on FutureNext involves buying cryptocurrency at a lower price from one seller and selling it at a higher price to another buyer.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Section End -->

    <!-- Footer Start -->
    <?php include "footer.php";?>

    <!-- Required CSS -->
    <style>
        .accordion-button {
            background-color: #f8f9fa;
            color: #333;
            font-weight: bold;
        }
        .accordion-button:focus {
            box-shadow: none;
        }
        .accordion-button:not(.collapsed) {
            background-color: #007bff;
            color: #fff;
        }
        .accordion-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .accordion-body {
            font-size: 16px;
        }
    </style>
