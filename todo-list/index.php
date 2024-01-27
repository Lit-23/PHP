<?php

// establish database config
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'todolist';

// create database connection
$conn = new mysqli($host, $username, $password, $database);

// check connection
if($conn -> connect_error){
  echo"Database connection error!";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['newtodo'])){
    // add task to db
    $sql = "INSERT INTO todos (todo, status) VALUES ('" . $_POST['newtodo'] . "', 'pending')";
    $conn->query($sql);
  }
}

// function to display todo list
function displayTodoList(){
  global $conn;
  $sql = "SELECT * FROM todos";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    echo "<ul>";
    while($row = $result->fetch_assoc()){
      if($row['status'] == 'pending'){
        echo "<li>" . $row['todo'] . "<span class='badge bg-secondary'>PENDING</span>" . "</li>";
      }else{
        echo "<li>" . $row['todo'] . "<span class='badge bg-success'>COMPLETED</span>" . "</li>";
      }
    }
    echo "</ul>";
  }else{
    echo "<p>There are currently no todos</p>";
  }
}

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
    <h1 class="fw-bold">Todo List</h1>
    <hr>
    <form method="POST" action="index.php">
      <input type="text" id="newtodo" name="newtodo" class="form-control" required>
      <button class="btn btn-dark btn-sm mt-2" type="submit">+ Add</button>
    </form>

    <hr>

    <?php
    displayTodoList();
    ?>
  </div>
</body>
</html>