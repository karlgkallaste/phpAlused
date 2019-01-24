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
function query($sql,$conn){
    $result  = mysqli_query($conn, $sql);

    if(!$result){
        echo 'Problem with <b>'.$sql.'</b><br>';
        exit;
    }
    return $result;
}
function getdata($sql,$conn){
    $data = array();
    $result = query($sql, $conn);
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $data[] = $row;
    }
    return $data;
}