<?php 
$parola = "1234567890";
$sifrele = base64_encode($parola);
echo $sifrele."<br>";
$sifreCoz = base64_decode($sifrele);
echo $sifreCoz."<br>";
?>