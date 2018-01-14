<?php
if(isstet($_GET["wyslij"])
{
$imie = $_GET["imie"];
$nazwisko = $_GET["nazwisko"];
$wiek = $_GET["wiek"];

echo "Witaj ".$imie." ".$nazwisko." ".$wiek;

}



?>
<form method="get">
<input type="text" name="imie" placeholder="wprowadz imie">
<input type="text" name="nazwisko" placeholder="wprowadz nazwisko">
<input type="text" name="wiek" placeholder="wprowadz wiek">
<input type="submit" name="wyslij" value="wyślij">

</form>

