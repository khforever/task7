<?php

/*
(5)

create table Employee with:
id integer
fname text
lname text
email text
address text
salary int
age int

*/



try{

$pdo =new PDO("mysql:host=localhost;dbname=task7_pdo",'root','');
echo "connection success";



$pdo -> query( "CREATE TABLE employee
 (id int not null auto_increment primary key ,
 fname varchar (20),
 lname varchar (50),
 email varchar (100),
 address varchar (200),
 salary int (20),
 age int (20)
 )");
 

}








catch (PDOException $e)
{


    echo $e ;
}
 

?>