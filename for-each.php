<?php

$name = ["donny", "fauzi" , "rido"];

for ($i = 0; $i< count ($name); $i++){
    echo "data ke $i = $name[$i]".PHP_EOL;
}

// menjadi lebih sederhana

foreach($name as $name){
    echo " data $name". PHP_EOL;
}

$orang = [
    "first name" => "donny",
    "midle name" => "fauzi",
    "last name" => "rido"
];
foreach($orang as $key => $value){
    echo"$key : $value".PHP_EOL;
}