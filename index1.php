<?php
include("connection.php");
$name1=$_POST["name1"];
$plane_no1=$_POST["plane_no1"];
$source1=$_POST["source1"];
$destination1=$_POST["destination1"];
$no_of_seats1=$_POST["no_of_seats1"];


$sql="INSERT INTO t4(name1,plane_no1,source1,destination1,no_of_seats1)VALUES('$name1','$plane_no1','$source1','$destination1','$no_of_seats1')";
if($conn->query($sql) === TRUE){
    echo'<script>alert(" Registered successfully")</script>';
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}



