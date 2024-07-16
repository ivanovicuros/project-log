<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
        <div class="container">
          <a class="navbar-brand" href="/project-log/index.php">Homepage</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="/project-log/signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/project-log/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/project-log/logout.php">Logout</a>
          </li>
            </ul>
          </div>
      </div>
    </nav>
    <main>
        <div class="container d-flex flex-column align-items-center">
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
          </div>
      </main>
</body>
</html>