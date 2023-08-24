<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'hidden';
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_errno) {
  die("gagal connect : " . $conn->connect_error);
}

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
