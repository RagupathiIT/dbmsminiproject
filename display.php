<html>
    <head>
        <style>
           
        table{
            border-style:solid;
            border-width:3px;
            border-color:black;
            width:70%;
            height:50%;
            text-align:center;
            border-collapse:collapse;
            background-color:white;
        }
        </style>
        
        </head><br>
        <body style="background-color:skyblue;"><center>
        <h2>Airplane available list</h2>
            <?php
                 include("connection.php");
                 
                 $sql="SELECT * FROM t3" ;
                 echo "                 <table border='1'>
                 <br><br><br><br>
                 
                 <tr>
                 <th>PLANE NO</th>
                 <th>SOURCE</th>
                 <th>DESTINATION</th>
                 <th>NO OF SEATS</th>
                 
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows['plane_no'] . "</td>";
        echo "<td>" . $rows['source'] . "</td>";
        echo "<td>" . $rows['destination'] . "</td>";
        echo "<td>" . $rows['no_of_seats'] . "</td>";
         

        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}
$conn->close();
?></center>
        </body>
</html>