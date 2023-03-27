<?php
function addData()
{
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "btth01_cse485";
  $conn = new mysqli(
    $server,
    $user,
    $pass,
    $database
  );
  $conn->set_charset("utf8");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}
