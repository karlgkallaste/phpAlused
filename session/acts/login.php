<?php
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 24.01.2019
 * Time: 14:34
 */
//andmed html vormi poolt
require_once '../db/conf.php';
require_once '../db/db_fnk.php';
$username = $_GET['uname'];
$password = $_GET['upass'];
$ikt = connect_db(DBHOST,DBUSER,DBPASS,DBNAME);
$sql = 'SELECT * FROM user WHERE username="'.$username.'" AND password="'.md5($password).'"';
$users = getData($sql, $ikt);
// väljastame andmed
// loome kasutaja sessiioon, kui ta andmebaasis olemas
if($users !== false){
    session_start();
    $_SESSION['user'] = $users[0];
    header('Location: ../index.php');
}