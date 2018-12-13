<?php
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 13.12.2018
 * Time: 13:07
 */

//MUUTUJATE DEFINEERIMINE
$test = 'Tere Maailm<br>';
$test2 = 'Hello World<br>';
print $test.$test2;
$taisarv = 3;
$reaalarv = 3.3;
$sone = 3;
$toevaartusTrue = True;
$toevaartusFalse = False;
//V2ljastame
echo 'Täisarv: '. $taisarv.'<br>';
echo 'Reaalarv: '. $reaalarv.'<br>';
echo 'Sõne: '. $sone.'<br>';
echo 'true '. $toevaartusTrue.'<br>';
echo 'false '. $toevaartusFalse.'<br>';
echo '<hr>';
//tyybikontroll
echo gettype(sone);

echo $sone + $sone;
echo '<br>';
$summa = $sone + $sone;
settype($summa, type.'string');
echo gettype($summa);
echo 'Summa: '.$summa.'<br>';
?>