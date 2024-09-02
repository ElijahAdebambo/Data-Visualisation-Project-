<?php
//setting header to json
header('Content-Type: application/json');
$selection=$_GET['headphones'];
include "connection.php";

//query to get data from the table
$sql = "SELECT Year, Sales  FROM grapgh2 where Name=".$selection;
//$sql2= "SELECT Balls, matchID FROM scores where Name=".$selection;
//$sql3= "SELECT avg, matchID FROM scores where Name=".$selection;
//execute query
$result = mysqli_query($con,$sql);
//$result2 = mysqli_query($db,$sql2);
//$result3 = mysqli_query($db,$sql3);
//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}
//foreach ($result2 as $row) {
//  $data[] = $row;
//}
//foreach ($result3 as $row) {
//  $data[] = $row;
//}

//free memory associated with result
$result->close();

//close connection
$con->close();

//now print the data
print json_encode($data);