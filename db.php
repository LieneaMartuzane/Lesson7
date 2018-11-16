
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_kurss";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);