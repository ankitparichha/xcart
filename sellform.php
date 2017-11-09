<?php
    session_start();
    $err="";
    $err1="";
    extract($_REQUEST);
          $con = mysqli_connect("localhost","root","","ankitdb");
          if(!$con)
          {
          die('Could not connect:'.mysqli_connect_error());
          }
          $data=mysqli_query($con,"insert into sell values('','$category','$title',$price,'$brand','$condition','$date','$description','$nname',$nphone,'$nemail','$address','$state','$city',$pin,'')");
          if($data==1) {
            $_SESSION['success_sell']=1;
            header('Location:main.php');
          }
          mysqli_close($con);
?>
