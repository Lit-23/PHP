<?php

session_start();

unset($_SESSION['students']);
$_SESSION['students'] = array();
header('Location: index.php');

?>