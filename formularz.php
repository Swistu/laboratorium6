<?php
if(isstet($_GET["wyslij"])
{
$imie = $_GET["imie"];
$nazwisko = $_GET["nazwisko"];

echo "Witaj ".$imie." ".$nazwisko;

}



?>
<form method="get">
<input type="text" name="imie" placeholder="wprowadz imie">
<input type="text" name="nazwisko" placeholder="wprowadz nazwisko">
<input type="submit" name="wyslij" value="wyślij">
</form>

