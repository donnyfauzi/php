<?php

$name = "donny";
$name = null;
$umur = null;

echo "nama : ";
echo $name;
echo "\n";

echo "umur :";
echo $umur;
echo "\n";

//is null(variable)
echo "is name null? :";
echo is_null($name);
echo "\n";

echo "is name null? :";
var_dump (is_null($name));
echo "\n";

//unset /hapus
$contoh = "nama";

unset($contoh);
echo $contoh;

$contoh = "nama";

$contoh = "nama";

var_dump (isset($contoh));

