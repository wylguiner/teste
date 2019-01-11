<?php

$serverH = "ec2-107-22-238-186.compute-1.amazonaws.com";
$usuarioH = "uqpboeiaheqpth";
$passH = '617467c5d3f80d547a4e58aed8f5d936a1406b132311dc4366e401674dde6ba6';
$dbnameH = "d1smj8212gls1";


$servername = "ec2-107-22-238-186.compute-1.amazonaws.com";
$username = "uqpboeiaheqpth";
$password = "617467c5d3f80d547a4e58aed8f5d936a1406b132311dc4366e401674dde6ba6";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>