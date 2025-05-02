<?php include "header.php";?>


<section class="container mt-5">
  <div class="form-container mx-auto p-4 bg-light rounded shadow" style="max-width: 600px;">
    <h2 class="text-center mb-4">User Registration</h2>
    <form action="register.php" method="POST" enctype="multipart/form-data">
      
      <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" name="last_name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="pan" class="form-label">PAN Card Number</label>
        <input type="text" name="pan" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="aadhaar" class="form-label">Aadhaar Number</label>
        <input type="text" name="aadhaar" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="photo" class="form-label">Face Detection / Upload Photo</label>
        <input type="file" name="photo" class="form-control" accept="image/*" capture="user" required>
        <small class="form-text text-muted">Take a live face photo or upload one.</small>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" name="terms" class="form-check-input" id="termsCheck" required>
        <label class="form-check-label" for="termsCheck">I agree to the terms and conditions</label>
      </div>

      <button type="submit" class="btn btn-primary w-100">Register</button>

    </form>
  </div>
</section>
<?php include "footer.php";?>