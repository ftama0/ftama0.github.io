<?php
$port=54042;
$server="localhost:$port";
$user="azure";
$pass="6#vWHD_$";
$db="localdb";

$pdo_conn = new mysqli("$server","$user","$pass","$db");

// Check connection
if ($pdo_conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $pdo_conn -> connect_error;
  exit();
}

// Perform query
if ($result = $pdo_conn) {
  echo "Koneksi berhasil!";
  // Free result set
  $result -> free_result();
}

$pdo_conn -> close();
?>

