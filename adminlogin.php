<?php include "header.php"; ?>

<section class="container mt-5">
  <div class="mx-auto p-4 bg-light rounded shadow" style="max-width: 500px;">
    <h2 class="text-center mb-4">Admin Login</h2>
    <form action="admin-login.php" method="POST">
      
      <div class="mb-3">
        <label for="admin_email" class="form-label">Email address</label>
        <input type="email" name="admin_email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="admin_password" class="form-label">Password</label>
        <input type="password" name="admin_password" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-dark w-100">Login as Admin</button>

      <div class="text-center mt-3">
        <small><a href="index.php">Back to user login</a></small>
      </div>

    </form>
  </div>
</section>

<?php include "footer.php"; ?>
