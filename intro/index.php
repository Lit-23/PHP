<?php

// this is a single line comment
# another single line comment

/*
this 
is 
a 
multi 
line 
comment
*/

// $first_name = 69;
// $FIRST_NAME = "Rommel";
// echo "Helo " . $FIRST_NAME;

// $age = 16;
// if($age >= 18){
//   echo "You are of legal age!";
// } else {
//   echo " You are a minor!";
// }


// while loop
// $counter = 0;
// while($counter <= 10){
//   echo $counter;
//   $counter++;
// }

// for loop
// for($count = 0; $count <= 10; $count++){
//   echo $count;
// }

// foreach
$students = array("Douglas", "Condoriano", "Pepe");
// foreach($students as $student){
//   echo $student . " is present!";
// }

// function
// function addNumbers($x, $y){
//   echo $x + $y;
// }
// addNumbers(60, 9);

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
      <label for="student_name">Add new Student:</label>
      <input type="text" id="student_name" name="student_name" class="form-control" required>
      <button class="btn btn-dark btn-sm mt-2" type="submit">Add</button>
    </form>
    <hr>
    <ul>
      <?php 
        foreach($students as $student){
          echo "<li>" . $student . "</li>";
        }
      ?>
    </ul>
  </div>
</body>
</html>