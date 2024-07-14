<?php
$uname=$_POST["name"];
$email=$_POST["email"];
$pw=$_POST["pw"];
$rpw=$_POST["rpw"];
$date=$_POST["birthday"];

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="testdb";

$conn= new mysqli("$host","$dbusername","$dbpassword","$dbname");


if(mysqli_connect_error()){
    die();
}
    
$sql="insert into 20mis7060_users(username,email,password,date) values ('$uname','$email','$rpw','$date')";
try{
$conn->query($sql);
   }catch(Error $e){
  
    echo "<h1> registered</h1>";   
  }    

if($pw===$rpw){
    if($conn->query($sql)){
        echo "<h1>Successfully registered</h1>";
    }
    else{
        echo "connection error";
    }

}else{
    echo "password and repassword should match";
}
?>