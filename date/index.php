<?php
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 21.01.2019
 * Time: 12:09
 */
echo "Ülesanne 8<br>";
echo date('d.m.Y G:i' , time());
echo "<br>Päev:";
//kuude massiiv
$p2ev = array(1=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede');
//kuupäevad massiividesse
$paev = $p2ev[date('n')];
//kuupäeva väljastamine
echo $paev;

