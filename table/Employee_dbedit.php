<?php
require_once "connection.php";
$id = $_GET['id'];
if($_SERVER["REQUEST_METHOD"]=="POST"){

   $firstname= ucfirst($_POST["Firstname"]);
   $lastname=ucfirst($_POST["Lastname"]);
   $password=$_POST["Password"];
   $status=ucfirst($_POST["Status"]);
   $hashed_password=password_hash($password,PASSWORD_DEFAULT);

   $sql = "UPDATE employee SET firstname='$firstname', lastname='$lastname',password='$hashed_password',status='$status' WHERE id='$id'";
   


if($conn->query($sql)===TRUE){
   header("Location: Employee_listtodo.php?page=1");
}
else{
   echo"Error".$sql. "<br>" .$con->error;
}

}
$con->close();


?>