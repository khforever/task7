<?php


/*




6- insert 3 rows in Employees table using pdo and html form
*/


try{

$pdo =new PDO("mysql:host=localhost;dbname=task7_pdo",'root','');
echo "connection success";


// ($_POST);
//query

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$salary=$_POST['salary'];
$age=$_POST['age'];




$pdo->query("insert into employee (fname,lname,email,address,salary,age)
values('$fname','$lname','$email','$address','$salary','$age')");

 
echo "inserted";

}








catch (PDOException $e)
{


    echo $e ;
}
 

?>