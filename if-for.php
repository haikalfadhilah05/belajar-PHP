<?php
    //Materi Percabangan (IF ELSE)
    $nilai = 78;
    echo "Nilai kamu adalah $nilai <br>";
    echo "Maka status kamu = ";
    if ($nilai > 78) {
        echo "Lulus Beneran";
    } else if ($nilai == 78) {
        echo "Pas KKM";
    } else{
        echo "tidak lulus";
    }
    echo "<hr>";

    $nilai_web = 79;
    $nilai_pbo = 82;
    echo "nilai web kamu = $nilai_web <br>";
    echo "nilai pbo kamu = $nilai_pbo <br>";
    echo "Kelulusan kamu =";
    if ($nilai_web >= 80 AND $nilai_pbo >= 80) {
        echo "Lulus 2 Mapel Produktif";
    } else if ($nilai_web >= 80 OR $nilai_pbo >= 80) {
        if ($nilai_web >= 80) {
            echo "Lulus Mapel WEB";
        }
        if ($nilai_pbo >= 80) {
            echo "Lulus Mapel PBO";
        }
    }else {
        echo "Tidak lulus Mapel Produktif";
    }
    echo "<hr>";
    // Materi Perulangan (while, do while, for)
    $i = 1;
    while ($i <= 5){
        echo "Hello World ! ke - $i <br>";
        $i++; // Assigment +1
    }
    echo "<hr>";
    $j = 1;
    do {
        echo $j . "<br>";
        $j++;
    } while ($j <= 5);
    echo "<hr>";

    for ($k = 10; $k >= 1; $k--){
        echo $k . "<br>";   
    }
    echo "<hr>";
    for ($x = 9; $x >= 1; $x--){
        for ($y = 1; $y <= $x; $y++){
            echo $y;
        }
        echo "<br>";
    }
    echo "<hr>";
    for ($z = 1; $z <= 10; $z++){
        if ($z % 2 == 0){
            echo $z . " - Genap <br>";
        } else{
            echo $z . " - Ganjil <br>";
        }
    }
?>