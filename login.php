<?php include "header.php"; ?>

<section class="container mt-5">
  <div class="mx-auto p-4 bg-light rounded shadow" style="max-width: 500px;">
    <h2 class="text-center mb-4">User Login</h2>
    <form action="login.php" method="POST">
      
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary w-100">Login</button>

      <div class="text-center mt-3">
        <small>Don't have an account? <a href="./register.php">Sign up now</a></small>
      </div>
      
    </form>
  </div>
</section>

<?php include "footer.php"; ?>
