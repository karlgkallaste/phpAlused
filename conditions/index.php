<?php
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 14.12.2018
 * Time: 12:32
 */
//tingimused
/*
 * if(tingimus){
 * tegevused mis toimivad siis
 * kui tingimus kehtib
 * else{
 * muidu kui tingimus ei kehti toimuvad siia
 * kirjutatud tegevused
 */
echo '<h5>Ülesanne</h5>';
$arv = 68;
IF($arv %  2 == 0){
    echo '<div style="color: green">'.$arv.'</div>';
 }
 else{
    echo '<div style="color: red">'.$arv.'</div>';

}
echo'<hr>';
echo '<h5>Ülesanne 2</h5>';
$arv = rand(0,100);
if($arv >= 0 and  $arv < 25) {
    echo '<div style="color:red">' . $arv . '</div>';
} else if ($arv >= 25 and $arv < 50) {
    echo '<div style="color:green">' . $arv . '</div>';
}else if ($arv >= 50 and $arv < 75) {
    echo '<div style="color:blue">' . $arv . '</div>';
}else if ($arv >= 75 and $arv < 100) {
    echo '<div style="color:orange">' . $arv . '</div>';
}
//switch (kontroll)
//case:vastus;
//tegevused mis antud casei puhul toimivad
//break;
//default;
//k6ik tegevused mis toimuvad kui muu ei sobi.
//break;
?>

<style>
    div {
    width: 100px;
    height: 100px;
    border-radius: 50px;
    border: solid 2px black;
}

</style>

<?php
echo'<hr>';
echo '<h5>Ülesanne 3</h5>';
$aktiivne = 'roheline';
switch ($aktiivne) {
    case 'punane';
        echo '<div style="background=red"></div>';
        echo '<div></div>';
        echo '<div></div>';
}
switch ($aktiivne) {
    case 'roheline';
        echo '<div style="background=green"></div>';
        echo '<div></div>';
        echo '<div></div>';


