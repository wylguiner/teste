<?php

$server = "localhost";
$usuario = "root";
$pass = "";
$dbname = "suit";
$conn = mysqli_connect($server,$usuario,$pass,$dbname);

$serverH = "ec2-107-22-238-186.compute-1.amazonaws.com";
$usuarioH = "uqpboeiaheqpth";
$passH = '617467c5d3f80d547a4e58aed8f5d936a1406b132311dc4366e401674dde6ba6';
$dbnameH = "d1smj8212gls1";
$connH = mysqli_connect($serverH,$usuarioH,$passH,$dbnameH);

?>