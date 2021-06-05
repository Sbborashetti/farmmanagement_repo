<?php 

$f_Name = $_POST["Fertilizer_Name"];
$f_Id = $_POST["Fertilizer_Id"]; 
$Price = $_POST["Price"]; 



$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$query="insert into fertilizers(f_name,f_id,f_price) values('$f_Name',' $f_Id','$Price')";

$res=mysqli_query($conn,$query);
if(!$res)
{
  print "Error in inserting values";
}
else
{
 print "inserted successfully";
include("land.html");
}

mysqli_close($conn);
?>
