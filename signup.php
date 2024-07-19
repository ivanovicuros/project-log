<?php include 'include/header.php'; ?>
  <h2>Create new account</h2>
  <p class="lead text-center">It's free, and always will be</p>
  <form action="" class="mt-4 w-75">
    <div class="mb-3">
      <label for="first_name" class="form-label">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name">
    </div>
    <div class="mb-3">
      <label for="last_name" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
    </div>
    <div class="mb-3">
      <input type="submit" name="submit" value="Sign Up" class="btn btn-dark w-100">
    </div>
  </form>
<?php include 'include/footer.php'; ?>