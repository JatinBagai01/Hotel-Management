<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "hotel";

// create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


class Functions{

public function array_make($tbl_name)
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $database = "hotel";
  $conn = mysqli_connect($hostname, $username, $password, $database);
  $select = "SELECT * FROM $tbl_name";
  $query = mysqli_query($conn, $select);
  if (mysqli_num_rows($query) > 0) {
    $select_fetch = mysqli_fetch_all($query, MYSQLI_ASSOC);
    if ($select_fetch) {
      return $select_fetch;
    } else {
      return false;
    }
  } else {
    return false;
  }
}
}

?>