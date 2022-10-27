<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupa 2 DR</title>
</head>
<body>
    <!-- // 50 ELEEMNTOW 30 -40
    // WYSWIETL OD KONCA
    // SREDNIA Z 1 TAB >= OD 35
    // ILE LICZB PARZYSTYCH Z 2 TAB
    // SPRAWDZ Z KTOREJ TAB JEST wiecej 35 -->

    <?php
        @$tablica1 = array(50);
        @$tablica2 = array(50);
        @$srednia1 = 0;
        @$ilelicbz = 0;
        @$ilelicbz1 = 0;
        @$ilelicbz2 = 0;

        echo("Tablica 1: ");
        for($i = 0; $i< 50; $i++){
            $tablica1[$i] = rand(30,40);
            echo($tablica1[$i]." ");
            if($tablica1[$i] >= 35){
                $srednia1 = $srednia1 + $tablica1[$i];
                @$ilelicbz = $ilelicbz + 1;
            }
        }
        echo("<hr>");
        echo("Tablica 2: ");
        for($j = 0; $j< 50; $j++){
            $tablica2[$j] = rand(30,40);
            echo($tablica2[$j]." ");
            if($tablica2[$j] % 2 == 0){
                $ilelicbz2 = $ilelicbz2 + 1;
            }
            if($tablica2[$j] >= 35){
                @$ilelicbz1 = $ilelicbz1 + 1;
            }
        }
        echo("<hr>");

        echo("Srednia 1: ".$srednia1/$ilelicbz);
        echo("<hr>");
        echo("Liczba parz w 2 tab: ".$ilelicbz2);
        echo("<hr>");

        if($ilelicbz1 > $ilelicbz2){
            echo("W pierweszej tablicy jest wicej liczb wiekszych niz 35:"." ".$ilelicbz)."<hr>";
        }else{
            echo("W drugiej tablicy jest wicej liczb wiekszych niz 35"." ".$ilelicbz1)."<hr>";
        }

        

    ?>
</body>
</html>