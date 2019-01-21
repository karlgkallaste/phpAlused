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
$p2ev = array(1=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev', 'Pühapäev');
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
echo "<br>";
//sünnipeäva arvutamine.
$userDob = '1987-04-02';
$userDob2 = '1999-05-31';

//date time infost mis on yleval.
$dob = new DateTime($userDob);
$dob2 = new DateTime($userDob2);

//v6rdlemine hetke kuup2eva ja synnip2evaga
$now = new DateTime();
$now2 = new DateTime();

//vahe synnip2eval ja hetke kuup2eval
$difference = $now->diff($dob);
$difference2 = $now2->diff($dob2);

//tema vanus, minu vanus ja vahe.
$age = $difference->y;
$age2 = $difference2->y;
$vahe = $age - $age2;

//Print osa
echo "Esimese inimese vanus: " . $age. "aastat";
echo "<br>";
echo "Minu vanus: ". $age2. "aastat";
echo "<br>";
echo "Meie vanuse vahe: ".$vahe. "aastat";
echo "<br>";
//Juubel?

