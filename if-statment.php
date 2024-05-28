<?php

$nilai = 65;
$absen = 70;

if ($nilai >= 80 && $absen >= 80) {
    echo"Lulus Dengan Nilai A";
}else if ($nilai >= 70 && $absen >= 70) {
    echo"Lulus Dengan Nilai B";
}else if ($nilai >= 65 && $absen >= 65) {
    echo"Lulus Dengan Nilai c";
}else {
    echo"Lulus Dengan Nilai D";
}


if ($nilai >= 80 && $absen >= 80) :
    echo"Lulus Dengan Nilai A";
elseif ($nilai >= 70 && $absen >= 70) :
    echo"Lulus Dengan Nilai B";
elseif ($nilai >= 65 && $absen >= 65) :
    echo"Lulus Dengan Nilai c";
else :
    echo"Lulus Dengan Nilai D";
endif;