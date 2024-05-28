<?php

$nilai = "D";

// if ($nilai == "A") {
//     echo"lulus dengan sangat baik";
// }else if($nilai == "B" || $nilai == "C"){
//     echo"lulus";
// }else if($nilai == "D"){
//     echo"tidak lulus";
// }else{
//     echo"salah tempat";
// }


//disederhanakan dengan switch case
switch($nilai){
    case "A" :
        echo"lulus dengan baik";
        break;
    case "B":
    case "C" :
        echo"lulus";
        break;
    case "D" :
        echo"tidak lulus";
        break;

    default:
    echo"salah tempat";
}