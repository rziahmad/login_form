<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

if ($_POST["password"] != $_POST["confirm_password"]) {   
    header("location:login.php");
    return;
 }
 else{


//  $name = $_POST['username'];
//  $password = $_POST['password'];

//  $reg = "insert into usertable(name , password) values ('$name' , '$password')";
//     mysqli_query($con, $reg);
$name = $_POST['username'];
$password = $_POST['password'];

 $s = " select * from usertable where name = '$name'";

 $result = mysqli_query($con,$s);

 $num = mysqli_num_rows($result);

 if($num == 1){

    echo "Username Already Taken ";
}
  else
 
 {
     $reg = "insert into usertable(name , password) values ('$name' , '$password')";
     mysqli_query($con, $reg);
     echo "Registration Successful";
 }
}
 
?>