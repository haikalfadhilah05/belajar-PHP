<?php
    // Nama : haikal fadhilah ibrahim
    // kelas : 11 RPL 1
    echo "No 6 <br>";
    for ($x = 9; $x >= 1; $x--){
        for ($y = 1; $y <= $x; $y++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    
    echo "No 2 <br>";
    for ($x = 1; $x <= 9; $x++){
        for ($y = 1; $y <= $x; $y++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    
    echo "No 1 <br>";
    $star=10;
    for( $a=$star;$a>0;$a--){
        for($i=1; $i<=$a; $i++){
            echo "&nbsp";
        }
         for($a1=$star;$a1>=$a;$a1--){
           echo"*";
        }
           echo"<br>";
    }
    echo "<hr>";

    echo "No 4 <br>";
    $star=10;
    for($a=1; $a<=$star; $a++){
        for($b=1; $b<=$a; $b++){
        echo "&nbsp";
    }
    for($c=$star; $c>=$a; $c-=1){
        echo "*";
    }
        echo "<br>";
    }
    echo "<hr>";

    echo "No 5 <br>";
    $star=10;
    for($a=1; $a<=$star; $a++){
        for($i=1; $i<=$a; $i++){
            echo " &nbsp";
        }
        for($c=$star; $c>=$a; $c-=1){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";

    echo "No 7 <br>";
    $star=10;
    for($a=1; $a<=$star; $a++){
        for($b=$star; $b>=$a; $b-=1){
            echo "&nbsp";
          }
          for($c=1; $c<=$a; $c++){
            echo "*";
          }
            echo "<br>";
            }
            for($a=1; $a<=$star; $a++){
            for($b=1; $b<=$a; $b++){
                echo "&nbsp";
            }
            for($c=$star; $c>=$a; $c-=1){
                echo "*";
            }
        echo "<br>";
    }
    echo "<hr>";

    echo "No 3 <br>";
    $star=10;
    for($a=$star;$a>0;$a--){
        for($i=1; $i<=$a; $i++){
            echo " &nbsp";
        }
        for($a1=$star;$a1>=$a;$a1--){
            echo"*";
        }
    echo"<br>";
    }
    echo "<hr>";

    echo "No 9 <br>";
    for ($x = 5; $x >= 1; $x--){
        for ($y = 1; $y <= $x; $y++){
            echo $y;
        }
        echo "<br>";
    }
    echo "<hr>";

   for ($i = 1; $i <= 5; $i++){
    for ($j = $i; $j >= 1; $j--){
        echo $j;
    }
    echo "<br>";
    }
?>