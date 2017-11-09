<?php
$con = mysqli_connect("localhost","root","ankit123");
print"Connection Created ";
if(!$con)
{
die('Could not connect:'.mysqli_connect_error());
}
mysqli_select_db($con,"ankitdb");
$a=("insert into student values('$_GET[uname]','$_GET[lname]','$_GET[age]')");
if(!mysqli_query($con,$a))
{
die('Error: '.mysql_error());
}
echo "values inserted";
mysql_close($con);
?>
