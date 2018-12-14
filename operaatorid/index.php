<?php
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 14.12.2018
 * Time: 12:12
 */
//matemaatilised ja võrdlusoperaatorid
//matemaatilised
$arv1 = 42;
$arv2 = 11;
echo $arv1.'+'.$arv2.'='.($arv1 + $arv2.'<br>');
echo $arv1.'-'.$arv2.'='.($arv1 - $arv2.'<br>');
echo $arv1.'/'.$arv2.'='.($arv1 / $arv2.'<br>');
echo $arv1.'*'.$arv2.'='.($arv1 * $arv2.'<br>');
echo $arv1.'%'.$arv2.'='.($arv1 % $arv2.'<br>');
//võrdlusoperaatorid
echo '<hr>';
echo $arv1.'=='.$arv2.'on '.($arv1 == $arv2).'<br>';
echo $arv1.'!='.$arv2.'on '.($arv1 != $arv2).'<br>';
echo $arv1.'<='.$arv2.'on '.($arv1 <= $arv2).'<br>';
echo $arv1.'>='.$arv2.'on '.($arv1 >= $arv2).'<br>';
echo $arv1.'<'.$arv2.'on '.($arv1 < $arv2).'<br>';
echo $arv1.'>'.$arv2.'on '.($arv1 > $arv2).'<br>';
