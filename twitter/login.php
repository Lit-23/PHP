
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container m-5 p-5 border shadow">
    <h1 class="fw-bold">Twitter</h1>
    <p>Connect with your friends.</p>
    <div class="container rounded border p-5">
      <h2 class="fw-bold mb-4">Login</h2>
      <form method="POST" action="index.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control" required>
        <br>

        <button class="btn btn-primary btn-sm mt-2" type="submit">+ Add</button>
        <br>
        <a class="mt-2" href="register.php">Don't have an account yet? Click here!</a>
      </form>
    </div>

  </div>
</body>
</html>