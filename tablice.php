<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <form action="" method="post">
    <input type="text" name="losowa" placeholder="losowa">
    <input type="submit">
  </form>
    <?php

    @$losowa = $_POST['losowa'];
    @$random = rand(0,100)."<br>";
    echo($random);

    echo("<table>");

    for($i = 1; $i <= $losowa; $i++){
       echo("<td>".$random."<?td>");
    }








  // @$rows = 11;
  // @$cols = 11;

  // echo("Zad 1"."<table>");

  // for ($r =1; $r < $rows; $r++){
  //   echo'<tr>';
  //   for ($c = 1; $c < $cols; $c++)
  //         echo '<td>' .$c*$r.'</td>';
  //  echo '</tr>';

  // }
  // echo("<br> <br>");
  // echo"</table>";

//Pole tekstowe ile liczb i wyswietl  liczby z zakresu 0 100 w tabeli po 20 w wierszu
// 1 liczba ostania, srodkowa (parzysta nie parzysta) 
//Suma
//Srednia
// W nowej tabeli wyswietl parzyste po 5
// W nowej tabeli wyswietl nieparzyste po 6
?>

<style>

td,
tr {
  border: 1px solid black;
  border-radius: 15px;
  background-color: green;
  color: white;
  font-size: 20px;
}

td:hover,
tr:hover {
  background-color: red;
}

    </style>
</body>
</html>