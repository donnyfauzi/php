<?php

$data = [
    "mobil" => "toyota"
];

// if (isset($data["mobil"])){
//     $action = $data ["mobil"];
// }else{
//     $action =  "kosong";
// }

//menjadi
$action = $data ["mobil"] ?? "kosong";
echo $action;