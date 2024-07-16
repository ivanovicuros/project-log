<?php include 'include/header.php'; ?>
  <h2>Create new account</h2>
  <p class="lead text-center">It's free, and always will be</p>
  <form action="" class="mt-4 w-75">
    <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
    </div>
    <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
        <input type="Password" class="form-control" id="Password" name="Password" placeholder="Enter your password">
    </div>
    <div class="mb-3">
      <input type="submit" name="submit" value="Sign Up" class="btn btn-dark w-100">
    </div>
  </form>
<?php include 'include/footer.php'; ?>