<?php
require_once "connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $taskname=ucfirst($_POST["tname"]);
    $taskdescription=ucfirst($_POST["tdescription"]);
    $statuslevel=ucfirst($_POST["tadate"]);
    $completeddate=ucfirst($_POST["tcompleteddate"]);

$sql="INSERT INTO tasks1(tname,tdescriptive,tstatus) VALUES('$taskname','$taskdescription','$completeddate')";
if($conn->query($sql)===TRUE){
    header("Location:listtodo.php");
}
else{
    echo"Error".$sql."<br>".$conn->error;
}
}
$conn->close();
?>
