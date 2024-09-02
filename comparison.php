<?php


include('connection.php');



?>



<!DOCTYPE html>
<html>
<head >

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js">
</script>
<title>Comparison</title>
<style>
ul.breadcrumb {
  padding: 0px 6px;
  list-style: none;
  background-color: #888888;
  float:left;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: ">";
}
ul.breadcrumb li a {
  color: black;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
.box1{
    width: 500px;
     height: 200px;
     margin: 10px;
     left: 200px;
     position: relative;
     top: 60px;
    
}
.box2{
     width: 500px;
     height: 400px;
     margin: 10px;
     position: relative;
     left: 900px;
     top: -460px;
     
    
    
}
.box3{
     width: 500px;
     height: 200px;
     margin: 10px;
     margin-top: -300px;
     margin-left: 150px;
     position: relative;
    
    
}
.box4{
    width: 500px;
     height: 200px;
     margin: 10px;
     left: 900px;
     position: relative;
     top: 60px;
    
}


.footer {

width: 100%;
height: 120px; 
position: relative;
background: #438AF6;
}

#footer{


width: 100%;
  background: #438AF6;
  padding: 20px 10px;
  border: 0.5px solid black;
  width: 100%;
  position: fixed;
  clear: both;
  height: 140px;

  
  bottom: 0;
 

}

.footerLinks {
 text-align: left;
 float: left;

}
.footerLinks ul {
padding: 0;
  list-style-type: none;
  margin: 0;
}
/* Hw to remove bulet Points */

.footerLinks a {
color: black;
text-decoration: none;
font-size: 13px;
}

</style>
</head>



<div class="header">
    <a href="comparison.php" ><img src="images/logo.png" class="logo"  style="width: 200px; height: 10; margin-top: 30px"/></a> 

        <div class="navcontainer" style = "background-color: #438AF6;">
        <div class="header-right">
        <a>Home</a>    
            <a>Dashboard</a>
            <a href="comparison.php">Comparison</a> 
            <a href="gaming_headphones.php">Gaming Headphones</a>  
            <a>Settings</a>
        </div>
        <div class= "header-bottom">
<h2>Comparison</h2>
        </div>
    </div>
    
</div>

<body style="background-color:#888888; height:1200px">
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="comparison.php">Comparison</a></li>
    
</ul>




<?php


//declare and run sql
$sql_one = "SELECT xaxis, value from graph1 where Name = 'LOGITECH G535'";
$result =mysqli_query($con, $sql_one);

//initialize variables
$dataX_one = "";
$dataY_one = "";

//Loop to get data
While($row=mysqli_fetch_assoc($result)){
$dataX_one = $dataX_one . "'". $row['xaxis']."',";
$dataY_one = $dataY_one. "'". $row['value']."',";
}

//Trim your string for white spaces and for comma at the end
$dataX_one=trim($dataX_one, ",");
$dataY_one=trim($dataY_one, ",");

//

//declare and run sql
$sql_two = "SELECT  xaxis, value from graph1 where Name = 'RAZER Blackshark V2 Pro'";
$result =mysqli_query($con, $sql_two);

//initialize variables
$dataX_two = "";
$dataY_two = "";

//Loop to get data
While($row=mysqli_fetch_assoc($result)){
$dataX_two = $dataX_two . "'". $row['xaxis']."',";
$dataY_two = $dataY_two. "'". $row['value']."',";}

//Trim your string for white spaces and for comma at the end
$dataX_two=trim($dataX_two, ",");
$dataY_two=trim($dataY_two, ",");

//

//declare and run sql
$sql_three = "SELECT xaxis, value from graph1 where Name = 'ARCTIS NOVA 1'";
$result =mysqli_query($con, $sql_three);

//initialize variables
$dataX_three = "";
$dataY_three = "";

//Loop to get data
While($row=mysqli_fetch_assoc($result)){
$dataX_three = $dataX_three . "'". $row['xaxis']."',";
$dataY_three = $dataY_three. "'". $row['value']."',";
}

//Trim your string for white spaces and for comma at the end
$dataX_three=trim($dataX_three, ",");
$dataY_three=trim($dataY_three, ",");

//

//declare and run sql
$sql_four = "SELECT  xaxis, value from graph1 where Name = 'ACEZONE A-Spire'";
$result =mysqli_query($con, $sql_four);

//initialize variables
$dataX_four = "";
$dataY_four = "";

//Loop to get data
While($row=mysqli_fetch_assoc($result)){
$dataX_four = $dataX_four . "'". $row['xaxis']."',";
$dataY_four = $dataY_four. "'". $row['value']."',";}

//Trim your string for white spaces and for comma at the end
$dataX_four=trim($dataX_four, ",");
$dataY_four=trim($dataY_four, ",");

?>
  


<div class="box1" style="width: 500px; height: 200px;">

<h4> Select the background Color of the chart:</h4>
<!-- background color  -->
<div id="backgroundColorControls">
  <input type="radio" id="colorBlack" name="backgroundColor" value="black" checked>
  <label for="colorBlack">Black Background</label>

  <input type="radio" id="colorOrange" name="backgroundColor" value="orange">
  <label for="colorOrange">Orange Background</label>

  <input type="radio" id="colorGreen" name="backgroundColor" value="green">
  <label for="colorGreen">Green Background</label>
