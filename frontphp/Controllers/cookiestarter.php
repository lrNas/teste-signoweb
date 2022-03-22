<?php 
$apiurl = "http://localhost:3030";
$operation = $_COOKIE['operation'];
$popup = $_COOKIE['popup'];
$errorprompt = $_COOKIE['errorprompt'];
$idEnquete = $_COOKIE['idenquete'];
$valuesoptions = $_COOKIE['enqueteoptions'];
$enquetetitle = $_COOKIE['enquetetitle'];
$enquetestart = $_COOKIE['enquetestart'];
$enqueteend = $_COOKIE['enqueteend'];
$idOption = $_COOKIE['idoption'];
$filtro = $_COOKIE['filtro'];

include "Components/cookiehandlers/array.php";
include "Components/cookiehandlers/objarray.php";
include "Controllers/operations.php";
?>