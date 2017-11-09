<?php
$con = mysqli_connect("localhost","root","ankit123");
print"Connection Created ";
if(!$con)
{
die('Could not connect:'.mysqli_connect_error());
}
#creating database--
#if(mysqli_query($con,"CREATE DATABASE ankitdb"))
#{
#echo "Database created";
#}
#else
#{
#echo "Error creating database: ".mysqli_connect_error();
#}

#creating table--
#mysqli_select_db($con,"ankitdb");
#$sql="create table student
#(
#stuName varchar(15),
#stuSurName varchar(15),
#Age int
#)";
#echo "Table Student1 Created Successfully";
#mysqli_query($con,$sql);

#insert ---
#mysqli_select_db($con,"ankitdb");
#$sql="insert into student values('abc','xyz',15)";
#mysqli_query($con,$sql);
#mysqli_query($con,"insert into student values('wer','asd',14)");


mysqli_close($con);
?>