</div>
  <canvas id="myChart"></canvas>



<script type="text/javascript">
    var myChartContext = document.getElementById('myChart').getContext('2d');

myChartContext.canvas.style.width = "70vh";
myChartContext.canvas.style.height = "25vw";
myChartContext.canvas.style.backgroundColor = "white";
myChartContext.canvas.style.marginLeft = "10px";

  
  var data = {
    type: 'bar', 
    data: {
      labels:[<?php echo $dataX_one; ?>] ,
      datasets: [{
          label: 'LOGITECH G535',
          data: [<?php echo $dataY_one; ?>],
          backgroundColor: 'pink',
          borderWidth: 1,
          hoverBorderColor: 'black',
        },
        {
          label: 'RAZER Blackshark V2 Pro',
          data: [<?php echo $dataY_two; ?>],
          backgroundColor: 'blue',
          borderWidth: 1,
          hoverBorderColor: 'black',
        },
      ],
    },
    options: {
      maintainAspectRatio: false,
      responsive: false,
      title: {
        display: true,
        text: 'Headphone Comparison'
      },
      legend: {
        display: true,
      },
      scales: {
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Value'
          },
          ticks: {
            beginAtZero: true,
            max: 500
          }
        }],
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Headphone Specifications'
          }
        }]
      }
    }
  };

  
   // Initialize the chart
   var chart1 = new Chart(myChartContext, data);

// Adding event listener for background color change
document.querySelectorAll('input[name="backgroundColor"]').forEach(function(elem) {
  elem.addEventListener("change", function(event) {
    var color = event.target.value; // Get the selected color value

    // Update the canvas background color
    myChartContext.canvas.style.backgroundColor = color;
  });
});
</script>



<!-- chart 2 -->


<div class= "box2" style= "width=500 height=200 margin=10px" > 
 <h4> Select the type of chart:</h4><select id= "nameChart" >
 

    <option value= "bar"> Bar Chart </option>
    <option value= "line"> Line Chart </option>
</select>
<canvas id='myChart2' ></canvas>
<script type="text/javascript">
    //this line gets the canvas 2d into javascript variable called myChart
var mychart2 = document.getElementById('myChart2').getContext('2d');


mychart2.canvas.style.width = "70vh";
mychart2.canvas.style.height = "25vw";
mychart2.canvas.style.backgroundColor = "white";




var typeChart = document.getElementById('nameChart');

var data = { 
    type: 'bar' ,
    data: {
        labels: [<?php echo $dataX_three;  ?>],
        datasets:[{
            label: 'ARCTIS NOVA 1',
            data: [<?php echo $dataY_three; ?>],
                backgroundColor: [' pink ',' pink'], 
                borderWidth: 1,
                //borderColour: 'grey',
                 hoverBorderColor: 'black',
                 fill: false,
        },
        {
            label: 'ACEZONE A-Spire',
            data: [<?php echo $dataY_four; ?>],
                backgroundColor: [' #6E6E6E', ' #6E6E6E'], 
                borderWidth: 1,
                borderColour: 'grey',
                 hoverBorderColor: 'black',
        },
     ],
    },
    

    options: {
       
        
                title:{
                    display: true,
                    text: 'Headphone Comaprison'
                },
                legend:{
                    display: true,
                    text: ' Legend'
                },

                scales:{
                    yAxes: [{
                        display:true,
                        scaleLabel:{ 
                        display: true,
                        labelString: 'Value'
                        },
                        


                        ticks: {
                            beginAtZero: true,
                            steps:10,
                            stepValue: 5,
                            max: 500
                        }
                        
                    }],
                    xAxes: [{ 
                    display: true,
                    scaleLabel: {
                    display: true,
                    labelString: 'Headphone Specifications' 
            }
        }]
                    
                }

            }
};




var chart2 = new Chart(mychart2, data);

typeChart.addEventListener('change', function(){
    data.type = this.value;
    chart2.destroy();
    chart2 = new Chart(mychart2, data);
});
// this line creates a new chart obejct
// JSON CHART
</script>



</div>

<br>
<div class= "box3" style= "width=500 height=200 margin=10px" > 
<canvas id="mycanvas" height="100px" width="100px" ></canvas><br> <p>Product Sales 2021-2023<p>
<h4> Select the type of chart:</h4>
   
   <?php
  $sql="SELECT DISTINCT Name FROM grapgh2"; 
  $result = mysqli_query($con, $sql); 
  
  echo "<select id='headphones' onchange=myAjaxFunction();>";
  while($row = mysqli_fetch_assoc($result)){
  echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
  }
  echo "</select>";
  
  ?>	
   <select id="chartType" onchange="myAjaxFunction();">
    <option value="line">Line Chart</option>
    <option value="horizontalBar">Horizontal Chart</option>
  </select>  	
  </div>
  <!-- javascript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
      <script type="text/javascript" src="app2.js"></script>









</body>

</html>

</div>

<?php
include('footer.php');
?>