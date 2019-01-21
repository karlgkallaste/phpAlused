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
//päevade massiiv
$p2ev = array(1=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede');
//päev massiividesse
$paev = $p2ev[date('n')];
//päeva väljastamine
echo $paev;
echo "<br>";
//kuude osa.
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;
echo "<br>";
//J2rgmine jaanip2ev
$d1=strtotime("June 21");
$d2=ceil(($d1-time())/60/60/24);
echo "Järgmise Jaanipäevani on " . $d2 ." päeva";
//sünnipeäva arvutamine.
