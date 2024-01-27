<?php

session_start();

$students = $_SESSION['students'];

?>

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
    <h1 class="fw-bold">My first PHP code!</h1>
    <hr>
    <form method="POST" action="newstudent.php">
      <label for="firstname">Firstname:</label>
      <input type="text" id="firstname" name="firstname" class="form-control" required>lastname
      <label for="lastname">Lastname:</label>
      <input type="text" id="lastname" name="lastname" class="form-control" required>
      <label for="batch">Batch:</label>
      <input type="text" id="batch" name="batch" class="form-control" required>
      <button class="btn btn-dark btn-sm mt-2" type="submit">+ Add</button>
    </form>

    <form method="POST" action="clearstudents.php">
      <button class="btn btn-sm btn-light mt-3">🗑 Clear</button>
    </form>
    <hr>
    <ul>
      <?php 
        foreach($students as $student){
          echo "<li>".$student['firstname']." ".$student['lastname']." | ".$student['batch']."</li>";
        }
      ?>
    </ul>
  </div>
</body>
</html>