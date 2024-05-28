<?php

//penugasan aritmatika
// contoh : $a -=$b artinya $a= $a+b dan sama dengan operator yang lainnya

$ayam = 10000;
$telur = 10000;
$minyak = 10000;

$total = 0;

//menghitung total variable yang semula 

// $total = $ayam + $telur + $minyak;
// var_dump ($total);

//atau

// $total = $total + $ayam;
// $total = $total + $telur;
// $total = $total + $minyak;

// var_dump($total);

//dipersingkat menjadi

$total += $ayam;
$total += $telur;
$total += $minyak;

echo "totalnya adalah : " , $total;

