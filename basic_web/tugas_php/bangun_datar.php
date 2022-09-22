<?php

$p = 4;
$l = 3;

$luas = $p * $l;
$persegi = $p * $p;
$ketupat = 0.5 * $p * $l;
$segitiga = 0.5 * $p* $l;
$lingkaran = pi() * (pow($p,2));
echo"panjang = $p , lebar = $l <br> luas persegi panjang = $luas";

echo"<hr>";
echo"psisi = $p , <br> luas persegi = $persegi";
echo"<hr>";
echo"diagonal 1 = $p , diagonal 2 = $l <br> belah ketupat = $ketupat";
echo"<hr>";
echo"alas = $p , tinggi = $l <br> luas segitiga = $segitiga";
echo"<hr>";
echo"jari-jari = $p <br> luas lingkaran = $lingkaran";
