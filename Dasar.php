<?php
    //variable
    // $1nama; contoh salah (karena diawali angka)
    // $#nama; contoh salah (ada simbol ditengah)
    // nama; contoh salah (tidak ada simbol dolar)
    $nama = "rizki";
    $usia = 16;
    echo "Nama saya $nama <br>";
    echo "usia saya $usia tahun <br>";
    
    // Tipe data (integer, float, string)
    // (boolean, array)
    $namalengkap = "Rizki Giant 90"; //string
    $umur = 16; //integer
    $nilai = 76.56; //float
    $jomblo = TRUE; //boolean (TRUE/FALSE)

    // array string
    $namarpl1 = array("Alya", "Dwi", "Eben");

    echo "Nama lengkap : $namalengkap <br>";
    echo "Umur : $umur <br>";
    echo "NIlai : $nilai <br>";
    echo "Jomblo : $jomblo <br>";
    echo "<hr>";
    echo "Array 0 : $namarpl1[0] <br>"; //Alya
    echo "Array 1 : $namarpl1[1] <br>"; //Dwi
    echo "Array 2 : $namarpl1[2] <br>"; //Eben
    echo "<hr>";

    // Aritmatika (+ - / * %)
    echo "Angka1: " . $angka1 = 10; echo "<br>";
    echo "Angka2: " . $angka2 = 5; echo "<hr>";
    
    echo "tambah :" . $tambah = $angka1 + $angka2 . "<br>";
    echo "kurang :" . $kuarng = $angka1 - $angka2 . "<br>";
    echo "bagi :" . $bagi = $angka1 / $angka2 . "<br>";
    echo "kali :" . $kali = $angka1 * $angka2 . "<br>";
    echo "sisa bagi :" . $sisabagi = $angka1 % $angka2 . "<hr>";
    
    // operator perbandingan (=, >, <., !=, ==, ===)
    // Return TRUE(1), FALSE(NULL / KOSONG)
    $a = 10;
    $b = 5;
    $c = "10";

    echo "== :"; echo $a == $b; echo "<br>";
    echo "> :"; echo $a > $b; echo "<br>";
    echo "< :"; echo $a < $b; echo "<br>";
    echo "!= :"; echo $a != $b; echo "<br>";
    echo "=== :"; echo $a === $b; echo "<br>";
    echo "<hr>";
    //operator logika (AND, OR, &&, ||, !)
    //IF ELSE
    
    $x = 10;
    $y = 20;

    if($x == 10 AND $y == 20){ echo "terpenuhi 2 variable <hr>";}
    if($x == 10 OR $y == 10){ echo "salah satu variable terpenuhi <hr>";}
?>