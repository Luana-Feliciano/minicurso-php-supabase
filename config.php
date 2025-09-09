<?php
//colocar configuracao de banco

$env = parse_ini_file(__DIR__.'/.env');

$con = pg_connect("host=".$env['PG_HOST']. " port=".$env['PG_PORT']. " dbname=".$env['PG_DATABASE']." user=".$env['PG_USER']." password=".$env['PG_PASS']);

// var_dump($con); 

// if($con){
//     echo "conectou"; 
// }