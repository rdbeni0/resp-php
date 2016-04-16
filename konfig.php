<?php
$login = "";
$pass = "";
$srw = "localhost";
$bdname = "";
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');


try
{
$bede = new PDO("mysql:host={$srw};
dbname={$bdname};
charset=utf8", $login, $pass, $options);
}


catch(PDOException $blad)
{
die("Nie da sie polaczyc z baza. Blad numer: " . $blad->getMessage());
}


$bede->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bede->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
header('Content-Type: text/html; charset=utf-8');
session_start();
?>
