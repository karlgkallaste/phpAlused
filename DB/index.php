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
echo '<pre>';
print_r($iktconn);