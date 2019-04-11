<?php

$hostname= "localhost";
$username="skolley";
$dbname ="skolley";
$password= "A@atanima22a";

$mysqli = new mysqli($hostname, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

?>
