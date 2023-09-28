<?php



/*



2-create table Employee with:
id integer
fname text
lname text
email text
address text
salary int
age int



*/





$conn =new mysqli('localhost','root','',"task7");
if ($conn -> connect_error )
{
die ("failed");

}
echo "connected successfuly";



$conn -> query( "CREATE TABLE employee
 (id int not null auto_increment primary key ,
 fname varchar (20),
 lname varchar (50),
 email varchar (100),
 address varchar (200),
 salary int (20),
 age int (20)
 )");
 

?>