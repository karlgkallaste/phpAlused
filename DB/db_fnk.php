<?php
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 24.01.2019
 * Time: 13:01
 */
function connect_db($host,$dbUser,$dbPass, $dbName)
{
    $conn = mysqli_connect($host, $dbUser, $dbPass, $dbName);
    if (!$conn) {
        echo 'Unable to connect to MySQL<BR>';
        echo mysqli_connect_error() . '<br>';
        exit;

    }
    return $conn;
}