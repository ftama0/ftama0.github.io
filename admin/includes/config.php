<?php
# Konek ke Web Server Lokal
$port=50996;
$myHost="localhost:$port";
$myUser	= "azure";
$myPass	= "6#vWHD_$";
$myDbs	= "pemilu";

$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>
