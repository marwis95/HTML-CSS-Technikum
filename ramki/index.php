<html>
<head>

<meta http-equiv="Content-Language" content="pl">
<META NAME="Keywords" CONTENT="">

<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<title>Strona</title>
<link rel="stylesheet" href="style.css" type="text/css">

<body bgcolor="#ADD8E6">
<center><font size="5"> <b> Formularz </b> </font></center> <br>

<p1> Formularz - przyk�ad pola tekstowego: </p1><br>
<form method="post">
<div class="div" align="left">
<label for="imie"><b>Imie:</b></label>
<div align="right" style="float:right"><input type="text" name="Imie" id="imie"></div><br><br>

<label for="nazwisko"><b>Nazwisko:</b></label>
<div align="right" style="float:right"><input type="text" name="Nazwisko" id="nazwisko"></div><br><br>

<label for="zaw�d"><b>Zaw�d:</b></label>
<div align="right" style="float:right"><input type="text" name="Zaw�d" id="zaw�d"></div><br>

</div>

<label for="pass"><b>Podaj has�o</b></label>
<input type="password" name="Has�o" id="pass"><br><br>



<p1><b> P�e�: </b></p1><br>

<input type="radio" name="p�e�" id=�m� value="m�czyzna"> 
<label for="">M�czyzna</label><br>

<input type="radio" name="p�e�" id=�k" value="kobieta"> 
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
<option>Jab�ka</option>
<option>Gruszki</option>
</optgroup>
</select><br><br>

<b>Wpisz swoje uwagi:</b> <input type="submit" value="ok"> <input type="reset" value="Wyczy��"><br><br>
<textarea name="uwagi" cols="50" rows="5"></textarea> 



</form>

<div class="div2">

<?php
echo('Imie: ' . $_POST['Imie'] . '<br>');
echo('Nazwisko: ' . $_POST['Nazwisko'] . '<br>');
echo('Zaw�d: ' . $_POST['Zaw�d'] . '<br>');
echo('Has�o: ' . $_POST['Has�o'] . '<br>');

echo('P�e�: ');

switch($_POST['p�e�'])
{
 case "m�czyzna":
           echo "M�czyzna";
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
