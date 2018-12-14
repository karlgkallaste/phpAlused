<?php
header('Refresh: 1000');
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 14.12.2018
 * Time: 13:57
 */
//for($)jm = alg; $jm <= lopp;
//tegevused mis toimuvad nii kaua kuni v22rtus ei ole l6ppv22rtust saavutand
//
echo '<h5>Ülesanne 4</h5>';
for($arv =1; $arv <= 10; $arv++){
    $varv = '';
  /*  if($arv % 2  == 0) {
        $arv = 'green';
    }else {
            $varv = 'red';
        }*/
        $varv = ($arv % 2 == 0) ? 'green' :'red';
    echo '<div style="color: '.$arv.' ">'.$arv.'</div>';
}
?>
<style>
    table,tr,td{
        width: 150px;
        height: 20px;
        border: solid 1px white;
        border-collapse: collapse;
    }
</style>
<?php
echo '<hr>';
echo '<h5>Ülesanne 5</h5>';
echo '<table>';
for($rida = 1; $rida <= 5; $rida++){
    echo '<tr>';
    for($veerg = 1; $veerg <= 5; $veerg++) {
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0,15));
        }
        echo '<td style="background: ' . $varv . '">';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<hr>';
echo '<h5>Ülesanne 6</h5>';
echo '<table style="border-collapse: collapse">';
// ülemine punane riba
for($arv2 = 0; $arv2 <= 10; $arv2++){
    $txt = ($arv2 == 0) ? '&nbsp;' : $arv2;
    echo '<th style="width: 10px; text-align: center; border: solid 2px black; background: deepskyblue">';
    echo $txt;
    echo '</th>';
}
for($arv1 = 1; $arv1 <= 10; $arv1++){
    echo '<tr>'; // rea algus
    // üks punane kast
    echo '<th style="width: 10px; text-align: center; border: solid 2px black; background: mediumvioletred">';
    echo $arv1;
    echo '</th>';
    for($arv2 = 1; $arv2 <= 10; $arv2++) {
        echo '<th style="width: 10px; text-align: center; border: solid 2px black; background: white">';
        echo $arv1 * $arv2;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
$arv = 1234;
$kordamine = 0;
while($arv != 0){
    $number = $arv % 10;
    echo 'Number = '.$number.'<br>';
    $arv = $arv / 10;
    echo 'Arv float = '.$arv.'<br>';
    settype($arv, 'int');
    echo 'Arv int = '.$arv.'<br>';
    if($number == 5) $kordamine++;
    echo '<hr>';
}
echo 'Number 5 esineb  '.$kordamine.' korda<br>';




