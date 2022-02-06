<?php
session_start();
$mysqli = new mysqli("db","root","example","zbc-skolebase");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$name = isset($_GET['name']) ? $_GET['name'] : '';
echo '<h1>Hej '.$name.' , Velkommen til Caspers EUX!</h1>'; 
?>