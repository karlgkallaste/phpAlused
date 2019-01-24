<?php
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 24.01.2019
 * Time: 12:17
 */
require_once ('db_fnk.php');
require_once 'conf.php';
$iktconn = connect_db(DBHOST, DBUSER,DBPASS,DBNAME);
/*echo '<pre>';
print_r($iktconn);*/
//insert
$sql = 'UPDATE user SET last_name="Ebatavaline" WHERE user_id= 1';
$res = query($sql, $iktconn);

//select
$sql = 'SELECT * FROM user';
$res = getdata($sql,$iktconn);

echo '<pre>';
print_r($res);
echo 'Tere '.$res[0]['first_name'];

