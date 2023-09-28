<?php


//  1-create database using mysqli






$conn =new mysqli('localhost','root','');
if ($conn -> connect_error )
{
die ("failed");

}
echo "connected successfuly";

$conn -> query( "CREATE DATABASE task7");





 
 

 

?>