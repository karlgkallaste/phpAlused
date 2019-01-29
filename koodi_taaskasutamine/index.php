<body class="taust">
<head>
    <link rel="stylesheet" href="stiil.css">
</head>
<menu class="Peamenu">
    <a href="index.php">Avaleht</a>
    <a href="index.php?leht=portfoolio">Portfoolio</a>
    <a href="index.php?leht=kaart">Kaart</a>
    <a href="index.php?leht=kontakt">Kontakt</a>
    <a href="index.php?leht=kont2akt">Muu</a>
</menu>

</body>
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
        echo '<h1 class="danger">ERROR 404<h1>';
        echo '<h1 class="danger">Valitud lehte ei eksisteeri!<h1>';
        echo "<iframe src=\"https://giphy.com/embed/5qFfeaFEIsaYueNKG8\" width=\"480\" height=\"269\"</iframe>";
    }
} else {
    $leht = $_GET['leht'];
    if(is_numeric($leht)){
        include('leht'.$leht.'.php');
    }
}
?>
