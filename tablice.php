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
    <?php

@$rows = 11;
@$cols = 11;

echo("Zad 1"."<table>");

for ($r =1; $r < $rows; $r++){
    echo'<tr>';
    for ($c = 1; $c < $cols; $c++)
          echo '<td>' .$c*$r.'</td>';
   echo '</tr>';

}
echo("<br> <br>");
echo"</table>";


?>

<style>

td,
tr {
  border: 1px solid black;
  border-radius: 15px;
  padding: 20px;
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