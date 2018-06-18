<?php
$db = new mysqli(
    "localhost",
    "silver",
    "lJpfiGa8kIeQULOu",
    "silver"
);
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}

?>
