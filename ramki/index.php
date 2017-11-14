<html>
<head>

<meta http-equiv="Content-Language" content="pl">
<META NAME="Keywords" CONTENT="">

<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<title>Strona</title>
<link rel="stylesheet" href="style.css" type="text/css">

<body bgcolor="#ADD8E6">
<center><font size="5"> <b> Formularz </b> </font></center> <br>

<p1> Formularz - przykład pola tekstowego: </p1><br>
<form method="post">
<div class="div" align="left">
<label for="imie"><b>Imie:</b></label>
<div align="right" style="float:right"><input type="text" name="Imie" id="imie"></div><br><br>

<label for="nazwisko"><b>Nazwisko:</b></label>
<div align="right" style="float:right"><input type="text" name="Nazwisko" id="nazwisko"></div><br><br>

<label for="zawód"><b>Zawód:</b></label>
<div align="right" style="float:right"><input type="text" name="Zawód" id="zawód"></div><br>

</div>

<label for="pass"><b>Podaj hasło</b></label>
<input type="password" name="Hasło" id="pass"><br><br>



<p1><b> Płeć: </b></p1><br>

<input type="radio" name="płeć" id=”m” value="mężczyzna"> 
<label for="">Mężczyzna</label><br>

<input type="radio" name="płeć" id=”k" value="kobieta"> 
<label for="k">Kobieta</label><br><br>

<p1><b> Wybierz produkt: </b></p1> <br><Br>

<select name="Produkt" multiple="multiple" >
<option>Truskawki</option>
<option>Maliny</option>
<option>Poziomki</option>
</select><br><br>

<p1><b> Wybierz produkt: </b></p1> <br><Br>

<select name="Produkty" multiple="multiple" size="7">
<optgroup label="Owoce miekkie">
<option>Truskawki</option>
<option>Maliny</option>
<option>Poziomki</option>
<optgroup label="Owoce twarde">
<option>Jabłka</option>
<option>Gruszki</option>
</optgroup>
</select><br><br>

<b>Wpisz swoje uwagi:</b> <input type="submit" value="ok"> <input type="reset" value="Wyczyść"><br><br>
<textarea name="uwagi" cols="50" rows="5"></textarea> 



</form>

<div class="div2">

<?php
echo('Imie: ' . $_POST['Imie'] . '<br>');
echo('Nazwisko: ' . $_POST['Nazwisko'] . '<br>');
echo('Zawód: ' . $_POST['Zawód'] . '<br>');
echo('Hasło: ' . $_POST['Hasło'] . '<br>');

echo('Płeć: ');

switch($_POST['płeć'])
{
 case "mężczyzna":
           echo "Mężczyzna";
           break;
 case "kobieta":
           echo "Kobieta";
           break;

}

echo('<br>' . 'Produkt 1: ' . $_POST['Produkt'] . '<br>');
echo('Produkt 2: ' . $_POST['Produkty'] . '<br>');
echo('Uwagi: ' . $_POST['uwagi'] . '<br>');
?>

</div>


</body>
</html>
