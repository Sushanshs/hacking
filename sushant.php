<?php
$server="localhost";
$user="root";
$password="";
$dbname="sushant";
$conn=mysqli_connect('$server', '$user', '$password', '$dbname');
if(!$conn){
    die("Error");
}
$email=$_POST["email"];
$password=$_POST["pass"];
$sql="insert into data values('$email','$password')";
if(mysqli_query($conn, $sql)){
    echo("Successfully Logged in");
}
else{
    echo("Please Try again");
}
?>