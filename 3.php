<?php

/*


3- insert 3 rows in Employees table using mysqli

*/




$conn =new mysqli('localhost','root','',"task7");
if ($conn -> connect_error )
{
die ("failed");

}
echo "connected successfuly";


 
$conn -> query(" insert into employee 
(
fname ,lname ,email , address ,salary ,age)  values
('kholoud' ,'mohamed','kk@hhh.com','cairo' ,'3000','35')


");

 

 
$conn -> query(" insert into employee 
(
fname ,lname ,email , address ,salary ,age)  values
('sama' ,'ahmed','ss@hhh.com','cairo' ,'3000','33')


");




$conn -> query(" insert into employee 
(
fname ,lname ,email , address ,salary ,age)  values
('ali' ,'mohamed','aa@hhh.com','cairo' ,'4000','45')


");

?>