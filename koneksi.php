<?php

$dbName = "ekatalog";
$username = "root";
$password = "";
$dbHost = "localhost";


$koneksi = mysqli_connect($dbHost, $username, $password, $dbName);

if (!$koneksi) {
  die("Connection failed : " . mysqli_connect_error());
}
