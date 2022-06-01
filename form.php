<?php
include("connection.php");
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$membership='not a member';

$sql="INSERT INTO t1(id,name,email,phone,address,membership)VALUES('$id','$name','$email','$phone','$address','$membership')";
if($conn->query($sql) === TRUE){
    echo'<script>alert("Feedback submitted successfully")</script>';
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}

?>