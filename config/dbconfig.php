<?php
$hn = 'localhost';
$un = 'fastburger_admin';
$pw = 'cmB3-QDItzQeKT(9';
$db = 'fastburger';

$conn = mysqli_connect($hn, $un, $pw, $db);
if (!$conn){
    die('Connection Failed: ' . mysqli_connect_error());
}
// else {
//     echo('connection is successful')
// }
