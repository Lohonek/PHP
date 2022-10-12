<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sklep u Janusza</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />

  </head>
  <body>
  <form action="" method="post">
    <h1 id="oferta">Oferta Sklepu</h1>
    <div id="tabela">

      <table border="1">
        <tr>
          <td>LP.</td>
          <td>PRODUKT</td>
          <td>CENA</td>
          <td>ILOSC</td>
        </tr>
        <tr>
          <td>1</td>
          <td>MLEKO</td>
          <td>4.99$</td>
          <td>
            <select name="mleko" id="mleko">
              <option value="0">0</option>
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>BUŁKA</td>
          <td>1.60$</td>
          <td>
            <select name="bulka" id="bulka">
              <option value="0">0</option>
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>CHLEB</td>
          <td>5.30$</td>
          <td>
            <select name="chleb" id="chleb">
              <option value="0">0</option>
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>MASŁO</td>
          <td>8.90$</td>
          <td>
            <select name="maslo" id="maslo">
              <option value="0">0</option>
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>KEFIR</td>
          <td>2.15$</td>
          <td>
            <select name="kefir" id="kefir">
              <option value="0">0</option>
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </td>
        </tr>
      </table>
    </div>

    <div class="content">
      <div class="lewo">

          <label for="sk">Stały klient</label>
          <input type="checkbox" id="sk" name="sk"  value="zaz"/> <br />
          <br />
          Dostawa: <br />
          <label for="d1">Paczkomat[9.90zl]</label>
          <input type="radio" id="d1" name="dos" value="pacz" /> <br />
          <label for="d1">Poczta[12.50zl]</label>
          <input type="radio" id="d2" name="dos"  value="pocz"/> <br />
          <label for="d1">Odbior osobisty[0zl]</label>
          <input type="radio" id="d3" name="dos" value="ob"  />
          <br /><br />

          Platność: <br />
          <label for="karta">Karta</label>
          <input type="radio" name="platnosc" id="karta" value="karta"/> <br>
          <label for="przelew">Przelew</label>
          <input type="radio" name="platnosc" id="przelew" value="przelew" /><br>
          <label for="blik">Blik</label>
          <input type="radio" name="platnosc" id="blik" value="blik">
        </div>
        <div class="srodek">
          <input type="text" name="imie" id="im" placeholder="Imię" class="istyle" /> <br />
          <br />
          <input type="text" name="naz" id="naz" placeholder="Nazwisko" class="istyle" />
          <br /><br />
          <input type="text" name="tel" id="tel" placeholder="Telefon" maxlength="9" class="istyle" />
          <br /><br />
          <input type="text" name="adres" id="adres" placeholder="Adres " class="istyle" />
          <br /><br />
          <input type="text" name="kod" id="kod" placeholder="Kod pocztowy "  maxlength="6" class="istyle"/>
          <br /><br />
          <!-- <button value="Zaplać" onclick="obliczanie()" type="button" class="istyle">Zapłać</button> -->
          <input type="submit" class="istyle">
        
        </div>
        </form>
      <div class="prawo">
        <p id="wynik">
        <?php
      //Zmienne
      @$imie = $_POST["imie"];
      @$naz = $_POST["naz"];
      @$tel = $_POST["tel"];
      @$adres= $_POST["adres"];
      @$kod = $_POST["kod"];
      @$staly = $_POST["sk"];
      @$dostawa = $_POST["dos"];
      @$platnosc = $_POST["platnosc"];

      @$mleko = $_POST["mleko"];
      @$bulka = $_POST["bulka"];
      @$chleb = $_POST["chleb"];
      @$maslo = $_POST["maslo"];
      @$kefir = $_POST["kefir"];

      $suma = $mleko * 4.99 + $bulka* 1.60 + $chleb * 5.30 + $maslo * 8.90 + $kefir * 2.15;

      // Sprawdzenie dostawy
      if($dostawa == "pacz"){
        $suma = $suma + 9.90;
      }
      elseif($dostawa == "pocz"){
        $suma = $suma + 12.50;
      }elseif($dostawa == "od"){
        $suma = $suma;
      }


      //Sprawdzenie stalego klienta
      if ($staly == 'zaz'){
         $suma = $suma * 0.95;
       }

       $suma = $suma * 1000;
       $suma = round($suma);
       $suma = $suma / 1000;

      echo("Dane Zamowienia: <br>"."Imię: ".$imie."<br>"."Nazwisko: ".$naz."<br>"."Telefon: ".$tel."<br>"."Adres: ".$adres."<br>"."Kod: ".$kod."<br>"."Cena koncowa: ".$suma)."$<br>";


       //Sprawdzenie platnosci
      if($platnosc == "karta"){
        echo("Płatność: Karta");
      }
      elseif($platnosc == "przelew"){
        echo("Płatność: Przelew");
      }elseif($platnosc == "blik"){
        echo("Płatność: BLIK"); 
      }

      ?>

        </p>
        <p id="platnosc"></p>
      </div>
    </div>
    </div>
    <!-- <script src="app.js"></script> -->
      
  </body>
</html>
