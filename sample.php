<?php
#Apache lisence
#Version 2.0

@include_once('Importer.php');

$dbhost = "localhost";
$dbuser = "user";
$dbpass = "password";
$dbname = "database";

$path      = "backup/";
$filename  = $path."dump.sql";
$compress  = false;

$connection = @mysql_connect($dbhost,$dbuser,$dbpass);
$dump = new Importer($dbname,$connection,$filename,$compress);

$dump->utf8 = true;

$dump->doImport();
?>
