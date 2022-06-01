<?php
include("connection.php");
$plane_no=$_POST["plane_no"];
$source=$_POST["source"];
$destination=$_POST["destination"];
$no_of_seats=$_POST["no_of_seats"];


$sql="INSERT INTO t3(plane_no,source,destination,no_of_seats)VALUES('$plane_no','$source','$destination','$no_of_seats')";
if($conn->query($sql) === TRUE){
    echo'<script>alert("Airplane details add successfully to the database.")</script>';
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}

?>