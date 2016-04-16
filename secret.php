<?php
    require("konfig.php"); if(empty($_SESSION['uzer'])) 
    {        header("Location: index.php");
        die("Redirecting to index.php");}?>

<html> 
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Aplikacja responsywna - cennik Poczty Polskiej</title>
<script type="text/javascript" src="libs/jquery-1.9.1.min.js"></script>
<script src="libs/jquery-calx-1.1.9.min.js"></script>
<script type="text/javascript" src="skrypt3.js"></script>
<style>
td{
    padding:6px 12px;
};</style>
</head>


<body>
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
	    <li><a href="index.php">[[POWRÓT]]</a></li>
	    <li><a href="logout.php">[[WYLOGUJ]]</a></li>
      <li><a href="#opis">OPIS</a></li>
      <li><a href="#bts1">BOOTSTRAP</a></li>
      <li><a href="#JS1">JAVASCRIPT</a></li>
      <li><a href="#krajowa1">PRZESYŁKA KRAJOWA</a></li>
      <li><a href="#zagran">PRZESYŁKA ZAGRANICZNA</a></li>

    </ul>
  </div>
</nav>
<div class="container">
<div id="opis">
	<h3 align="center">Opis aplikacji wewnętrznej</h3>
	<p>Cennik Poczty Polskiej zawierający kalkulację cen: zarówno krajowych, jak i zagranicznych. Cennik wymaga wcześniejszego założenia konta. Po zalogowaniu użytkownik zostanie przekierowany do "secret.php". Całość ma charakter responsywny.<br><br>Cennik zawiera konkretne wartości, ponieważ nie znany jest realny algorytm szacowania kosztów. W przypadku opracowania algorytmu i wzorów, aplikacja mogłaby zostać użyta jako prawdziwy kalkulator kosztów wysyłki Poczty Polskiej.<br><br>Dolny pasek nawigacyjny zmienia swój kształt przy szerokości około 532 piksele.</p>
</div>

<div id="bts1">
	<h3 align="center">Bootstrap</h3>
	<p>Bootstrap został użyty do pasków nawigacyjnych.<br> Mógłby również zostać użyty dla interfejsu całego formularza - zgodnie z poniższymi przykładami: </p>
 <form role="form">
  <div class="form-group">
	  <label for="email">Pole tekstowe formularza, np. adres e-mail:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Hasło - pole zaciemnione:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Zaznacz/odznacz.</label>
  </div>
  <button type="submit" class="btn btn-default">PRZYCISK</button>
  <br><br>
  <label for="sel1">Lista wyboru:</label>
  <select class="form-control" id="sel1">
    <option>opcja1</option>
    <option>opcja2</option>
    <option>opcja3</option>
    <option>opcja4</option>
  </select>
</form>
</div>

<div id="JS1">
	<h3 align="center">JavaScript</h3>
	<p>Elementy tego interfejsu zostały zbudowane glównie w oparciu o JavaScript, czy też framework jQuery.
		Całość zgodna jest z biblioteką jQuery-calx, która może zostać alernatywnie użyta.<br> Poniższe formularze nie mają jednak charakteru responsywnego, ponieważ opierają się na klasycznej JS i HTML-u.</p>
</div>


<h3 align="center" id="krajowa1">Przesyłka listowa krajowa <br>(list polecony do 2 kg):</h3>
<form id="calx">
<table><tbody> <tr><tr>
<td>WAGA PRZEDMIOTU :</td></tr>
<tr><td>
<select name="wagaListu" id="wagaListu">
<option value="77">do 350 gramów</option>
<option value="79">350-1000 gramów</option>
<option value="81">1000-2000 gr</option>
</select>    </td></tr>	<tr>
<td>PRIORYTETOWA lub EKONOMICZNA :</td></tr>
<tr><td>
<select name="priorytet" id="priorytet">
<option value="10">EKONOMICZNA</option>
<option value="11">PRIORYTETOWA</option>
</select>   </td></tr>	<tr>
<td>GARBARYT A lub GARBARYT B :</td></tr>
<tr><td>
<select name="garbaryt" id="garbaryt">
<option value="20">GARBARYT A</option>
<option value="21">GARBARYT B</option>
</select>   </td></tr>
<tr><td>Potwierdzenie odbioru?</td>
</tr><tr>
<td><input id="radio1" type="radio" name="group1" value="bezOdbioru" checked="checked" />Nie</td></tr><tr>
<td>    <input id="radio2" type="radio" name="group1" value="Odbior" />Tak, potwierdź odbiór (dodatkowa cena: 1.90 zł)</td>
</tr><tr><td>Potwierdzenie doręczenia albo zwrotu?</td>	</tr><tr>
<td><input id="radio3" type="radio" name="group2" value="bezDoreczenia" checked="checked" />Nie</td></tr><tr>
<td>    <input id="radio4" type="radio" name="group2" value="Doreczenie" />Tak, potwierdź doręczenie albo zwrot (dodatkowa cena: 0.50 zł)</td>
</tr><tr>
<td>ILOŚĆ PRZESYŁEK:</td></tr><tr><td>
<input type="number" id="ilosc" value="1"></td>
</tr>  </tbody>	</table> </form><br>
<input type="image" name="wynik" id="przesylkakrajowa" value="[   WYNIK   ]" type="button" style="float: left;" src="WYNIK.jpg"><br><br><br><br>
<section id="zagran">   <h3 align="center">Przesyłka listowa zagraniczna <br>(do 2 kg):</h3>
<form id="calx"><table>   <tbody>    <tr>
<td>LOKALIZACJA (STREFA) :</td>
</tr>   <tr><td><select name="zagrlokalizacja" id="zagrlokalizacja">
<option value="100">Europa (Cypr i Rosja)</option>
<option value="105">Ameryka Północna, Afryka</option>
<option value="109">Ameryka Południowa, Azja</option>
<option value="115">Australia i Oceania</option>
</select>   </td></tr>
<tr>  <td>WAGA PRZEDMIOTU :</td></tr>
<tr><td><select name="zagrwagaPrzedmiotu" id="zagrwagaPrzedmiotu">
<option value="5">50 gramów</option> <option value="7">50-100 gramów</option>
<option value="12">100-350 gr</option>
<option value="14">350-500 gr</option>
<option value="17">0.5-1 kg</option>
<option value="33">1-2 kg</option>
</select>  </td></tr><tr>
<td>PRIORYTETOWA :</td></tr>
<tr><td><select name="zagrprior" id="zagrprior">
<option value="1">TAK</option>
<option value="2">NIE</option>
</select>   </td> </tr>	<tr>
<td>ILOŚĆ PRZESYŁEK:</td></tr><tr><td>
<input type="number" id="zagrilosc" value="1"></td>
</tr>   </tbody></table>   </form>  
<br><br>
<input type="image" name="wynik" id="zagranicznaprzesylka" value="[   WYNIK   ]" type="button" style="float: left; padding:5px 10px;" src="WYNIK.jpg">
<br><br><br><br><br><br>

</body>

<script type="text/javascript" src="skrypt1.js"> </script>
<script type="text/javascript" src="skrypt2.js"> </script>
</html>
