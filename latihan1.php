<?php
class produk {
    public $namaBarang="Laptop",
            $merk="Lenovo",
             $harga =7000000;

             
  }     
$produk1 = new produk();
$produk2 = new produk();
$produk2->namaBarang="Mouse";
$produk2->merk="Logitec";
$produk2->harga=100000;
$produk3->namaBarang="hp";
$produk3->merk="samsung";
$produk3->harga=1000;

var_dump($produk1);
echo "<br>";
var_dump($produk2);
echo "<br>";
var_dump($produk3);

