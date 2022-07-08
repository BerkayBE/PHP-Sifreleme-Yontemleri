<?php

$sifrelebe = "123"; // Şifrelenecek veri
$eklebe = "BE__".$sifrelebe; // Başa gelecek prefix BE__ Değiştirmeniz gerekli
echo md5($eklebe); 

//bunun sayesinde tüm şifrelemelerde şifrelemesi için yazdığınız verinin başına BE__ ekleyerek şifreleyecktir 