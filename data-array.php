<?php

$angka = array(5,4,3,2,1);
var_dump ($angka);

$nama = ["donny", "fauzi" ,"rika" ,"fauzi"];
var_dump ($nama);

//menambahkan data array
var_dump ($nama[2]);

//merubah data array
$nama[2] = "beydud";
var_dump ($nama);

//menghapus data array
unset($nama[2]);
var_dump($nama);

//menambah data array
$nama[] = "auri";
var_dump($nama);

//menghitung array
var_dump(count($nama));

// custom maping array

$murid = array(
    "id" => 121,
    "nama" => "budi",
    "umur" => 18
);
var_dump ($murid);

$murid = [
    "id" => 121,
    "nama" => "budi",
    "umur" => 18
];
var_dump ($murid);

// aray dalam array + menggalbil data array
$murid = array(
    "id" => 121,
    "nama" => "budi",
    "umur" => 18,
    "alamat" => array(
        "kota" => "jakarta",
        "negara" => "indonesia"
    )
);
var_dump ($murid);

$murid = [
    "id" => 121,
    "nama" => "budi",
    "umur" => 18,
    "alamat" => [
            "kota" => "jakarta",
            "negara" => "indonesia"
    ]
];
var_dump ($murid);

var_dump($murid["alamat"]["negara"]);