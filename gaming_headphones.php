<?php
include 'connection.php'

?>





<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<title>Gaming Headphones   </title>
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
</style>
</head>



<div class="header" style= "background-color: #438AF6;">
<a href="comparison.php" ><img src="images/logo.png" class="logo" style="width: 200px; height: 10; margin-top: 30px"/></a> 

    <div class="navcontainer" style = "background-color: #438AF6;">
        <div class="header-right">
           <a>Home</a>    
            <a>Dashboard</a>
            <a href="comparison.php">Comparison</a> 
            <a href="gaming_headphones.php">Gaming Headphones</a>  
            <a>Settings</a>
           
        </div>
        <div class= "header-bottom">
<h2> Gaming Headphones  </h2>
        </div>
    </div>
    
</div>





</head>
<body style = "background-color:#888888; height:1200px">

<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="gaming_headphones.php">Gaming Headphones</a></li>
    
</ul>
<div id ="col1">
    

<div class="row">
          <div class="column1">
            <div class="box">
                 <img src="images/logitech.jpeg" width="70%" height="5%">
    
          </div>
        </div>
      
        <div class="column2">
          <div class="box">
            <h3>LOGITECH G535 Black</h3>
            <h5>Product features </h5>
            <hr>
            <ul>
              <li>Gaming Headset</li>
               <li> Lightspeed Wireless</li>
               <li>Battery Life (rechargeable): 33 hrs </li>
               <br>
               <button type="button" >Add to Basket</button>
            </ul>
  
          </div>
        </div>
  
        <div class="row">
          <div class="column1">
            <div class="box">
                 <img src="images/razer.jpeg" width="70%" height="5%">
      
            </div>
          </div>
        
          <div class="column2">
            <div class="box">
              <h3>RAZER Blackshark V2 Pro</h3>
              <h5>Product features </h5>
              <hr>
              <ul>
                <li>Wireless Gaming Headset</li>
                <li>Black</li>
                <li>Wireless range: Up to 12 m</li>
                <br>
               <button type="button" >Add to Basket</button>
              </ul>
    
            </div>
          </div>
         
  
  
          <div class="row">
            <div class="column1">
              <div class="box">
                   <img src="images/aspire.jpeg" width="50%" height="5%">
        
              </div>
            </div>
          
            <div class="column2">
              <div class="box">
                <h3>ACEZONE A-Spire</h3>
                <h5>Product features </h5>
                <hr>
                <ul>
                  <li>Noise-Cancelling</li>
                   <li> Gaming Headset</li>
                   <li> Black</li>
                   <br>
               <button type="button" >Add to Basket</button>
                </ul>
      
              </div>
            </div>

            <div class="row">
            <div class="column1">
              <div class="box">
                   <img src="images/arctis.png" width="60%" height="5%">
        
              </div>
            </div>
          
            <div class="column2">
              <div class="box">
                <h3>ARCTIS NOVA 1</h3>
                <h5>Product features </h5>
                <hr>
                <ul>
                  <li>Multi-Platform Premium Wired</li>
                   <li> Gaming Headset</li>
                   <li> Grey</li>
                   <br>
               <button type="button" >Add to Basket</button>
                </ul>
      
              </div>
            </div>

     
   
   
   


</div>
</body>




<?php

include('footer.php');
?>

</html>