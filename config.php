<?php
//colocar configuracao de banco
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); // tudo, menos Notices
ini_set('display_errors', 1);

$env = parse_ini_file(__DIR__.'/.env');

$con = pg_connect("host=".$env['PG_HOST']. " port=".$env['PG_PORT']. " dbname=".$env['PG_DATABASE']." user=".$env['PG_USER']." password=".$env['PG_PASS']);

// var_dump($con); 

// if($con){
//     echo "conectou"; 
// }