<center>
<h1>Ülesanne 9</h1>
</center>
<p>1)Kasutaja lisab vormi nime, seda näiteks suured ja väikesed tähed läbisegi. Sina kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega.
    Näiteks: sisend–>mARiO; väljund–>Tere, Mario!<br>
    2)Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada. Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.
    3)Näiteks: sisend–>stalker; väljund–>S.T.A.L.K.E.R.<br>
    Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
    Näiteks: sisend–>Sa oled täielik noob; väljund–>Sa oled täielik ***<br>
    5)Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee. Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega
    Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee</p>
<hr>
<?php
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 24.01.2019
 * Time: 11:59
 */
$tekst = 'Karl-Gustav';

echo '1)';
echo 'Tere, '. ucwords($tekst).'!' ;
echo "<br>";
