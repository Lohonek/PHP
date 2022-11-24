<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="var1">
    <input type="text" name="var2">
    <input type="submit" name="sub">
</form>

    <?php

     $var1 = $_POST['var1'];
     $var2 = $_POST['var2'];
     $var1duze = strtoupper($var1);
     $var2duze = strtoupper($var2);
     echo("String 1: ".$var1."<br>");
     echo("String 2: ".$var2);
     
     $losowa = rand(65,90);

     $ilea = 0;
     $ileb = 0;
     $ilec = 0;
     $ile65 = 0;


     $chrs = [];
     for ($i = 0; $i<strlen($var1); $i++){
     $chrs[] = ord($var1[$i]);
     if($chrs[$i] == 65){
        $ile65 = $ile65 + 1;
    }
    }
    echo("<hr>");
    echo("Losowa liczba: ".$losowa." ----- Liczba z pierwszej: ".$chrs[0]);
    echo("<hr>");
    if($losowa >$chrs[0] ){
        echo("Losowa liczba jest wieksza od pierwszej");
    }   elseif($losowa == $chrs[0] ){
        echo("Losowa liczba jest rowna pierwszej");
    }   else{
        echo("Losowa liczba jest mniejsza od pierwszej");
    }
    echo("<hr>"."Zamiana na ASCI 1 : ");
    print_r($chrs);

    for($i = 0; $i <strlen($var1); $i++){
        if($var1[$i] == "a"){
            $ilea = $ilea + 1;
        }elseif($var1[$i] == "b"){
            $ileb = $ileb + 1;
        }elseif($var1[$i] == "c"){
            $ilec = $ilec + 1;
        }
    }

    echo("<hr>"."Ile a:".$ilea);
    echo("<hr>"."Ile b:".$ileb);
    echo("<hr>"."Ile c:".$ilec);
    echo("<hr>"."Ile 65:".$ile65);



    ?>



    <!-- // Wprowadz 2 zdania z klawaitury ---Done
    // Wyswietl kazde wyraz w nowej lini od konca
    // ile liter a,b,c ---Done
    // zamienic male na wielkie ---Done
    // Duza A na C, B na D, Z na B
    // zamiana na asci ---DONE
    // ile liczb 65 ---DONE
    // losowanie liczby 65 90 i porwnac z pierwsza liczba ---DONE -->
</body>
</html>