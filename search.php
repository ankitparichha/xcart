<?php

session_start();
extract($_REQUEST);
$con = mysqli_connect("localhost","root","","ankitdb");
if(!$con)
{
die('Could not connect:'.mysqli_connect_error());
}
$sql='select * from sell where title like "%'.$search.'%"';
$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)>0)
{
  $result=mysqli_fetch_array($rs);
  $_SESSION['searchid']=$result['id'];
  header('Location:buy.php');
}
else{
  $_SESSION['fail-search']=1;
  $x=$_SESSION['prev'];
  unset($_SESSION['prev']);
  header('Location:'.$x);
}
?>
