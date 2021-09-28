<?php
$buku = [
    "judul" => "kisah tanah jawa",
    "penerbit" => "gagas media",
    "halaman" => 500,
    "harga" => 50000
];

$objbuku = (object)$buku;

// var_dump($objbuku) . PHP_EOL;
echo "judul : $objbuku->judul";
echo "harga : $objbuku->harga";
