
            
<html>
    <head>
        
            <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script><style>
  .bottom-right {
    position: absolute;
    bottom: 50px;
    right: 340px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 50px;
  }
        table{
            border: 1px solid white;
             border-collapse: collapse;
             width: 500px;
            
        
        }
        th, td {
              
              padding: 8px;
              
              text-align: left;
              border-bottom: 1px solid #DDD;
               }
        tr:hover {background-color: #D6EEEE;}
        </style>
        </head>
        <body><center>
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="dashboard.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index1.html">Registration</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="payment.html">payment</a>
      </li>
     
    </ul>
  </div>
</nav>
            
            <?php
                 include("connection.php");
                 $plane_no=$_POST["plane_no"];
                 $sql="SELECT * FROM t3 WHERE plane_no=$plane_no";
                 
                 echo "<table border='1'>
                 <br><br><br><br><br><br>
                 <b>Airplane Details</b><br><br><br>
                 
                 <tr>
                 <th>plane_no</th>
                 <th>source</th>
                 <th>destination</th>
                 <th>no_of_seats</th>
                 
                 
                 
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while ($rows=$result->fetch_assoc()){
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
?>

</center>
        </body>
</html>