<?php

//biasanya sebelum menggunakan ternary
$gender = "Pria";

// $panggil = null;
// if ($gender == "Pria") {
//     echo $panggil . "Bapak";
// }else{
//     echo $panggil . "ibu" ;
// }

//dengan ternari dipersingkat menjadi
$panggil = $gender == "Pria" ? "Bapak" : "Ibu";
echo $panggil;