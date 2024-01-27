<?php

session_start();

// add students data to a session array
$student['firstname'] = $_POST['firstname'];
$student['lastname'] = $_POST['lastname'];
$student['batch'] = $_POST['batch'];

array_push($_SESSION['students'], $student);
header('Location: index.php');

?>