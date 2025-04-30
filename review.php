  <style>
        .review-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .review-card {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .review-card h5 {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>

    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3">Review</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Review</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="img/hero-2.png" alt="Review Image">
                </div>
            </div>
        </div>
    </div>

    <div class="container review-container">
        <h2 class="text-center mb-4">Submit Your Review</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="review" class="form-label">Your Review</label>
                <textarea class="form-control" id="review" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    </div>

    <div class="container review-container mt-5">
        <h2 class="text-center mb-4">User Reviews</h2>
        <div class="review-card">
            <h5>John Doe</h5>
            <p>Great service! Highly recommended.</p>
        </div>
        <div class="review-card">
            <h5>Jane Smith</h5>
            <p>Amazing experience, will definitely come back.</p>
        </div>
    </div>
  <?php include "footer.php";?> 