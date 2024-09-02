<?php include "connection.php";?>
<!DOCTYPE html>

<html>
  <head>
    <title>ChartJS - BarGraph</title>
    <style type="text/css">
      #chart-container {
        width: 640px;
        height: auto;
      }
    </style>
  </head>
  <body>
    
      <canvas id="mycanvas" hieght="500px" width="500px"></canvas><br> <p>My Chart<p>
   
 <?php
$sql="SELECT DISTINCT Name FROM graph1"; 
$result = mysqli_query($con, $sql); 

echo "<select id='headphones' onchange=myAjaxFunction();>";
while($row = mysqli_fetch_assoc($result)){
echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
}
echo "</select>";

?>		
    <!-- javascript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript" src="app2.js"></script>
	
  </body>
</html>