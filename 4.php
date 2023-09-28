<?php


//  4-create database using pdo




try{

$pdo =new PDO("mysql:host=localhost;",'root','');


$pdo-> exec("CREATE DATABASE task7_pdo ");

echo "connection success";




}



 




catch (PDOException $e)
{


    echo $e ;
}


?>