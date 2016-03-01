<?php
$dbc = mysqli_connect($_SERVER['DB_HOST'], $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD'], $_SERVER['DB_NAME'])
OR die('Could not connect to MySQL' .
   mysqli_connect_error() );
?>