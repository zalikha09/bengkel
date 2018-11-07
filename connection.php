<?php

$link = mysqli_connect('localhost', 'root', '');
if (!$link){
    die("Database Connection Failed" . mysqli_error($link));
}
$select_db = mysqli_select_db($link, 'bengkel');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($select_db));
}

?>