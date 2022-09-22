<?php

function kubus (){ 
    $sisi = 10; $volume = $sisi*$sisi*$sisi; 
    echo " 1. Rumus Menghitung Volume Kubus";
    echo "<br>";  
    echo " Rumus Volume : V = S3";
    echo "<br>"; 
    echo " Diketahui S adalah panjang rusuk kubus / sisi";
    echo "<br>"; 
    echo " Panjang Sisi Kubus (s) : $sisi cm";
    echo "<br>"; 
    echo " V = $sisi x $sisi x $sisi";
    echo "<br>"; 
    echo " Hasil Volume nya adalah : $volume ";
    echo "<hr>";  
}

function limas (){ 
    $p = 1/3; 
    $la = 48;
    $t = 16; 
    $volume = $p*$la*$t; 
    echo " 2. Rumus Menghitung Volume Limas";
    echo "<br>";  
    echo " Rumus Volume : V = 1/3 x Luas Alas x Tinggi"; 
    echo "<br>"; 
    echo " Luas Alas : $la cm"; 
    echo "<br>"; 
    echo " Tinggi : $t cm"; 
    echo "<br>"; 
    echo " V = 1/3 x $la x $t";
    echo "<br>";  
    echo " Hasil Volume nya adalah : $volume ";
    echo "<hr>";  
} 

function prisma (){ 
    $la = 50; 
    $t = 3; 
    $volume = $la*$t; 
    echo " 3. Rumus Menghitung Volume Prisma";
    echo "<br>";  
    echo " Rumus Volume : V = Luas Alas x Tinggi";
    echo "<br>";  
    echo " Luas Alas : $la cm";
    echo "<br>";  
    echo " Tinggi : $t cm";
    echo "<br>";  
    echo " V = $la x $t";
    echo "<br>";  
    echo " Hasil Volume nya adalah : $volume ";
    echo "<hr>";  
}

kubus(); 
echo "<br>"; 
limas();
echo "<br>";
prisma();


    
?>


