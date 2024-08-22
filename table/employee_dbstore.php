<?php
require_once "connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=ucfirst($_POST["Firstname"]);
    $lname=ucfirst($_POST["Lastname"]);
    $password=$_POST["Password"];
    $status=ucfirst($_POST["Status"]);
    $hashed_password=password_hash($password,PASSWORD_DEFAULT);

$sql="INSERT INTO employee(firstname,lastname,password,status) VALUES('$fname','$lname','$password','$status')";
if($conn->query($sql)===TRUE){
    header("Location:employee_listtodo.php?page=1");
}
else{
    echo"Error".$sql."<br>".$conn->error;
}
}
$conn->close();
?>
