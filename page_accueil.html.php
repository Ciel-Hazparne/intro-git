<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BTS CIEL IR</title>
</head>
<body>
<H1>Ongi etorri</H1>
<h2>BTS CIEL IR San Josepe lizeoa Hazparne</h2>
<?php

date_default_timezone_set('Europe/Paris');

//fonction date
function getDateFr(): string
{
    $jours = ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];
    $mois = [
        1 => 'janvier', 2 => 'février', 3 => 'mars', 4 => 'avril',
        5 => 'mai', 6 => 'juin', 7 => 'juillet', 8 => 'août',
        9 => 'septembre', 10 => 'octobre', 11 => 'novembre', 12 => 'décembre'
    ];

    $timestamp = time();
    $jour = $jours[date('w', $timestamp)];
    $numeroJour = date('d', $timestamp);
    $moisNom = $mois[date('n', $timestamp)];
    $annee = date('Y', $timestamp);

    return "$jour $numeroJour $moisNom $annee";
}

// Utilisation :
$date = getDateFr();
$heure = date("H:i:s");

echo "<br>Bonjour, <br>Nous sommes le $date et il est $heure<br>";

?>

<img src="images/BandeauBtsCielIR.png" alt="BTS CIEL IR Hasparren" width="1024" height="auto">
</body>
</html>
