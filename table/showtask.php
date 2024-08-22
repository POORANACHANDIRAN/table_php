<?php
require_once "connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $taskname=$_POST["tname"];
    $taskdescription=$_POST["tdescription"];
    $statuslevel=$_POST["tadate"];
    $completeddate=$_POST["tcompleteddate"];

$sql="INSERT INTO tasks1(tname,tdescriptive,tstatus) VALUES('$taskname','$taskdescription','$completeddate')";
if($conn->query($sql)===TRUE){
    echo "new record successfully";
}
else{
    echo"Error".$sql."<br>".$conn->error;
}
}
$conn->close();
?>
