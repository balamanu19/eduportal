<?php
$con=mysqli_connect('localhost','root');
if($con)
{
    echo"sucessful connection";
    
}else
{
    echo" no connection";
}
mysqli_select_db($con,'eduportal');
$user=$_POST['user'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];
$query="insert into userinfodata(user,email,phone,comment) values('$user','$email','$phone','$comment')";
echo"$query";
mysqli_query($con,$query);
header('location:index.php');
?>