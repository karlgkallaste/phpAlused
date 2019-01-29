<menu>
    <a href="index.php">Avaleht</a>
    <a href="index.php?leht=portfoolio">Portfoolio</a>
    <a href="index.php?leht=kaart">Kaart</a>
    <a href="index.php?leht=kontakt">Kontakt</a>
</menu>
<?php
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 29.01.2019
 * Time: 10:16
 */

if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {
    $leht = $_GET['leht'];
    if(is_numeric($leht)){
        include('leht'.$leht.'.php');
    }
}
?>
