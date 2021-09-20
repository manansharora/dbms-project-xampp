<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->query("delete from items");
for($i=1;$i<=50;$i++)
{
    $q=rand(20,50);
    $n="item".strval($i);
    $c="i".strval($i).strval($i)."tm";
    $sql = "INSERT INTO items (ind, num, code, quantity)
    VALUES ($i, '$n', '$c', $q)";
    $conn->query($sql);
}


$conn->close();
?>