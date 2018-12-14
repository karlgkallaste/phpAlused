<?php
header('Refresh: 1');
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
        width: 500px;
        height: 100px;
        border: solid 1px black;
        border-collapse: collapse;
    }
</style>
<?php
echo '<h5>Ülesanne 2</h5>';
echo '<table>';
for($reaNumber = 1; $reaNumber <= 5; $reaNumber++){
    echo '<tr>';
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $varv = $varv.dechex(rand(0, 15));
    }
    echo '<td style="background: '.$varv.'">&nbsp;</td>';
    echo '</tr>';
}
echo '</table>';
